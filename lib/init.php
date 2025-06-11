<?php

/**
 * ----------------------------------------------------------
 * Configuração inicial do tema e constantes
 * ----------------------------------------------------------
 */
function yeti_bootstrap_setup()
{

  // Adiciona suporte a logo customizada.
  add_theme_support('custom-logo', array(
    'height' => 70,
    'width' => 420,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array('site-title', 'site-description'),
  ));

  // Registra os menus do tema
  register_nav_menus(array(
    'primary' => __('Menu Principal', 'menu_principal'),
    'secundary' => __('Menu Secundário', 'menu_secundario'),
    'footer' => __('Menu Rodapé', 'menu_footer'),
  ));

  // Registra o perfil de cliente Admin
  yeti_bootstrap_register_role();

  // Permite ao tema ser traduzido
  load_theme_textdomain('yeti-bootstrap', get_template_directory() . '/languages');

  // This theme styles the visual editor with editor-style.css to match the theme style
  add_editor_style();

  // Adiciona suporte para Block Styles
  add_theme_support('wp-block-styles');

  // Adiciona suporte para Wide Align 
  //add_theme_support( 'align-wide' );
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Adiciona suporte para conteúdos responsivos incorporados.
  add_theme_support('responsive-embeds');

  // Adiciona suporte formatos de posts
  //add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
  // Adiciona suporte para post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  //add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Suporte para thumbnails apenas para Posts e Movies
  //set_post_thumbnail_size(360, 200, array( 'center', 'center')); // Força o corte a partir do centro da imagem.

  /*
   * Muda o padrão de marcação para formulários de pesquisa, formulários de comentários e comentrários
   * para saída com HTML5.
   */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  // // Atualiza o tamanho das imagens (grande, média e thumbnail) enviadas para galeria de mídias.
  // 0 - Desabilita a criação das imagens nestes formatos diminuindo o uso do disco.
  // Outros valores de acordo com o padrão do tema.
  update_option('large_size_h', 0);
  update_option('large_size_w', 1200);
  update_option('medium_size_h', 0);
  update_option('medium_size_w', 300);

  // Novo tamanho personalizado para imagens
  add_image_size('yeti-thumb', 540, 300, array('center', 'center'));
  //add_filter( 'intermediate_image_sizes', 'yeti_bootstrap_remove_image_sizes' );
  //add_filter( 'intermediate_image_sizes', '__return_empty_array' );
  add_filter('image_size_names_choose', 'yeti_custom_images_sizes');
  add_filter('login_headerurl', 'yeti_bootstrap_logo_url');
  add_action('login_head', 'yeti_bootstrap_logo');
  add_filter('acf/settings/save_json', 'yeti_acf_json_save_point');


  /*
   * Cria a área de gerenciamento do tema.
   */
  // if ((function_exists('acf_add_options_page')) && (current_user_can('manage_options'))) {

  //   acf_add_options_page(array(
  //     'page_title' => 'Configurações Gerais do Tema',
  //     'menu_title' => 'yeti Bootstrap',
  //     'menu_slug' => 'yeti-bootstrap-settings',
  //     'capability' => 'edit_posts',
  //     'update_button' => __('Salvar', 'acf'),
  //     'updated_message' => __('Configurações Salvas', 'acf'),
  //     'position' => '4.31',
  //     'redirect' => false
  //   ));
  // }
}

add_action('after_setup_theme', 'yeti_bootstrap_setup');

/**
 * ----------------------------------------------------------
 * Configura o diretório de onde serão carregados os grupos de campos do ACF PRO
 * ----------------------------------------------------------
 */
function yeti_acf_json_save_point($path)
{
  // update path
  $path = get_stylesheet_directory() . '/lib/acf-json';
  // return
  return $path;
}

/**
 * ----------------------------------------------------------
 * Disponibiliza na área administrativa o novo tamanho de imagens
 * ----------------------------------------------------------
 */
