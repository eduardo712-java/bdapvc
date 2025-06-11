<?php
/**
 * Arquivo que que exibe todos as atrações single
 */
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
      ?>

      <?php
      // Configura os dados personalizados da postagem
      $data = get_the_date('d \d\e F \d\e Y', get_the_ID());

      // Imagem do cabeçalho
      if (has_post_thumbnail()) {
        $bg = 'style="background-image: url(' . get_the_post_thumbnail_url(get_the_ID(), 'large') . ' )"';
      }
      ?>
      <!-- header-1 -->
      <section class="header-1" <?php echo $bg; ?>>
        <div class="container-fluid">
          <div class="y-block">
            <h2 class="y-header-title"><?php the_title(); ?></h2>
            <p class="y-header-subtitle">Dia: <?php yb_get_day_atraction(get_the_ID(), 'local'); ?></p>
            <p class="y-header-subtitle">Hora: <?php echo $hora; ?></p>
            <p class="y-header-subtitle">Local: <?php yb_get_post_taxo(get_the_ID(), 'local'); ?></p>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- Content -->
      <section class="y-small-padding">
        <article>
          <div class="container">
            <div class="row">

              <!-- Content -->
              <div class="col-sm-12">


                <?php the_content(); ?>

                <div class="y-article-footer">
                  <div class="y-social-share">
                    <?php
                    // Insere os botões de compartilhamento
                    echo do_shortcode('[social_warfare]');
                    ?>
                  </div>
                  <?php
                  the_post_navigation(array(
                      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Próxima', 'yeti-bootstrap') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
                      'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="meta-nav" aria-hidden="true"> ' . __('Anterior', 'yeti-bootstrap') . '</span> ',
                      'screen_reader_text' => __('Outras atrações', 'yeti-bootstrap'),
                  ));
                  ?>
                </div>

              </div>


            </div>
            <!-- /.row -->
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