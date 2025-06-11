<?php
//======================================================================
// FUNÇÕES EM AJAX.
//======================================================================

/**
 * ----------------------------------------------------------
 * Recupera a metragem por pacote de um produto através do títutlo
 * ----------------------------------------------------------
 */
add_action('wp_ajax_ajax_get_metragem_function', 'ajax_get_metragem_function'); // apenas para Admins
add_action('wp_ajax_nopriv_ajax_get_metragem_function', 'ajax_get_metragem_function'); // para todos os usuários
function ajax_get_metragem_function()
{
  $titulo = $_POST['data'];

  $args = array(
    'post_type' => 'produto', // Specify post type as 'page'
    'title' => $titulo, // Search by page title (using 'name' parameter)
    'posts_per_page' => 1, // Limit results to 1 (since we only need the ID)
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $id = get_the_ID(); // Get the ID of the found page
      $metragem = get_field('produto_metragem_pct', $id);
      $referencia = get_field('produto_referencia', $id);

      // Recupera a categoria do produto
      $taxonomy = 'categoria'; // Taxonomia personalizada
      $terms = wp_get_post_terms($id, $taxonomy);
      $categoria = $terms[0]->slug;

      //echo get_field('produto_metragem_pct', $id);
      echo json_encode(array("metragem"=>$metragem,"referencia"=>$referencia,"categoria"=>$categoria));
       
    }
  } else {
    echo null; // Return null if no page found
  }
  wp_reset_postdata(); // Reset post data after the loop

  wp_die(); // Necessário para terminar imediatamente a retornar a resposta para consulta
}

/**
 * ----------------------------------------------------------
 * Modelo de consulta via Ajax
 * ----------------------------------------------------------
 */
add_action('wp_ajax_ajax_example_function', 'ajax_example_function'); // apenas para Admins
add_action('wp_ajax_nopriv_ajax_example_function', 'ajax_example_function'); // para todos os usuários
function ajax_example_function()
{
  parse_str($_POST['data'], $array_data); // Converte a string postada em variáveis
  $ID = $array_data['ajax-example-field'];

  if (get_the_title($ID)) { // Verifica se o ID fornecido é de uma página válida
    $msg = '<strong>Título:</strong> ' . get_the_title($ID) . '.';
  } else {
    $msg = '<strong>Título:</strong> Não existe página com o ID ' . $ID . '.';
  }

  echo $msg; // Retorna o valor recuperado  
  wp_die(); // Necessário para terminar imediatamente a retornar a resposta para consulta
}
