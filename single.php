<?php

/**
 * Arquivo que exibe todos os single posts e attachments
 */
get_header();
?>

<div class="container-full">
  <main class="main news" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <?php
      // Configura os dados personalizados da postagem
      $data = get_the_date('d/m/Y', get_the_ID());

      // Imagem do cabeçalho
      if (has_post_thumbnail()) {
        $bg = 'style="background-image: url(' . get_the_post_thumbnail_url(get_the_ID(), 'large') . ' )"';
      }
      ?>
      <!-- header-1 -->
      <section class="header-1" <?php echo $bg; ?>>
        <div class="container-fluid">
          <div class="y-block">
            <h1 class="y-header-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- Content -->
      <section>
        <article>
          <div class="container">
            <div class="row">
              <!-- Content -->
              <div class="col-md-12 col-lg-8 mb-5">

                <div class="y-article-header pl-0 pr-0 pt-3 pb-3 mb-3">
                  <div>
                    <i class="far fa-calendar-alt me-1" aria-hidden="true"></i> Publicado em: <strong class="me-3 ms-1"><?php echo $data; ?></strong>
                  </div>
                  <div>
                    Autor: <strong class="me-3 ms-1"><?php the_author(); ?></strong>
                  </div>
                  <div>
                    Assunto: <strong class="me-3 ms-1"><?php yb_get_post_category_linked(get_the_ID()); ?></strong>
                  </div>
                  <div>
                    <i class="far fa-clock me-1"></i> Tempo de leitura: <strong class="ms-1"><?php echo yb_reading_time(); ?></strong>
                  </div>
                </div>

                <?php the_content(); ?>

                <div class="y-article-footer mt-5">

                  <!-- Autor -->
                  <div class="d-flex border p-4">
                    <?php
                    $author_id = get_the_author_meta('ID');
                    $avatar = get_field('yeti_user_avatar', 'user_' . $author_id);
                    ?>
                    <div class="flex-shrink-0">
                      <img src="<?php echo $avatar['sizes']['thumbnail']; ?>" class="me-3 y-article-author" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="text-secondary">Escrito por </span>
                      <h5 class="mt-0 text-dark"><?php echo get_the_author_meta('display_name'); ?></h5>
                      <?php echo get_the_author_meta('description'); ?>
                    </div>
                  </div>
                  <!-- ./ Autor -->

                  <!-- Paginação -->
                  <?php
                  /*
                  <div class="clearfix border-top mt-5 pt-2">
                  <?php
                  the_post_navigation(array(
                      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Próxima', 'yeti-bootstrap') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
                      'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="meta-nav" aria-hidden="true"> ' . __('Anterior', 'yeti-bootstrap') . '</span> ',
                      'screen_reader_text' => __('Continue lendo', 'yeti-bootstrap'),
                  ));
                  ?>
                  </div>
                   */
                  ?>
                  <!-- ./Paginação -->

                  <!-- Comentários -->
                  <div class="clearfix border-top  mt-5 pt-2">
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) {
                      comments_template();
                    }
                    ?>
                  </div>
                  <!-- ./Comentários -->



                </div>
              </div>
              <!-- /.Content -->

            <?php endwhile; ?>

            <!-- Sidebar -->
            <div class="col-md-12 col-lg-4">
              <?php if (is_active_sidebar('y-sidebar-1')) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                  <?php dynamic_sidebar('y-sidebar-1'); ?>
                </div><!-- #primary-sidebar -->
              <?php endif; ?>
            </div>
            <!-- /.Sidebar -->

            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-12">
                <h3 class="w-100">Leia também</h3>
              </div>
              <?php
              // Recupera as notícias com os argumentos básicos
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
                array(get_the_ID()), // exclude - array de ID's
                '', // paged
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
                $resumo = wp_trim_words($post->post_content, 20, '...');
                $url = get_permalink($post->ID);
              ?>
                <div class="col-4">
                  <div class="card card-over mb-5" data-aos="fade" data-aos-once="true" data-aos-delay="0">
                    <span class="card-category"><i class="fas fa-chevron-right"></i> <?php yb_get_post_category_linked($post->ID); ?></span>
                    <a href="<?php echo $url; ?>">
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
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <small class="card-date" title="Publicado em: <?php echo $data; ?>"><i class="far fa-calendar-alt" aria-hidden="true"></i> <?php echo $data; ?></small>
                        </li>
                        <li class="list-group-item">
                          <small title="Tempo de leitura: <?php echo yb_reading_time(); ?>"><i class="far fa-clock"></i> <?php echo yb_reading_time(); ?></small>
                        </li>
                      </ul>
                    </a>
                  </div>
                </div>

              <?php
              // Fim do loop
              endforeach;
              // Reset Query
              wp_reset_query();
              ?>
            </div>
            <!-- /.row -->

          </div>
          <!-- /.container -->
        </article>
      </section>
      <!-- /.section -->
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>