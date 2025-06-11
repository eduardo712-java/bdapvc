<?php
//======================================================================
// FUNÇÕES UTILITÁRIAS.
//======================================================================

/**
 * ----------------------------------------------------------
 * Adiciona uma capability a um role.
 * O correto seria definir as capabilitys e rodar esta função apenas uma vez
 * para registrá-las no ato da ativação do tema junto a função yeti_bootstrap_setup().
 * ----------------------------------------------------------
 */
function yb_edit_theme_caps($cpt, $user_role = 'admin', $action = 'add')
{
  // Recebe o 'role' do autor
  $role = get_role($user_role);
  $cpt = "pedido";

  foreach (array('publish', 'edit', 'delete', 'edit_published', 'delete_published', 'edit_others', 'delete_others', 'read_private', 'edit_private', 'delete_private') as $cap) {
    // Adiciona a 'capability' ao 'role'.
    if ($action == 'add') {
      $role->add_cap("{$cap}_{$cpt}s");
      // Remove a 'capability' ao 'role'.
    } else if ($action == 'remove') {
      $role->remove_cap("{$cap}_pedidos");
    }
  }
}
//add_action( 'admin_init', 'yb_edit_theme_caps'); // Descomentar abaixo apenas quando precisar atribuir a capability a um role

/**
 * ----------------------------------------------------------
 * Recebe o slug de um $post ativo.
 * ----------------------------------------------------------
 */
function yb_get_slug()
{
  global $post;
  return $post->post_name;
}

/**
 * ----------------------------------------------------------
 * Recebe o perfil do usuário logado
 * ----------------------------------------------------------
 */
function yb_get_user_role()
{
  if (is_user_logged_in()) {
    // Recupera o ID do usuário logado
    $user_info = get_userdata(get_current_user_id());
    //echo 'Username: ' . $user_info->user_login . "\n";
    $role = implode(', ', $user_info->roles);
    //echo 'User ID: ' . $user_info->ID . "\n";
    return $role;
  } else {
    return false;
  }
}

/**
 * ----------------------------------------------------------
 * Verifica se um usuário está logado e seu perfil possui
 * permissão para acessar a página
 * ----------------------------------------------------------
 */
function yb_check_loged($perfil)
{
  if (is_user_logged_in()) {
    $user_role = yb_get_user_role();
    if ($user_role === $perfil) {
      return true;
    } else if (is_super_admin()) {
      return true;
    } else {
      echo 'Você não possui permissão para acessar está página.';
      die();
    }
  } else {
    header("Location: " . get_site_url() . "/login");
    die();
  }
}

/**
 * ----------------------------------------------------------
 * Recupera um CPT de um usuário
 * ----------------------------------------------------------
 */
function get_cpt_usuario($post_type)
{
  // Pega o ID do usuário logado
  if (is_user_logged_in()) {
    $user_id = get_current_user_id();
    $args = array(
      'post_type' => $post_type,
      'author' => $user_id
    );
    $posts_array = get_posts($args);
    if ($posts_array) {
      //echo "Usuário possui este tipo de CPT associado ao seu ID";
      $post = $posts_array[0];
      //echo $post->ID;;
      return $post->ID;
    } else {
      //echo "Usuário não possui este tipo de CPT associado ao seu ID";
      return false;
    }
  } else {
    return false;
  }
}



/**
 * ----------------------------------------------------------
 * Recupera e exibe a primeira categoria de um post com link
 * ----------------------------------------------------------
 */
function yb_get_post_category_linked($post_id)
{
  $category = get_the_category($post_id);

  if ($category[0]) {
    echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
  }
}

/**
 * ----------------------------------------------------------
 * Recupera e exibe as categorias associadas a um post
 * ----------------------------------------------------------
 */
function yb_get_post_categories($post_id)
{
  $array = wp_get_post_categories($post_id);
  $cats = array();

  foreach ($array as $key => $c) {
    $cat = get_category($c);
    $cats[] = array('name' => $cat->name, 'slug' => $cat->slug);

    // Se for o último elemento do array, não adiciona a vírgula após o nome da categoria
    if ($c === end($array)) {
      echo $cat->name;
    } else {
      echo $cat->name . ', ';
    }
  }
}

/**
 * ----------------------------------------------------------
 * Recupera e exibe as taxonomias associadas a um post
 * ----------------------------------------------------------
 */
function yb_get_post_taxo($post_id, $taxonomy)
{
  $terms = get_the_terms($post_id, $taxonomy);
  //var_dump($terms);
  echo $terms[0]->name;
}

/**
 * ----------------------------------------------------------
 * Recupera e exibe a lista de categorias 
 * ----------------------------------------------------------
 */
