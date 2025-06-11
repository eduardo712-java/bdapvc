<?php

/**
 * Template Name: Template Blog
 */
get_header();
?>

<div class="container-full">
  <main class="main blog" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <!-- header-1 -->
      <section class="header-9">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h1 class=""><?php the_title(); ?></h1>
              <?php
              // Verifica se existe um subtítulo para a página
              $subtitulo = get_field("pagina_subtitulo");
              if ($subtitulo) {
              ?>
                <h2 class=""><?php echo $subtitulo; ?></h2>
              <?php } ?>
              <?php get_search_form(); ?>
            </div>
            <div class="col-4 d-none d-md-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-header-img.svg" class="position-absolute blog-header-img">
            </div>
          </div>
          <div class="row">
            <div class="col-12">

            </div>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- Content -->
      <section>
        <article>
          <div class="container">

            <?php
            // Mostra as postagens destacadas apenas na página inicial do blog
            if ($paged === 0) {
            ?>

              <!-- Novos Posts -->
              <h2>Posts recentes</h2>
              <div class="row posts-recentes mb-5">

                <?php
                $i = 0;

                $posts = yb_get_posts_cpt(
                  'post', // cpt
                  3, // limite
                  '', // categoria
                  '', // id da categoria
                  '', // ordem
                  'DESC', // ordem por - DESc ou ASC
                  '', // meta
                  '', // meta_value
                  '', // autor
                  '', // include - array de ID's
                  '', // exclude - array de ID's
                  $paged, // paged
                  '', // offset
                  1, //  ignore_sticky - 0 ou 1
                  /*
                  array(
                    'taxonomy' => '', // nome da taxonomia personalizada
                    'field'    => '', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => '', // informe o termo ou ID
                  )
                  */
                );

                foreach ($posts as $post) :
                  $data = get_the_date('d/m/Y', $post->ID);
                  if (has_excerpt()) {
                    $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
                  } else {
                    $resumo = wp_trim_words($post->post_content, 20, '...');
                  }
                  $url = get_permalink($post->ID);

                  // Organiza as 3 primeiras postagens
                  switch ($i) {
                    case 0:
                      $post_order = "order-1";
                      break;
                    case 1:
                      $post_order = "order-2";
                      break;
                    case 2:
                      $post_order = "order-3";
                      break;
                  }
                ?>
                  <div class="col post">
                    <div class="card card-over bg-light shadow-sm mb-4" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-once="true" data-aos-delay="<?php echo $i * 100; ?>">
                      <span class="card-category"><i class="fas fa-chevron-right"></i> <?php yb_get_post_category_linked($post->ID); ?></span>
                      <a href="<?php echo $url; ?>" class="text-decoration-none">
                        <div class="card-img">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('yeti-thumb', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                          }
                          ?>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $post->post_title; ?></h5>
                          <p class="card-text"><?php echo $resumo; ?></p>
                          <small class="card-date"><i class="far fa-calendar-alt" aria-hidden="true"></i> <?php echo $data; ?></small>
                          <small class="card-read-time" title="Tempo de leitura: <?php echo yb_reading_time(); ?>"><i class="far fa-clock"></i> <?php echo yb_reading_time(); ?></small>
                        </div>
                      </a>
                    </div>
                  </div>
                <?php
                  $i++;
                endforeach;
                // Reset Query
                wp_reset_query();
                ?>
                <div class="w-100"></div>
              </div>
              <!-- /. Novos Posts -->
            <?php } ?>


            <!-- Novos Posts -->
            <h2>Todos os posts</h2>
            <div class="row row-cols-1 row-cols-md-3 gy-5 gx-4 mb-5">
              <?php
              $i = 0;

              // Recupera as notícias com os argumentos básicos
              if (get_query_var('paged')) {
                $paged = get_query_var('paged');
              } elseif (get_query_var('page')) {
                $paged = get_query_var('page');
              } else {
                $paged = 1;
              }

              $posts = yb_get_posts_cpt(
                'post', // cpt
                12, // limite
                '', // categoria
                '', // id da categoria
                '', // ordem
                'DESC', // ordem por - DESc ou ASC
                '', // meta
                '', // meta_value
                '', // autor
                '', // include - array de ID's
                '', // exclude - array de ID's
                $paged, // paged
                '', // offset
                1, //  ignore_sticky - 0 ou 1
                /*
                array(
                  'taxonomy' => '', // nome da taxonomia personalizada
                  'field'    => '', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                  'terms'    => '', // informe o termo ou ID
                )
                */
              );

              foreach ($posts as $post) :

                $data = get_the_date('d/m/Y', $post->ID);
                if (has_excerpt()) {
                  $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
                } else {
                  $resumo = wp_trim_words($post->post_content, 20, '...');
                }
                $url = get_permalink($post->ID);

              ?>

                <?php
                // Esconde os 3 posts recentes na página inicial do blog
                if (($i > 2) || ($paged > 1)) {
                ?>

                  <div class="col-xl-4 col-md-6">

                    <div class="card card-over overflow-hidden bg-white h-100 rounded-3 y-shadow">
                      <div class="position-relative overflow-hidden">
                        <a href="#" class="">
                          <?php
                          if (has_post_thumbnail()) {
                            the_post_thumbnail('yeti-thumb', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                          }
                          ?>
                        </a>
                      </div>
                      <div class="card-body p-4b">
                        <a href="#" class="h5 stretched-link lh-150 text-decoration-none"><?php echo $post->post_title; ?></a>
                        <p class="mt-3 mb-0 lh-170"><?php echo $resumo; ?></p>
                      </div>
                      <div class="card-footer y-delimiter-top bg-white border-0 p-4b py-3">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 avatar-group avatar-group-xs">
                            <span class="avatar avatar-sm bg-primary rounded-circle">MD</span>
                            <span class="text-sm mb-0 ms-2"><?php echo get_the_author_meta('nicename', $post->post_author); ?></span>
                          </div>
                          <div class="flex-grow-1">
                            <div class="d-flex justify-content-end text-secondary">
                              <small class="inline-block text-sm me-3 text-uppercase">
                                <i class="fa-light fa-calendar" aria-hidden="true"></i> <?php echo $data; ?>
                              </small>
                              <small class="inline-block text-sm" title="Tempo de leitura: <?php echo yb_reading_time(); ?>">
                                <i class="fa-light fa-clock "></i> <?php echo yb_reading_time(); ?>
                              </small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                <?php } ?>

              <?php
                $i++;
              endforeach;
              ?>
            </div>
            <!-- /. Todos os Posts -->

            <?php
            yeti_bootstrap_pagination();
            // Reset Query
            wp_reset_query();
            ?>
          </div>
          <!-- /.container -->
        </article>
        <!-- /.article -->
      </section>
      <!-- /.section -->
    <?php endwhile; ?>

  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>