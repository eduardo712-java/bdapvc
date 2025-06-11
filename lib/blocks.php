<?php

/**
 * ----------------------------------------------------------
 * BLOCOS DE CONTEÚDO
 * ----------------------------------------------------------
 */
/**
 * ---------------------------------------------
 * ATRAÇÕES
 * ---------------------------------------------
 */

/**
 * ----------------------
 * Remove a Metabox de Locais para que não apareça em duplicidade com a Metabox
 * gerada pelo ACF (mais completa)
 * ----------------------
 */
function yb_remove_taxonomy_local() {
  remove_meta_box('tagsdiv-local', 'atracao', 'side');
}

add_action('admin_menu', 'yb_remove_taxonomy_local');

/**
 * ----------------------
 * Converte a data da atração salva no banco
 * ----------------------
 */
function yb_get_day_atraction($post_id, $taxonomy) {
  $terms = get_the_terms($post_id, $taxonomy);
  $day = get_field('local_data', 'local_' . $terms[0]->term_id);
  echo date("d/m", strtotime($day));
}

/**
 * ---------------------------------------------
 * EVENTOS
 * ---------------------------------------------
 */

/**
 * ----------------------
 * Recupera a programação de um evento
 * ----------------------
 */
function yb_get_scheduling() {
  // Recupera os locais do evento
  $terms = get_terms('local');
  // Cria uma array para todos os termos dentro da taxonomia 'local' (data e nome do local)
  // usando o campo customizado 'local_data' como indice
  $array = array();
  foreach ($terms as $term) {
    $issue_date = get_field('local_data', $term);
    // Armazena no vetor o nome e id do local
    $array[$issue_date] = array($term->term_id, $term->name);
  }
  // Ordena o array de locais do evento pela data em ordem crescente 
  ksort($array, SORT_REGULAR);

  // Verifica o número de locais para organizar as colunas por multiplos
  // Ainda sem uso
  $n = count($array);
  // Múltiplo de 2, 2 colunas
  if ($n % 2 == 0) {
    $coluna = 'col-sm-6';
  } else if ($n % 3 == 0) {
    $coluna = 'col-sm-4';
  }

  // Monta as colunas com os locais e datas em que o evento acontecerá
  $i = 0;
  foreach ($array as $issue_date => $term_name) {
    // Formata o custom field de data
    $issue_date = date("d/m", strtotime($issue_date));
    //echo "<li>" . $term_name . " " . $issue_date . "</li>"; //displays the term name and customfield issue_date
    echo '<div class="col-md-4">';


    echo '<div class="card bg-light mb-4 shadow-sm" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-once="true" data-aos-delay="'. $i*150 .'">';
    echo '  <div class="card-header">' . $term_name[1] . " - " . $issue_date . '</div>';
    echo '    <ul class="list-group list-group-flush">';

    // Recupera as atrações associadas a este local
    // Argumentos: (cpt, limite, categoria, ordenar, ordem, meta, meta_value, autor, exclude, paged)
    $atracoes = get_posts_cpt('atracao', -1, '', '', 'DESC', 'atracao_local', $term_name[0], '', '', $paged);

    foreach ($atracoes as $post) {
      $data = get_the_date('d \d\e F \d\e Y', $post->ID);
      $conteudo = $post->post_content;
      $url = get_permalink($post->ID);

      echo '      <a class="list-group-item list-group-item-action" href="' . $url . '">' . $post->post_title . '</a>';
    }
    echo '    </ul>';
    echo '</div>';

    echo '</div>';
    $i++;
  }
}

/**
 * ---------------------------------------------
 * CURSOS
 * ---------------------------------------------
 */

/**
 * ----------------------
 * Remove a Metabox de Tipos de Cursos para que não apareça em duplicidade com a Metabox
 * gerada pelo ACF (mais completa)
 * ----------------------
 */
function yb_remove_taxonomy_curso_tipo() {
  remove_meta_box('tagsdiv-curso_tipo', 'curso', 'side');
}

add_action('admin_menu', 'yb_remove_taxonomy_curso_tipo');

/**
 * ----------------------
 * Remove a Metabox de Tipos de Participantes para que não apareça em duplicidade com a Metabox
 * gerada pelo ACF (mais completa)
 * ----------------------
 */
function yb_remove_taxonomy_curso_tipo_participante() {
  remove_meta_box('tagsdiv-curso_tipo_participante', 'curso', 'side');
}

add_action('admin_menu', 'yb_remove_taxonomy_curso_tipo_participante');

/**
 * ----------------------
 * Adiciona o título e conteúdo de texto no CPT 'inscricao_curso'.
 * gerada pelo ACF (mais completa)
 * ----------------------
 */
add_action('acf/save_post', 'yb_fill_cpts', 10);

function yb_fill_cpts($post_id) {

  // Array com valores dos campos postados
  $fields = $_POST['acf'];

  switch (get_post_type($post_id)) {
    case 'inscricao_curso':
      // Recupera o valor do campo 'Nome' usado para inserir no Title e Content do post
      $field = $_POST['acf']['field_57d853e032b64'];
      break;

    default:
      return;
}

  $my_post = array(
      'ID' => $post_id,
      'post_title' => $field,
      'post_content' => $field,
          //'post_author' => $user_id
  );
  wp_update_post($my_post);
}

/**
 * ---------------------------------------------
 * NEWS
 * ---------------------------------------------
 */
?>