function yeti_custom_images_sizes($sizes)
{
  return array_merge($sizes, array(
    'yeti-thumb' => __('yeti Thumb'),
  ));
}

/**
 * ----------------------------------------------------------
 * Altera a logo da página de login 
 * ----------------------------------------------------------
 */
function yeti_bootstrap_logo()
{
  echo '<style type="text/css">h1 a {background-image: url(' . get_template_directory_uri() . '/assets/img/logo_login.png) !important; -webkit-background-size: auto !important; background-size: auto !important; width: 320px !important;}</style>';
}

/**
 * ----------------------------------------------------------
 * Altera o link da logo na página de login
 * ----------------------------------------------------------
 */
function yeti_bootstrap_logo_url($url)
{
  return get_home_url();
}

/**
 * ----------------------------------------------------------
 * Remove os tamanhos padrões (thumbnail, medium, large) evitando que sejam criados
 * ----------------------------------------------------------
 */
function yeti_bootstrap_remove_image_sizes($sizes)
{
  return array('yeti-thumb');
}


/**
 * ----------------------------------------------------------
 * Registra as áreas de widget no tema
 * ----------------------------------------------------------
 */
function y_widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle)
{

  register_sidebar(array(
    'name' => $name,
    'id' => $id,
    'description' => $description,
    'before_widget' => $beforeWidget,
    'after_widget' => $afterWidget,
    'before_title' => $beforeTitle,
    'after_title' => $afterTitle,
  ));
}

function y_multiple_widget_init()
{
  y_widget_registration('Sidebar 1', 'y-sidebar-1', 'Para uso na sidebar do blog', '<div>', '</div>', '<h2 class="rounded">', '</h2>');
  y_widget_registration('Widget Geral 1', 'y-widget-geral-1', 'Para uso diverso.', '<div>', '</div>', '<h2 class="rounded">', '</h2>');
}
add_action('widgets_init', 'y_multiple_widget_init');



/**
 * ----------------------------------------------------------
 * Registra o perfil do cliente 'Admin' com as capacidades
 * iniciais
 * ----------------------------------------------------------
 */
function yeti_bootstrap_register_role()
{
  add_role('admin', _('Admin'), array(
    'read' => true,
    'edit_dashboard' => true,
    'publish_posts' => true,
    'edit_posts' => false,
    'delete_posts' => true,
    'edit_published_posts' => true,
    'delete_published_posts' => true,
    'edit_others_posts' => false,
    'delete_others_posts' => true,
    'read_private_posts' => true,
    'edit_private_posts' => true,
    'delete_private_posts' => true,
    'manage_categories' => false,
    'edit_pages' => false,
    'edit_published_pages' => true,
    'edit_others_pages' => true,
    'read_private_pages' => true,
    'edit_private_pages' => true,
  ));
}



/**
 * ----------------------------------------------------------
 * Permite inserir mais de um e-mail separados por vírgula em
 * "Configurações > Geral: Endereço de e-mail de administração"
 * ----------------------------------------------------------
 */
add_filter('pre_update_option_admin_email', 'y_sanitize_multiple_emails', 10, 2);

function y_sanitize_multiple_emails($value, $oldValue)
{
  //if anything is fishy, just trust wp to keep on as it would.
  if (!isset($_POST["admin_email"]))
    return $value;

  $result = "";
  $emails = explode(",", $_POST["admin_email"]);
  foreach ($emails as $email) {
    $email = trim($email);
    $email = sanitize_email($email);

    //again, something wrong? let wp keep at it.
    if (!is_email($email))
      return $value;
    $result .= $email . ",";
  }

  if (strlen($result == ""))
    return $value;
  $result = substr($result, 0, -1);

  return $result;
}


/**
 * ----------------------------------------------------------
 * Gerencia os os recursos do tema.
 * ----------------------------------------------------------
 */
