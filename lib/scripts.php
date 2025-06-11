<?php

/**
 * ----------------------------------------------------------
 * Carrega os arquivos de scripts e folhas de estilo
 * ----------------------------------------------------------
 */

function yeti_bootstrap_scripts()
{

  // Carrega os arquivos compilados
  if (YETI_DIST == true) {
    wp_register_style('y-styles', get_template_directory_uri() . "/assets/dist/css/y-all.min.css", array(), YETI_VERSION);
    wp_enqueue_style('y-styles');

    wp_deregister_script('jquery');
    wp_register_script('y-scripts', get_template_directory_uri() . "/assets/dist/js/y-all.min.js", array(), YETI_VERSION, true);
    wp_enqueue_script('y-scripts', false, array(), false, false);

    // Carrega os arquivos originais
  } else {
    // CSS - Registros
    wp_register_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '5.1.1', 'all');
    wp_register_style('y-animate', get_template_directory_uri() . "/assets/plugins/animate/animate.min.css", array(), '3.7.2', 'all');
    wp_register_style('y-aos', get_template_directory_uri() . "/assets/plugins/aos/aos.css", array(), '3.0.0-beta.6', 'all');
    wp_register_style('font-awesome', get_template_directory_uri() . "/assets/plugins/font-awesome/css/all.min.css", array(), '6.1.1', 'all');
    wp_register_style('y-owlcarousel', get_template_directory_uri() . "/assets/plugins/owl/assets/owl.carousel.min.css", array(), '2.3.4', 'all');
    wp_register_style('y-simplelightbox', get_template_directory_uri() . "/assets/plugins/simplelightbox/simple-lightbox.min.css", array(), '1.15.1', 'all');
    wp_register_style('y-confirm', get_template_directory_uri() . "/assets/plugins/confirm/jquery-confirm.min.css", array(), '3.3.4', 'all');
    wp_register_style('y-blocks', get_template_directory_uri() . "/assets/css/y-blocks.css", array(), YETI_VERSION, 'all');
    wp_register_style('y-responsive', get_template_directory_uri() . "/assets/css/y-responsive.css", array(), YETI_VERSION, 'all');
    wp_register_style('y-custom', get_template_directory_uri() . "/assets/css/y-custom.css?v6", array(), YETI_VERSION, 'all');

    // CSS - Enfileiramento
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('y-animate');
    wp_enqueue_style('y-aos');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('y-owlcarousel');
    wp_enqueue_style('y-simplelightbox');
    wp_enqueue_style('y-confirm');
    wp_enqueue_style('y-blocks');
    wp_enqueue_style('y-responsive');
    wp_enqueue_style('y-custom');

    // JS - Registro
    //wp_deregister_script('jquery');
    //wp_register_script('font-awesome', 'https://kit.fontawesome.com/339627bb90.js', array(), '5.13.0', false);
    // wp_register_script('bootbox', get_template_directory_uri() . "/assets/plugins/bootbox.min.js", array(), false, true);
    // wp_register_script('skrollr', get_template_directory_uri() . "/assets/plugins/skrollr/skrollr.min.js", array(), false, true);    
    //wp_register_script('jquery', get_template_directory_uri() . "/assets/js/jquery.min.js", array(), '3.5.2', false);
    wp_register_script('bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array('jquery'), '5.1.1', true);
    wp_register_script('y-aos', get_template_directory_uri() . "/assets/plugins/aos/aos.js", array('jquery'), '3.0.0-beta.6', true);
    wp_register_script('y-jarallax', get_template_directory_uri() . "/assets/plugins/jarallax/jarallax.min.js", array('jquery'), '1.12.0', true);
    wp_register_script('y-owlcarousel', get_template_directory_uri() . "/assets/plugins/owl/owl.carousel.min.js", array('jquery'), '1.3.0', true);
    wp_register_script('y-simplelightbox', get_template_directory_uri() . "/assets/plugins/simplelightbox/simple-lightbox.min.js", array('jquery'), '1.15.1', true);
    wp_register_script('y-smooth-scroll', get_template_directory_uri() . "/assets/plugins/smoothscroll/smooth-scroll.min.js", array('jquery'), '16.1.1', true);
    wp_register_script('y-masonry', get_template_directory_uri() . "/assets/plugins/masonry/masonry.pkgd.min.js", array('jquery'), '4.2.2', true);
	  wp_register_script('y-mask', get_template_directory_uri() . "/assets/plugins/mask/jquery.mask.min.js", array('jquery'), '1.14.16', true);
    wp_register_script('y-list', get_template_directory_uri() . "/assets/plugins/list/list.min.js", array('jquery'), '2.3.1', true);
    wp_register_script('y-confirm', get_template_directory_uri() . "/assets/plugins/confirm/jquery-confirm.min.js", array('jquery'), '3.3.4', true);
    //wp_register_script('y-bootstrap-confirmation', get_template_directory_uri() . "/assets/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js", array(), '4.0.3', true);
    wp_register_script('y-ajax', get_template_directory_uri() . "/assets/js/y-ajax.js?v6", array('jquery'), YETI_VERSION, true);
    wp_register_script('y-run', get_template_directory_uri() . "/assets/js/y-run.js?v38", array('jquery'), YETI_VERSION, true);

    // JS - Enfilairamento
    //wp_enqueue_script('font-awesome');
    //wp_enqueue_script('bootbox', false, array(), false, true);
    //wp_enqueue_script('skrollr', false, array(), false, true);
    //wp_enqueue_script('jquery', false, array(), false, true);
    wp_enqueue_script('bootstrap', false, array(), false, true);
    wp_enqueue_script('y-aos', false, array(), false, true);
    wp_enqueue_script('y-jarallax', false, array(), false, true);
    wp_enqueue_script('y-owlcarousel', false, array(), false, true);
    wp_enqueue_script('y-simplelightbox', false, array(), false, true);
    wp_enqueue_script('y-smooth-scroll', false, array(), false, true);
    wp_enqueue_script('y-masonry', false, array(), false, true);
  	wp_enqueue_script('y-mask', false, array(), false, true);
  	wp_enqueue_script('y-list', false, array(), false, true);
  	wp_enqueue_script('y-confirm', false, array(), false, true);
    //wp_enqueue_script('y-bootstrap-confirmation', false, array(), false, true);
    wp_enqueue_script('y-ajax', get_template_directory_uri() . "/assets/js/y-ajax.js", array('jquery'), YETI_VERSION, true);
    wp_localize_script('y-ajax', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
    wp_enqueue_script('y-run', get_template_directory_uri() . "/assets/js/y-run.js", array('jquery'), YETI_VERSION, true);
  }
}

add_action('wp_enqueue_scripts', 'yeti_bootstrap_scripts');


/**
 * ----------------------------------------------------------
 * Carrega os atributos de alguns CDN's para scripts e CSS's
 * ----------------------------------------------------------
 */
//add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2);
function custom_script_loader_tag($tag, $handle)
{
  if ($handle == 'jquery') {
    return str_replace('></script>', ' integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>', $tag);
  } elseif ($handle == 'popper') {
    return str_replace('></script>', ' integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>', $tag);
  } elseif ($handle == 'bootstrap') {
    return str_replace('></script>', ' integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>', $tag);
  } elseif ($handle == 'y-font-awesome') {
    return str_replace('></script>', ' crossorigin="anonymous"></script>', $tag);
  } else {
    return $tag;
  }
}

//add_filter('style_loader_tag', 'custom_style_loader_tag', 10, 2);
function custom_style_loader_tag($tag, $handle)
{
  if ($handle == 'bootstrap') {
    return str_replace('type=', 'integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" type=', $tag);
  } else if ($handle == 'y-styles') {
    $tag = str_replace('rel=\'stylesheet\'', 'rel="preload" onload="this.onload=null;this.rel=\'stylesheet\'" as="style"', $tag);
    return str_replace('>', '><noscript><link rel="stylesheet" href="/wp-content/themes/yeti-bootstrap/assets/dist/css/y-all.min.css?ver=2.0.6"></noscript>', $tag);
  } else {
    return $tag;
  }
}



/*
 * ----------------------------------------------------------
 * Adiciona CSS personalizado no Painel do WP
 * ----------------------------------------------------------
 */
function admin_style()
{
  wp_enqueue_style('y-admin', get_template_directory_uri() . '/assets/css/y-admin.css?v2h');
}
add_action('admin_enqueue_scripts', 'admin_style');


/* 
 * ----------------------------------------------------------
 * Anula os stilos do ACF no front-end
 * ----------------------------------------------------------
 */
function my_deregister_styles()
{
  wp_deregister_style('wp-admin');
}

add_action('wp_print_styles', 'my_deregister_styles', 100);


/*
 * ----------------------------------------------------------
 * Adiciona JS personalizado no Painel do WP
 * ----------------------------------------------------------
 */
function admin_script( ) {
  wp_enqueue_script( 'y-mask', get_template_directory_uri() . '/assets/plugins/mask/jquery.mask.min.js', array(), '1.14.16' );
  wp_enqueue_script( 'y-admin', get_template_directory_uri() . '/assets/js/y-admin.js', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'admin_script' );


/*
 * ----------------------------------------------------------
 * Google Analytics
 * ----------------------------------------------------------
 */
function yeti_bootstrap_google_analytics()
{ ?>

  <!-- Google Analytics  -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo YETI_GOOGLE_ANALYTICS_ID; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?php echo YETI_GOOGLE_ANALYTICS_ID; ?>');
  </script>
  <!-- FIM Google Analytics  -->

<?php }
if (defined('YETI_GOOGLE_ANALYTICS_ID')) {
  add_action('wp_head', 'yeti_bootstrap_google_analytics');
}
?>