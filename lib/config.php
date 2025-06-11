<?php

/**
 * ----------------------------------------------------------
 * CONFIGURANDO OS RECURSOS DO TEMA
 * ----------------------------------------------------------
 */
/**
 * ----------------------------------------------------------
 * Configurando variáveis
 * ----------------------------------------------------------
 */
// Versão do framework
define('YETI_VERSION', '3.1.0');

// Alterna entre os arquivos JS e CSS compilados de desenvolvimento. FALSE: carrega os originais. TRUE: carrega os compilados. 
define('YETI_DIST', false);

// UA-XXXXX-Y (Note: Universal Analytics only, not Classic Analytics)
//define('YETI_GOOGLE_ANALYTICS_ID', 'UA-xxxxxxxx-y');

/**
 * ----------------------------------------------------------
 * Habilita smoothScroll para sites de página única
 * ----------------------------------------------------------
 */
function smoothScroll_custom_nav_attributes($atts, $item, $args)
{
  // Se o item possui filhos (submenus), desabilita o data-scroll="true" do link
  // evitando que a
  if (in_array('menu-item-has-children', $item->classes)) {
    return $atts;
  } else {
    $atts['data-scroll'] = 'true';
    return $atts;
  }
}

//add_filter( 'nav_menu_link_attributes', 'smoothScroll_custom_nav_attributes', 10, 3 );

/**
 * ----------------------------------------------------------
 * Remove os avisos de atualizações para não administradores
 * ----------------------------------------------------------
 */
function remove_core_updates()
{
  if (current_user_can('update_core')) {
    return;
  }
  //add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
  add_action('init', function ($a) {
    remove_action('init', 'wp_version_check');
  }, 2);

  add_filter('pre_option_update_core', '__return_null');
  add_filter('pre_site_transient_update_core', '__return_null');
}

/**
 * ----------------------------------------------------------
 * Inclui o campo de pesquisa no menu
 * ----------------------------------------------------------
 */
//add_filter('wp_nav_menu_items', 'add_search_box', 10, 2);

function add_search_box($items, $args)
{
  $form = '<!-- Start SearchForm -->';
  $form .= '<form method="get" class="search-form" role="search" action="' . esc_url(home_url('/')) . '">';
  $form .= '<input type="text" value="' . get_search_query() . '" name="s" placeholder="Buscar..." autocomplete="off" required value="' . the_search_query() . ' class="form-control">';
  $form .= '<span class="fa fa-search"></span>';
  $form .= '<button class="btn d-none" type="submit">Procurar</button>';
  $form .= '</form>';
  $form .= '<!-- End SearchForm -->';

  //$items .= '<li class="searchbox-position">' . get_search_form(false) . '</li>';
  $items = '<li class="searchbox-position">' . $form . '</li>' . $items;
  return $items;
}

//-----------------------------------------------------
// Inclui informações 
//-----------------------------------------------------
//add_action('wp_head', 'add_open_graph');
function add_open_graph(){
  // Recupera os detalhes da página corrente para montar o cabeçalho corretamente
  $page_info = yb_get_page_info();
?>
  <!-- Facebook -->
  <meta property="og:url" content="<?php echo $page_info->url; ?>">
  <meta property="og:title" content="<?php echo $page_info->title; ?>">
  <meta property="og:description" content="<?php echo $page_info->description; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo $page_info->img; ?>">
  <meta property="og:image:alt" content="<?php echo $page_info->title; ?>">
  <meta property="og:image:secure_url" content="<?php echo $page_info->img; ?>">
  <meta property="og:image:width" content="540">
  <meta property="og:image:height" content="300">

  <!-- Twitter Cards -->
  <meta name="twitter:url" content="<?php echo $page_info->url; ?>">
  <meta name="twitter:title" content="<?php echo $page_info->title; ?>">
  <meta name="twitter:description" content="<?php echo $page_info->description; ?>">
  <meta name="twitter:image" content="<?php echo $page_info->img; ?>">
  <meta name="twitter:card" content="summary">

<?php
};



