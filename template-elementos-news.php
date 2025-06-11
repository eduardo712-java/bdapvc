<?php

/**
 * Template Name: Elementos > Contents
 */

get_header(); ?>

<!-- news-1 -->
<section class="news-1 news">
  <div class="container">
    <div class="y-block">
      <h2 class="y-header-title">NOTÍCIAS</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card-deck">
          <?php
          // Recupera as notícias com os argumentos básicos
          $posts = yb_get_posts_cpt(
            'post', // cpt
            3, // limite
            '', // categoria
            '', // ordem
            'DESC', // ordem por - DESc ou ASC
            '', // meta
            '', // meta_value
            '', // autor
            '', // include - array de ID's
            '', // exclude - array de ID's
            '', // paged
            '', // offset
            '', // id da categoria
            1 //  ignore_sticky - 0 ou 1
          );
          $i = 0;
          foreach ($posts as $post) :
            $data = get_the_date('d \d\e F \d\e Y', $post->ID);
            if (has_excerpt()) {
              $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
            } else {
              $resumo = wp_trim_words($post->post_content, 20, '...');
            }
            $url = get_permalink($post->ID);
          ?>
            <a href="<?php echo $url; ?>">
              <div class="card card-over mb-4 h-100" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
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
                <div class="card-footer bg-transparent border-0 p-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <small class="card-date" title="Publicado em: <?php echo $data; ?>"><i class="far fa-calendar-alt" aria-hidden="true"></i> <?php echo $data; ?></small>
                    </li>
                    <li class="list-group-item">
                      <small title="Tempo de leitura: <?php echo yb_reading_time(); ?>"><i class="far fa-clock"></i> <?php echo yb_reading_time(); ?></small>
                    </li>
                  </ul>
                </div>
              </div>
            </a>

          <?php
            $i++;
          // Fim do loop
          endforeach;
          // Reset Query
          wp_reset_query();
          ?>
        </div>
        <div class="py-3" data-aos="fade" data-aos-delay="100">
          <a href="/noticias" class="btn btn-outline-primary btn-block">OUTRAS NOTÍCIAS</a>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- news-3 -->
<section class="news-3 news">
  <div class="container">
    <div class="y-block">
      <h2 class="y-header-title text-left">Posts recentes</h2>
    </div>
    <!-- Novos Posts -->

    <div class="row">

      <?php
      $i = 0;

      $posts = yb_get_posts_cpt(
        'post', // cpt
        3, // limite
        '', // categoria
        '', // ordem
        'DESC', // ordem por - DESc ou ASC
        '', // meta
        '', // meta_value
        '', // autor
        '', // include - array de ID's
        '', // exclude - array de ID's
        $paged, // paged
        '', // offset
        '', // id da categoria
        1 //  ignore_sticky - 0 ou 1
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
        <div class="col-md-4 post">
          <div class="card card-over bg-light shadow-sm mb-4" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-once="true" data-aos-delay="<?php echo $i * 100; ?>">
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
                <h3 class="card-title"><?php echo $post->post_title; ?></h3>
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

  </div>
</section>
<!-- /.news-3 -->

<?php get_footer(); ?>