<!DOCTYPE html>

<html <?php echo language_attributes(); ?>>

<head>
  <meta charset="<?php echo bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo bloginfo('title') ?>">
  <meta name="author" content="yeti lab">

  <title><?php wp_title(''); ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo get_site_icon_url(); ?>" />

  <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

  <!-- Menu-3 -->
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" id="menu-3" role="navigation">
    <div class="container-fluid px-5">
      <div class="navbar-brand">
        <a href="/" class="custom-logo-link" rel="home" aria-current="page">
          <img width="247" height="50" src="/wp-content/themes/yeti-bootstrap/assets/img/bda-logo.svg?v2" class="custom-logo" alt="BDA" decoding="async">
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu-3" aria-controls="navbar-menu-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse flex-columnX align-items-endX" id="navbar-menu-3">

        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'depth' => 2, // 1 = sem dropdowns, 2 = com dropdowns.
          'container' => 'div',
          'container_class' => 'me-auto ms-lg-4',
          'container_id' => 'navbar-in',
          'menu_class' => 'nav navbar-nav me-auto text-lg-start text-center',
          'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
          'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>

        <div class="bar-right d-flex flex-column text-right mb-4 mb-lg-0">
          <div class="item d-flex flex-lg-row flex-column align-items-center border-0 m-0 p-0">
            <div class="text-lg-end text-center text-center me-0 me-lg-4 mt-3 mt-lg-0">
              <span class="small text-white"><a href="/usuario-content/" target="_blank" class="text-decoration-none" id="menu-representantes">Representantes</a></span>
            </div>
            <div class="text-lg-end text-center text-center me-0 me-lg-4 mt-3 mt-lg-0">
              <span class="small text-white"><i class="fa-light fa-phone"></i> +55 (91) 4104-1438</span>
            </div>
            <div class="social text-center text-lg-end mt-3 mt-lg-0">
              <a href="https://www.facebook.com/people/BDA-Pain%C3%A9is-de-PVC/100095354060189/" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f me-2"></i></a>
              <a href="https://www.instagram.com/pvc.bda/" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>