function yb_get_categories($class = 'btn btn-outline-primary')
{
  $categories =  get_categories();
  foreach ($categories as $category) {
    echo "<a href='/category/" . $category->slug . "' class='" . $class . "'>" . $category->cat_name . "</a> \n";
  }
}

/**
 * ----------------------------------------------------------
 * Recupera a lista de termos de uma taxonomia ordenada por
 * um custom field de data
 * ----------------------------------------------------------
 */
function yb_get_term_list($name)
{
  $terms = get_terms($name);
  // Cria uma array para todos os termos dentro da taxonomia 'local' usando o campo customizado 'local_data' como indice.
  $array = array();
  foreach ($terms as $term) {
    $issue_date = get_field('local_data', $term);
    $array[$issue_date] = $term->name;
  }

  ksort($array, SORT_REGULAR); // sorts the issue_archive array from high to low

  foreach ($array as $issue_date => $term_name) {
    $issue_date = date("d/m", strtotime($issue_date));
    echo "<li>" . $term_name . " " . $issue_date . "</li>"; // displays the term name and customfield issue_date
    //if (++$i == 4) break; //Stops the foreach after 4
  }
}

/**
 * ----------------------------------------------------------
 * Calcula o tempo médio de leitura de um post
 * ----------------------------------------------------------
 */
function yb_reading_time()
{
  $media = 300;
  $content = get_post_field('post_content', get_the_ID());
  $word_count = str_word_count(strip_tags($content));
  $readingtime = ceil($word_count / $media);

  if ($readingtime == 1) {
    $timer = " minuto";
  } else {
    $timer = " minutos";
  }
  $totalreadingtime = $readingtime . $timer;
  return $totalreadingtime;
}

/**
 * ----------------------------------------------------------
 * Recupera os posts com argumentos básicos
 * ----------------------------------------------------------
 */
function yb_get_posts_cpt($post_type, $limite = 3, $categoria = '', $categoria_id = '', $ordem = '', $ordem_por = 'DESC', $meta = '', $meta_value = '', $autor = '', $inclui = '', $exclui = '', $paged = '', $offset = '', $ignore_sticky = 0, $taxonomy = '')
{
  $args = array(
    'post_type' => $post_type,
    'posts_per_page' => $limite,
    'category_name' => $categoria,
    'cat' => $categoria_id,
    'orderby' => $ordem,
    'order' => $ordem_por,
    'meta_key' => $meta,
    'meta_value' => $meta_value,
    'author_name' => $autor,
    'post__in' => $inclui,
    'post__not_in' => $exclui,
    'paged' => $paged,
    'offset' => $offset,
    'ignore_sticky_posts' => $ignore_sticky,
    'tax_query' => array($taxonomy)
  );
  //$posts_array = get_posts($args);
  $posts_array = query_posts($args);
  return $posts_array;
}


/**
 * ----------------------------------------------------------
 * Recupera as informações da página corrente para montar
 * os dados OG e Twitter Cards no cabeçaho do documento
 * ----------------------------------------------------------
 */
function yb_get_page_info()
{

  $post_id = get_the_ID();
  $page_title = get_bloginfo('name');
  $page_description_default = get_bloginfo('description');
  $page_img_default = get_template_directory_uri() . "/assets/img/facebook-meta.jpg";

  if (is_front_page() || is_home()) {

    // Home

    $page_title = get_bloginfo('name');
    $page_description = $page_description_default;
    $page_img = $page_img_default;
    $page_url = home_url();
  } elseif (is_single() && 'post' == get_post_type()) {

    // Single posts

    $page_url = get_permalink($post_id);
    $page_title = get_the_title($post_id);

    // Recupera a imagem destacada
    if (has_post_thumbnail($post_id)) {
      $page_img = get_the_post_thumbnail_url($post_id, 'yeti-thumb');
    } else {
      $page_img = $page_img_default;
    }

    if (get_the_excerpt($post_id)) {
      $page_excerpt = get_the_excerpt($post_id);
      $page_excerpt = substr($page_excerpt, 0, 200); // Limita o resumo a 200 caracteres
      $page_description = substr($page_excerpt, 0, strrpos($page_excerpt, ' ')) . "...";
    } else {
      $page_description = $page_description_default;
    }
  } elseif (is_page()) {

    // Single page

    $page_url = get_permalink($post_id);
    $page_title = get_the_title($post_id);

    // Recupera a imagem destacada
    if (has_post_thumbnail($post_id)) {
      $page_img = get_the_post_thumbnail_url($post_id);
    } else {
      $page_img = get_template_directory_uri() . "/assets/img/facebook-meta.jpg";;
    }

    if (get_the_excerpt($post_id)) {
      $page_excerpt = get_the_excerpt($post_id);
      $page_excerpt = substr($page_excerpt, 0, 200); // Limita o resumo a 200 caracteres
      $page_description = substr($page_excerpt, 0, strrpos($page_excerpt, ' ')) . "...";
    } else {
      $page_description = $page_description_default;
    }

    $page_img = get_template_directory_uri() . "/assets/img/facebook-meta.jpg";
  } else {
    $page_title = get_bloginfo('name');
    $page_description = get_bloginfo('description');
    $page_img = get_template_directory_uri() . "/assets/img/facebook-meta.jpg";
    $page_url = home_url();
  }


  $page_info = (object) [];
  $page_info->title = $page_title;
  $page_info->description = $page_description;
  $page_info->img = $page_img;
  $page_info->url = $page_url;

  return $page_info;
}


