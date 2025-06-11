<?php get_header(); ?>
<div class="container-full">
  <main class="main news" role="main">

    <!-- header-1 -->
    <section class="header-1">
      <div class="container-fluid">
        <div class="y-block">
          <h2 class="y-header-title "><?php printf('%s', ucwords(strtolower(single_cat_title('', false)))); ?></h2>
          <?php if (category_description()) : ?>
            <h3 class="text-center y-header-subtitle">
              <?php echo category_description(); ?>
            </h3>
          <?php endif; ?>

        </div>
      </div>
    </section>
    <!-- /.header-1 -->

    <!-- Content -->
    <section>
      <article>
        <div class="container">
          <div class="row">

            <?php while (have_posts()) : the_post(); ?>

              <?php
              $i = 0;
              $data = get_the_date('d/m/Y', $post->ID);
              if (has_excerpt()) {
                $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
              } else {
                $resumo = wp_trim_words($post->post_content, 20, '...');
              }
              $url = get_permalink($post->ID);
              ?>
              <div class="col-md-4">
                <div class="card card-over bg-light shadow-sm mb-4" data-aos="fade" data-aos-once="true" data-aos-delay="<?php echo $i * 100; ?>">
                  <a href="<?php echo $url; ?>">
                    <div class="card-img">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('yeti-thumb', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                      }
                      ?>
                    </div>
                    <div class="card-body">
                      <h3 class="card-title"><?php echo $post->post_title; ?></h3>
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
              $i++;
              ?>
            <?php endwhile; ?>
          </div>
          <!-- /.row -->
          <div class="row">
            <?php
            yeti_bootstrap_pagination();
            ?>
          </div>
          <!-- /.row -->
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