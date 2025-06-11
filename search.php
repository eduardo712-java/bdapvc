<?php
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <!-- header-1 -->
    <section class="header-1">
      <div class="container-fluid">
        <div class="y-block">
          <h2 class="y-header-title"><?php printf('Resultado da busca para:  %s', '<b>' . get_search_query() . '</b>'); ?></h2>
          <?php
          // Verifica se existe um subtítulo para a página
          $subtitulo = get_field("pagina_subtitulo");
          if ($subtitulo) {
          ?>
            <h3 class="y-header-subtitle"><?php echo $subtitulo; ?></h3>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- /.header-1 -->



    <!-- Content -->
    <section class="pt-5">
      <article>
        <div class="container">

          <?php get_search_form(); ?>

          <?php if (have_posts()) :
            $i = 0;
          ?>
            <div class="row row-cols-1 row-cols-md-3 gy-5 gx-4 mb-5">
              <?php
              // Start the loop.
              while (have_posts()) : the_post();
              ?>


                <?php
                $i = 0;
                $data = get_the_date('d/m/Y', get_the_ID());
                if (has_excerpt()) {
                  $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
                } else {
                  $resumo = wp_trim_words(get_the_content(), 20, '...');
                }
                $url = get_permalink();
                ?>
                <div class="col-xl-4 col-md-6">

                  <div class="card card-over overflow-hidden bg-white h-100 rounded-3 y-shadow">
                    <div class="position-relative overflow-hidden">
                      <a href="<?php echo $url; ?>" class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </a>
                    </div>
                    <div class="card-body p-4b">
                      <a href="<?php echo $url; ?>" class="h5 stretched-link lh-150 text-decoration-none"><?php echo $post->post_title; ?></a>
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

                <!-- /.row -->

              <?php endwhile; ?>
              <?php
              yeti_bootstrap_pagination();
              // Reset Query
              wp_reset_query();
              ?>
            </div>
          <?php else : ?>

            <div class="col-12 text-center">
              <h3>Nenhum conteúdo foi encontrado.</h3>
              <i class="far fa-frown-open fa-3x"></i>
            </div>

          <?php endif; ?>

        </div>



        <!-- /.container -->
      </article>
      <!-- /.article -->
    </section>
    <!-- /.section -->


  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->



<?php get_footer(); ?>