//-----------------------------------------------------
// Extende a busca padrão do WordPress para incluir
// campos personalizados (inclusive os criados no ACF)
// https://adambalee.com
//-----------------------------------------------------

/**
 * Uni as tabelas de posts e postmeta
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function yb_cf_search_join( $join ) {
  global $wpdb;
  if ( is_search() ) {    
      $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
  }
  return $join;
}
//add_filter('posts_join', 'yb_cf_search_join' );

/**
* Modificca a search query com posts_where
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
*/
function yb_cf_search_where( $where ) {
  global $pagenow, $wpdb;

  if ( is_search() ) {
      $where = preg_replace(
          "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
          "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
  }
  return $where;
}
//add_filter( 'posts_where', 'yb_cf_search_where' );

/**
* Previni duplicatas
* http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
*/
function yb_cf_search_distinct( $where ) {
  global $wpdb;
  if ( is_search() ) {
      return "DISTINCT";
  }
  return $where;
}
//add_filter( 'posts_distinct', 'yb_cf_search_distinct' );



/**
 * ----------------------------------------------------------
 * Filtra a pesquisa no Front End trazendo apenas posts
 * ----------------------------------------------------------
 */
// if ( ! is_admin() ) {
//   function search_filter($query) {
//     if ($query->is_search) {
//       $query->set('post_type', 'post');
//     }
//     return $query;
//   }
//   add_filter('pre_get_posts', 'search_filter');
// }


/**
 * ----------------------------------------------------------
 * Remove todos os Dashboard Widgets padrões do WP e cria um personalziado
 * ----------------------------------------------------------
 */
function yeti_remove_dashboard_widgets()
{
  remove_action('welcome_panel', 'wp_welcome_panel'); // Welcome Panel
  remove_action('try_gutenberg_panel', 'wp_try_gutenberg_panel'); // Try Gutenberg
  remove_meta_box('dashboard_primary', 'dashboard', 'side'); // WordPress.com Blog
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // Plugins
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); // Right Now
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); // Quick Press widget
  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); // Recent Drafts
  remove_meta_box('dashboard_secondary', 'dashboard', 'side'); // Other WordPress News
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Incoming Links
  remove_meta_box('rg_forms_dashboard', 'dashboard', 'normal'); // Gravity Forms
  remove_meta_box('cn_dashboard_stats', 'dashboard', 'normal'); // Gravity Forms
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
  remove_meta_box('icl_dashboard_widget', 'dashboard', 'normal'); // Multi Language Plugin
  remove_meta_box('dashboard_activity', 'dashboard', 'normal'); // Activity

  global $wp_meta_boxes;
  //wp_add_dashboard_widget('custom_help_widget', 'Olá! bem-vindo(a) ao seu dashboard!', 'yeti_custom_dashboard');
}
add_action('wp_dashboard_setup', 'yeti_remove_dashboard_widgets');

function yeti_custom_dashboard()
{
  echo '<p>Este é o dashboard de </p>';
  echo '<p><a href="#" class="button-primary w-100">Link 1</a></p>';
}


//-----------------------------------------------------
// Remove do menu os ítens que apenas os Administradores deve ver
//-----------------------------------------------------
if (!current_user_can('manage_options')) {
  add_action('admin_menu', 'yeti_remove_menu_pages');
  function yeti_remove_menu_pages()
  {
    remove_menu_page('edit-comments.php'); // Comentários
    remove_menu_page('wpcf7'); // Contact 7 Fotm
    remove_menu_page('tools.php'); // Ferramentas
  }
}


//-----------------------------------------------------
// Remove a logo do Wordpress da barre de admin
//-----------------------------------------------------
function yeti_admin_bar_remove_logo()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'yeti_admin_bar_remove_logo', 0);


//-----------------------------------------------------
// Desabilita os estilos dos blocos (front-end) para 
// melhorar desempenho de SEO
//-----------------------------------------------------
function yeti_disable_block_styles() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-blocks-style' );
}
//add_action( 'wp_enqueue_scripts', 'yeti_disable_block_styles' );