/*
  add_action('acf/input/admin_head', 'my_acf_admin_head');
  function my_acf_admin_head() {
  ?>
  <script type="text/javascript">
  (function($) {

  acf.add_action('ready', function(){

  $('body').on('click', '.acf-switch-input', function( e ){
  if(!$(this).attr("checked")) {
  if( $(this).attr("id") == "acf-field_5c1b041c16b9f") {
  alert('Atenção! Quando remover este recurso do seu site, você irá perder a área de Atrações do menu.');
  }
  }

  //$(this).attr("checked") ? alert("Checked" + $(this).attr("id")) : alert("Unchecked "+$(this).attr("id"));
  //return confirm("QUer mudar mesmo?");
  });

  });

  })(jQuery);
  </script>
  <?php
  }
 */


/*
 * ----
 *  Atrações
 * ----
 */
add_action('acf/save_post', 'yeti_check_recursos', 20);

function yeti_check_recursos($post_id)
{

  // Verifica se os dados são postados da área de administração do WP
  if(!is_admin()) {
    return;
  }
  
  $screen = get_current_screen();

  // Sai caso não seja a página de opções do tema
  if (strpos($screen->id, "yeti-bootstrap-settings") == false) {
    return;
  } else {
    // array dos valores dos campos 
    $fields = $_POST['acf'];
    //print_r($fields);

    foreach ($fields as $field => $value) {
      switch ($field) {
          // Atrações
        case 'field_5c1b041c16b9f':
          if (!$value) {
            // Desabilitando recurso... Remove a página;
            yeti_bootstrap_remove_page_to_resource('atracoes', 'Atrações');
          } else {
            // Habilitabdo o recurso... Insere a página;
            yeti_bootstrap_insert_page_to_resource('atracoes', 'Atrações', 'Esta página gera automaticamente seu conteúdo. Nada que seja inserido aqui irá aparecer no website.');
          }
          break;

          // Cursos
        case 'field_5c1b040016b9e':
          if (!$value) {
            // Desabilitando recurso... Remove a página;
            yeti_bootstrap_remove_page_to_resource('cursos', 'Cursos');
          } else {
            // Habilitabdo o recurso... Insere a página;
            yeti_bootstrap_insert_page_to_resource('cursos', 'Cursos', 'Esta página gera automaticamente seu conteúdo. Nada que seja inserido aqui irá aparecer no website.');
          }
          break;

          // Inscrições
        case 'field_5c1b042616ba0':
          if (!$value) {
            // Desabilitando recurso... Remove a página;
            //yeti_bootstrap_remove_page_to_resource('inscricoes', 'Incrições');
          } else {
            // Habilitabdo o recurso... Insere a página;
            //yeti_bootstrap_insert_page_to_resource('inscricoes', 'Inscrições', 'Esta página gera automaticamente seu conteúdo. Nada que seja inserido aqui irá aparecer no website.');
          }
          break;

          // Notícias
        case 'field_5c1b03a4a3c47':
          if (!$value) {
            // Desabilitando recurso... Remove a página;
            yeti_bootstrap_remove_page_to_resource('noticias', 'Notícias');
          } else {
            // Habilitabdo o recurso... Insere a página;
            yeti_bootstrap_insert_page_to_resource('noticias', 'Notícias', 'Esta página gera automaticamente seu conteúdo. Nada que seja inserido aqui irá aparecer no website.');
          }
          break;
      }
    }
  }
}

if ((function_exists('acf_add_local_field_group')) && (get_option('options_yeti_config_load_atracoes'))) {
  add_action('init', 'yeti_load_atracoes');
}