/**
 * ----------------------------------------------------------
 * Verifica se uma página existe com determinado slug.
 * ----------------------------------------------------------
 */
function yeti_bootstrap_the_slug_exists($post_name)
{
  global $wpdb;
  if ($wpdb->get_row("SELECT post_name FROM wp_posts WHERE post_name = '" . $post_name . "'", 'ARRAY_A')) {
    return true;
  } else {
    return false;
  }
}


/**
 * ----------------------------------------------------------
 * Verifica o ID de um post/página através do slug.
 * ----------------------------------------------------------
 */
function yeti_get_id_by_slug($page_slug)
{
  $page = get_page_by_path($page_slug);
  if ($page) {
    return $page->ID;
  } else {
    return null;
  }
}

/**
 * ----------------------------------------------------------
 * Cria uma página quando um recurso do tema é habilitado
 * ----------------------------------------------------------
 */
function yeti_bootstrap_insert_page_to_resource($recurso, $titulo, $conteudo)
{

  if (is_admin() && (get_field("yeti_config_load_{$recurso}", 'option'))) {
    $page_check = get_page_by_title($titulo);

    $page = array(
      'post_type' => 'page',
      'post_title' => $titulo,
      'post_content' => $conteudo,
      'post_status' => 'publish',
      'post_author' => 1,
      'post_slug' => $recurso,
      'page_template' => "template-{$recurso}.php"
    );

    // Cria a página com seu template
    if ((!isset($page_check->ID)) && (!yeti_bootstrap_the_slug_exists($recurso))) {
      $page_id = wp_insert_post($page);
    } else if ((get_post_status($page_check->ID) == 'trash')) {
      // A página está na lixeira, então recupera
      wp_untrash_post($page_check->ID);
    }
  }
}

/**
 * ----------------------------------------------------------
 * Apaga uma página quando um recurso do tema é desabilitado
 * ----------------------------------------------------------
 */
function yeti_bootstrap_remove_page_to_resource($recurso, $titulo)
{
  $page_check = get_page_by_title($titulo);
  wp_trash_post($page_check->ID);
}


/**
 * ----------------------------------------------------------
 * Verifica um intervalo de datas
 * ----------------------------------------------------------
 */
function intervaloEntreDatas($inicio, $fim, $agora)
{
  $inicioTimestamp = strtotime($inicio);
  $fimTimestamp = strtotime($fim);
  $agoraTimestamp = strtotime($agora);
  return (($agoraTimestamp >= $inicioTimestamp) && ($agoraTimestamp <= $fimTimestamp));
}
/* Exemplo de uso  */
/*
// Parametros
$inicio = '14-11-2020-11-14 18:00:00';
$fim = '14-11-2020 20:30:00';
$agora = date_i18n("d-m-Y H:i:s"); // Recebe a data e horário de acordo com a configuração de Zona do WordPress

if (intervaloEntreDatas($inicio, $fim, $agora)) {
  echo 'Dentro do intervalo.';
} else {
  echo 'Fora do intervalo.';
}
*/


/**
 * ----------------------------------------------------------
 * Inclui o um bubble alert nos ítens do menu administrativo
 * ----------------------------------------------------------
 */
function yb_bubble_alert($count = 5, $menu_element = 'users.php')
{
	global $menu;
	$count = 5;
	$menu_item = wp_list_filter(
		$menu,
		array( 2 => $menu_element ) // 2 is the position of an array item which contains URL, it will always be 2!
	);
	if ( ! empty( $menu_item )  ) {
		$menu_item_position = key( $menu_item ); // get the array key (position) of the element
		$menu[ $menu_item_position ][0] .= ' <span class="awaiting-mod">' . $count . '</span>';
	}
}
//add_action( 'admin_menu', 'yb_bubble_alert'); // Descomentar abaixo apenas quando precisar incluir alertas no menu principal