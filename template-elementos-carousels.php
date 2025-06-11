<?php

/**
 * Template Name: Elementos > Carousels
 */

get_header(); ?>


<!-- carousel-1 -->
<section class="carousel-1">
  <div class="container">
    <div class="y-header">
      <h2 class="y-header-title">carousel-1</h2>
      <p class="y-header-text">Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.</p>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="itens owl-carousel">
          <div class="item">
            <i class="fa-brands fa-airbnb"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-behance"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-bootstrap"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-discord"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-github-alt"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-jedi-order"></i>
          </div>
          <div class="item">
            <i class="fa-brands fa-wordpress-simple"></i>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- carousel-2 -->
<section class="carousel-2 nav-lateral">
  <div class="container">
    <div class="y-header">
      <h2 class="y-header-title">carousel padrão</h2>
      <p class="y-header-text">Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.</p>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="itens owl-carousel row">
          <?php
          $posts = yb_get_posts_cpt(
            'post', // cpt
            9, // limite
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

          $i = 0;
          foreach ($posts as $post) :
            $data = get_the_date('d/m/Y', $post->ID);
            if (has_excerpt()) {
              $resumo = wp_trim_words(get_the_excerpt(), 20, '...');
            } else {
              $resumo = wp_trim_words($post->post_content, 20, '...');
            }
            $url = get_permalink($post->ID);
          ?>
            <a href="<?php echo $url; ?>" class="text-decoration-none">
              <div class="card card-over bg-white shadow-sm h-100 item" style="min-height: 370px;">
                <div class="">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('yeti-thumb', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid rounded-top', 'title' => $post->post_title]);
                  }
                  ?>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $post->post_title; ?></h5>
                </div>
                <div class="card-footer bg-transparent border-0 p-0 d-flex flex-row p-3 border-top">
                  <small class="card-date border-0 me-2" title="Publicado em: <?php echo $data; ?>"><i class="far fa-calendar-alt" aria-hidden="true"></i> <?php echo $data; ?></small>
                  <small class="border-0" title="Tempo de leitura: <?php echo yb_reading_time(); ?>"><i class="far fa-clock"></i> <?php echo yb_reading_time(); ?></small>
                </div>
              </div>
            </a>


          <?php
            $i++;
          endforeach;
          // Reset Query
          wp_reset_query();
          ?>

        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>