function yeti_load_atracoes()
{
  /**
   * Cria o CPT
   */
  $labels = array(
    "name" => __("Atrações", "custom-post-type-ui"),
    "singular_name" => __("Atração", "custom-post-type-ui"),
    "menu_name" => __("Atrações", "custom-post-type-ui"),
    "all_items" => __("Todas as Atrações", "custom-post-type-ui"),
    "add_new" => __("Adicionar Nova", "custom-post-type-ui"),
    "add_new_item" => __("Adicionar Nova Atração", "custom-post-type-ui"),
    "edit_item" => __("Editar Atração", "custom-post-type-ui"),
    "new_item" => __("Nova Atração", "custom-post-type-ui"),
    "view_item" => __("Nova Atração", "custom-post-type-ui"),
    "search_items" => __("Procurar um Atração", "custom-post-type-ui"),
    "not_found" => __("Nenhuma Atração Encontrada", "custom-post-type-ui"),
    "not_found_in_trash" => __("Nenhuma Atração Encontrada na Lixeira", "custom-post-type-ui"),
    "parent_item_colon" => __("Atração Pai", "custom-post-type-ui"),
    "featured_image" => __("Imagem destacada", "custom-post-type-ui"),
    "set_featured_image" => __("Configurar imagem destacada", "custom-post-type-ui"),
    "remove_featured_image" => __("Remover imagem destacada", "custom-post-type-ui"),
    "use_featured_image" => __("Usar como imagem destacada", "custom-post-type-ui"),
    "archives" => __("Arquivo de Atrações", "custom-post-type-ui"),
    "insert_into_item" => __("Inserir Atração", "custom-post-type-ui"),
    "uploaded_to_this_item" => __("Enviado para esta atração", "custom-post-type-ui"),
    "filter_items_list" => __("Filtro da lista de atrações", "custom-post-type-ui"),
    "items_list_navigation" => __("Navegação da lista de atrações", "custom-post-type-ui"),
    "items_list" => __("Lista de Atrações", "custom-post-type-ui"),
    "parent_item_colon" => __("Atração Pai", "custom-post-type-ui"),
  );

  $args = array(
    "label" => __("Atrações", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "Tipo de post para cadastro de atrações que podem ser usadas em eventos, shows, festivais, etc.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => false,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "atracao",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array("slug" => "atracao", "with_front" => true),
    "query_var" => true,
    "menu_icon" => "dashicons-star-filled",
    "supports" => array("title", "editor", "thumbnail"),
  );
  register_post_type("atracao", $args);


  /**
   * Grupo de Campos ACF
   */
  /*
    acf_add_local_field_group(array(
    'key' => 'group_57e4a7073b7b0',
    'title' => 'Detalhes da atração',
    'fields' => array(
    array(
    'key' => 'field_57e4a7074506d',
    'label' => 'Vídeo de apoio',
    'name' => 'atracao_video',
    'type' => 'oembed',
    'instructions' => 'Informe a URL de algum vídeo hospedado em uma rede social como YouTube, Vimeo, etc.',
    'required' => 0,
    'conditional_logic' => 0,
    'wrapper' => array(
    'width' => '',
    'class' => '',
    'id' => '',
    ),
    'width' => '',
    'height' => '',
    ),
    ),
    'location' => array(
    array(
    array(
    'param' => 'post_type',
    'operator' => '==',
    'value' => 'atracao',
    ),
    ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => 'Atrações (cpt): palestrante, currículo, vídeo, etc',
    ));
   */
}

/*
 * ----
 *  Cursos
 * ----
 */
if ((function_exists('acf_add_local_field_group')) && (get_option('options_yeti_config_load_cursos'))) {
  add_action('init', 'yeti_load_cursos');
}

function yeti_load_cursos()
{
  /**
   * Cria o CPT
   */
  $labels = array(
    "name" => __("Cursos", "custom-post-type-ui"),
    "singular_name" => __("Curso", "custom-post-type-ui"),
    "menu_name" => __("Cursos", "custom-post-type-ui"),
    "all_items" => __("Todos os Cursos", "custom-post-type-ui"),
    "add_new" => __("Adicionar Novo", "custom-post-type-ui"),
    "add_new_item" => __("Adicionar Novo Curso", "custom-post-type-ui"),
    "edit_item" => __("Editar Curso", "custom-post-type-ui"),
    "new_item" => __("Novo Curso", "custom-post-type-ui"),
    "view_item" => __("Ver Curso", "custom-post-type-ui"),
    "search_items" => __("Procurar Curso", "custom-post-type-ui"),
    "not_found" => __("Nenhum Curso Encontrado", "custom-post-type-ui"),
    "not_found_in_trash" => __("Nenhuma Curso Encontrado na Lixeira", "custom-post-type-ui"),
    "parent_item_colon" => __("Parente", "custom-post-type-ui"),
    "archives" => __("Arquivo de Cursos", "custom-post-type-ui"),
    "insert_into_item" => __("Inserir Curso", "custom-post-type-ui"),
    "uploaded_to_this_item" => __("Enviado para este curso", "custom-post-type-ui"),
    "filter_items_list" => __("Filtro da lista de cursos", "custom-post-type-ui"),
    "items_list_navigation" => __("Navegação da lista de cursos", "custom-post-type-ui"),
    "items_list" => __("Lista de Cursos", "custom-post-type-ui"),
    "parent_item_colon" => __("Parente", "custom-post-type-ui"),
  );

  $args = array(
    "label" => __("Cursos", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "Tipo de post para cadastro de cursos, oficinas, palestras ou workshops.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => false,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "curso",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array("slug" => "curso", "with_front" => true),
    "query_var" => true,
    "menu_icon" => "dashicons-welcome-learn-more",
    "supports" => array("title", "editor"),
    "taxonomies" => array("opacurso"),
  );
  register_post_type("curso", $args);

  /**
   * Cria a página
   */
  yeti_bootstrap_insert_page_to_resource('cursos', 'Cursos', 'Esta página gera automaticamente seu conteúdo. Nada que seja inserido aqui irá aparecer no website.');


  /**
   * Grupo de Campos ACF
   */
}

/*
 * ----
 *  Inscrições
 * ----
 */
if ((function_exists('acf_add_local_field_group')) && (get_option('options_yeti_config_load_inscricoes'))) {
  add_action('init', 'yeti_load_inscricoes');
}

function yeti_load_inscricoes()
{
  /**
   * Cria o CPT
   */
  $labels = array(
    "name" => __("Inscrições", "custom-post-type-ui"),
    "singular_name" => __("Inscrição", "custom-post-type-ui"),
    "menu_name" => __("Inscrições", "custom-post-type-ui"),
    "all_items" => __("Todas Inscrições", "custom-post-type-ui"),
    "add_new" => __("Adicionar Inscrição", "custom-post-type-ui"),
    "add_new_item" => __("Adicionar Nova Inscrição", "custom-post-type-ui"),
    "edit_item" => __("Editar Inscrição", "custom-post-type-ui"),
    "new_item" => __("Nova Inscrição", "custom-post-type-ui"),
    "view_item" => __("Ver Inscrição", "custom-post-type-ui"),
    "search_items" => __("Localizar Inscrição", "custom-post-type-ui"),
    "not_found" => __("Nenhuma Inscrição Encontrada", "custom-post-type-ui"),
    "not_found_in_trash" => __("Nenhuma Inscrição Encontrada na Lixeira", "custom-post-type-ui"),
    "parent_item_colon" => __("Pai", "custom-post-type-ui"),
    "uploaded_to_this_item" => __("Enviado para esta inscrição", "custom-post-type-ui"),
    "filter_items_list" => __("Filtro da lista de inscrições", "custom-post-type-ui"),
    "items_list_navigation" => __("Navegação da lista de inscrições", "custom-post-type-ui"),
    "items_list" => __("Lista de Inscrições", "custom-post-type-ui"),
    "parent_item_colon" => __("Pai", "custom-post-type-ui"),
  );

  $args = array(
    "label" => __("Inscrições", "custom-post-type-ui"),
    "labels" => $labels,
    "description" => "Registro de pessoas que se inscreveram para participar de algum dos cursos.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => false,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array("slug" => "curso_inscricao", "with_front" => true),
    "query_var" => true,
    "menu_icon" => "dashicons-welcome-write-blog",
    "supports" => false,
  );
  register_post_type("inscricao", $args);


  /**
   * Grupo de Campos ACF
   */
}
