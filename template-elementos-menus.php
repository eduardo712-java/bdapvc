<?php

/**
 * Template Name: Elementos > Menus
 */

get_header(); ?>

<hr>

<!-- Menu-4 -->
<nav class="navbar fixed-topX navbar-expand-lg navbar-light bg-light bg-white flex-column p-0" id="menu-4" role="navigation">
  <div class="bg-primary w-100 p-2">
    <div class="container text-white">
      <div class="row small">
        <div class="col-12 text-end small">
          <span class="me-4 d-none d-md-inline-block"><i class="fa-light fa-location-dot me-1"></i> Rua XYZ nº 000, Sala 111. Belém-PA</span>
          <span class="me-4"><i class="fa-light fa-phone me-1"></i> (91) 9999-9999</span>
          <span><i class="fa-brands fa-whatsapp me-1"></i> <a href="https://wa.me/559133333333?text=Ol%C3%A1!%20Tenho%20interesse%20nos%20servi%C3%A7os." class="link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover text-white" target="_blank" rel="noreferrer" aria-label="WhatsApp">Atendimento WhatsApp</a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-3">
    <?php if (has_custom_logo()) : ?>
      <div class="navbar-brand"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu-4" aria-controls="navbar-menu-4" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'depth' => 2, // 1 = sem dropdowns, 2 = com dropdowns.
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbar-menu-4',
      'menu_class' => 'nav navbar-nav ms-auto text-center',
      'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
      'walker' => new WP_Bootstrap_Navwalker(),
    ));
    ?>
  </div>
</nav>

<hr>

<!-- Menu-3 -->
<nav class="navbar fixed-topX navbar-expand-lg navbar-light bg-light bg-white" id="menu-3" role="navigation">
  <div class="container">
    <?php if (has_custom_logo()) : ?>
      <div class="navbar-brand"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
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
        <div class="item text-lg-end text-center mb-lg-2 mb-0">
          <a href="#" class="me-lg-4 d-block d-lg-inline mt-2 mt-lg-0">ENTRAR</a>
          <a href="#" class="d-block d-lg-inline mt-2 mt-lg-0">CADASTRAR </a>
        </div>

        <div class="item d-flex flex-lg-row flex-column align-items-center">
          <div class="text-lg-end text-center text-center me-0 me-lg-4 mt-3 mt-lg-0">
            <span class="small"><i class="fas fa-phone"></i> +55 (11) 3232-3232</span>
          </div>
          <div class="social text-center text-lg-end mt-3 mt-lg-0">
            <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter-square"></i></a>
            <a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</nav>

<hr>

<!-- Menu-2 -->
<nav class="navbar fixed-topX navbar-expand-lg navbar-light bg-light bg-white" id="menu-2" role="navigation">
  <div class="container">
    <?php if (has_custom_logo()) : ?>
      <div class="navbar-brand"><?php the_custom_logo(); ?></div>
    <?php endif; ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu-2" aria-controls="navbar-menu-2" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-column align-items-end" id="navbar-menu-2">

      <div class="bar-top d-flex flex-column flex-lg-row align-items-center">
        <div class="item text-md-end text-center">
          <span><i class="fas fa-phone"></i> +55 (11) 3232-3232</span> <span><i class="far fa-envelope"></i> user@domain.com</span>
        </div>
        <div class="item">
          <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="item">
          <a href="#" title="Brasil" target="_blank">BRA</a>
        </div>
      </div>


      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'depth' => 2, // 1 = sem dropdowns, 2 = com dropdowns.
        'container' => 'div',
        'container_class' => '',
        'container_id' => 'navbar-in',
        'menu_class' => 'nav navbar-nav ms-auto',
        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
        'walker' => new WP_Bootstrap_Navwalker(),
      ));
      ?>
    </div>
  </div>
</nav>

<hr>


<?php get_footer(); ?>