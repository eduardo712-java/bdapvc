<?php

/**
 * Template Name: Elementos > Sliders
 */

get_header(); ?>

<!-- slider-1 v2 -->
<section class="slider-1 v2 my-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="slider owl-carousel">
          <?php
          // Recupera a lista de todos os posts fixos
          $sticky = get_option('sticky_posts');
          // Organiza os posts fixos pelos mais recentes primeiro
          rsort($sticky);
          // Limita aos 4 primeiros mais recentes
          $sticky = array_slice($sticky, 0, 4);

          // Recupera as notícias com os argumentos básicos
          // Argumentos: (cpt, limite, categoria, ordenar, ordem, meta, meta_value, autor, include, exclude, paged, offset, categoria_id, ignore_sticky)
          $posts = yb_get_posts_cpt(
            'post', // cpt
            4, // limite
            '', // categoria
            '', // id da categoria
            '', // ordem
            'DESC', // ordem por - DESc ou ASC
            '', // meta
            '', // meta_value
            '', // autor
            $sticky, // include - array de ID's
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
          $noticias = array();

          foreach ($posts as $post) :
            $data = get_the_date('d \d\e F \d\e Y', $post->ID);
            //$data = get_field('atracao_dias', $post->ID);
            $autor = $post->post_author;
            $titulo = $post->post_title;
            $conteudo = $post->post_content;
            $url = get_permalink($post->ID);
            $img_capa = get_the_post_thumbnail_url($post->ID, 'full');;
            $noticias[] = $titulo;
          ?>

            <li>
              <div class="slider-content h-100">
                <div class="container h-100">
                  <div class="row h-100">
                    <div class="col-lg-5 col-12 bg-body-secondary d-flex align-items-center p-5 order-lg-1 order-2 slider-info">
                      <div>
                        <h4 class="text-start text-dark fw-normal lh-1 mb-3"><?php echo $titulo; ?></h4>
                        <p class="text-start text-dark fw-normal lh-1 mb-4">Nulla id sapien nisl. Suspendisse massa leo, ultrices vitae nunc et, interdum volutpat magna.</p>
                        <div class="d-flex">
                          <a href="<?php echo $url; ?>" class="btn btn-primary px-5">SAIBA COMO</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7 col-12 d-flex align-items-center p-5 slider-bg position-relative order-lg-2 order-1" style="background-image: url(<?php echo esc_url($img_capa); ?>);" class="">
                      <div class="y-mask"></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>


          <?php
          // Fim do loop
          endforeach;
          // Reset Query
          wp_reset_query();
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

  <!-- slider-1.v3 -->
  <section class="slider-1 v3 my-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <ul class="slider owl-carousel  rounded-3 overflow-hidden">
            <?php
            // Recupera a lista de todos os posts fixos
            $sticky = get_option('sticky_posts');
            // Organiza os posts fixos pelos mais recentes primeiro
            rsort($sticky);
            // Limita aos 4 primeiros mais recentes
            $sticky = array_slice($sticky, 0, 4);

            // Recupera as notícias com os argumentos básicos
            // Argumentos: (cpt, limite, categoria, ordenar, ordem, meta, meta_value, autor, include, exclude, paged, offset, categoria_id, ignore_sticky)
            $posts = yb_get_posts_cpt(
              'post', // cpt
              4, // limite
              '', // categoria
              '', // id da categoria
              '', // ordem
              'DESC', // ordem por - DESc ou ASC
              '', // meta
              '', // meta_value
              '', // autor
              $sticky, // include - array de ID's
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
            $noticias = array();

            foreach ($posts as $post) :
              $data = get_the_date('d \d\e F \d\e Y', $post->ID);
              //$data = get_field('atracao_dias', $post->ID);
              $autor = $post->post_author;
              $titulo = $post->post_title;
              $conteudo = $post->post_content;
              $url = get_permalink($post->ID);
              $img_capa = get_the_post_thumbnail_url($post->ID, 'full');;
              $noticias[] = $titulo;
            ?>

            <li style="background-image: url(<?php echo esc_url($img_capa); ?>);" class="d-flex align-items-center justify-content-center y-mask">
              <div class="container-fluid">
                <div class="row d-flex align-items-start justify-content-center justify-content-lg-start">
                  <div class="col-12 offset-0 col-lg-5 offset-lg-1 text-center text-lg-start">
                    <h3 class="mb-4 lh-sm"><?php echo $titulo; ?></h3>
                    <p class="mb-5 lh-sm lead">Nulla id sapien nisl. Suspendisse massa leo, ultrices vitae nunc et, interdum volutpat magna.</p>
                    <a href="<?php echo $url; ?>" class="y-buttons-btn btn btn-primary text-white border-0 px-5 btn-over">Saiba mais!</a>
                  </div>
                </div>
              </div>
            </li>


            <?php
            // Fim do loop
            endforeach;
            // Reset Query
            wp_reset_query();
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>


<!-- slider-1 -->
<section class="slider-1 my-5">
  <ul class="slider owl-carousel">
    <?php
    // Recupera a lista de todos os posts fixos
    $sticky = get_option('sticky_posts');
    // Organiza os posts fixos pelos mais recentes primeiro
    rsort($sticky);
    // Limita aos 4 primeiros mais recentes
    $sticky = array_slice($sticky, 0, 4);

    // Recupera as notícias com os argumentos básicos
    // Argumentos: (cpt, limite, categoria, ordenar, ordem, meta, meta_value, autor, include, exclude, paged, offset, categoria_id, ignore_sticky)
    $posts = yb_get_posts_cpt(
      'post', // cpt
      4, // limite
      '', // categoria
      '', // id da categoria
      '', // ordem
      'DESC', // ordem por - DESc ou ASC
      '', // meta
      '', // meta_value
      '', // autor
      $sticky, // include - array de ID's
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
    $noticias = array();

    foreach ($posts as $post) :
      $data = get_the_date('d \d\e F \d\e Y', $post->ID);
      //$data = get_field('atracao_dias', $post->ID);
      $autor = $post->post_author;
      $titulo = $post->post_title;
      $conteudo = $post->post_content;
      $url = get_permalink($post->ID);
      $img_capa = get_the_post_thumbnail_url($post->ID, 'full');;
      $noticias[] = $titulo;
    ?>
      <li style="background-image: url(<?php echo esc_url($img_capa); ?>);" class="d-flex align-items-center justify-content-center y-mask">
        <a href="<?php echo $url; ?>" class="text-decoration-none">
          <div class="slider-content">
            <div class="container">
              <div class="y-block" data-aos="fade-in" data-aos-delay="0">
                <h1 class="y-block-title"><?php echo $titulo; ?></h1>
              </div>
              <div class="y-buttons" data-aos="fade-up" data-aos-delay="300">
                <a href="<?php echo $url; ?>" class="y-buttons-btn btn btn-primary btn-lg">SAIBA COMO</a>
                <a href="#" class="y-buttons-btn btn btn-light btn-lg">AINDA COM DÚDIVAS?</a>
              </div>
            </div>
          </div>
        </a>
      </li>
    <?php
    // Fim do loop
    endforeach;
    // Reset Query
    wp_reset_query();
    ?>
  </ul>
</section>


<!-- slider-1 -->
<section class="slider-news my-5">
  <ul class="slider owl-carousel">

    <?php
    // Recupera a lista de todos os posts fixos
    $sticky = get_option('sticky_posts');
    // Organiza os posts fixos pelos mais recentes primeiro
    rsort($sticky);
    // Limita aos 4 primeiros mais recentes
    $sticky = array_slice($sticky, 0, 4);

    // Recupera as notícias com os argumentos básicos
    // Argumentos: (cpt, limite, categoria, ordenar, ordem, meta, meta_value, autor, include, exclude, paged, offset, categoria_id, ignore_sticky)
    $posts = yb_get_posts_cpt(
      'post', // cpt
      4, // limite
      '', // categoria
      '', // id da categoria
      '', // ordem
      'DESC', // ordem por - DESc ou ASC
      '', // meta
      '', // meta_value
      '', // autor
      $sticky, // include - array de ID's
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
    $noticias = array();

    foreach ($posts as $post) :
      $data = get_the_date('d \d\e F \d\e Y', $post->ID);
      //$data = get_field('atracao_dias', $post->ID);
      $autor = $post->post_author;
      $titulo = $post->post_title;
      $conteudo = $post->post_content;
      $url = get_permalink($post->ID);
      $img_capa = get_the_post_thumbnail_url($post->ID, 'full');;
      $noticias[] = $titulo;
    ?>
      <a href="<?php echo $url; ?>" class="text-decoration-none">
        <li style="background-image: url(<?php echo esc_url($img_capa); ?>);" class="d-flex align-items-end justify-content-center y-mask">
          <div class="slider-content">
            <div class="container">
              <div class="y-block" data-aos="fade-in" data-aos-delay="0">
                <h1 class="y-block-title"><?php echo $titulo; ?></h1>
              </div>
            </div>
          </div>
        </li>
      </a>

    <?php
    // Fim do loop
    endforeach;
    // Reset Query
    wp_reset_query();
    ?>

  </ul>
  <div class="container-fluid">
    <div class="slider-nav d-flex justify-content-center">
      <?php
      $i = 0;
      foreach ($noticias as $noticia) {
        if (strlen($noticia) > 100) {
          $noticia = mb_substr($noticia, 0, 100) . "...";
        }
      ?>
        <div class="noticia d-flex align-items-center">
          <a href="#" data-index="<?php echo $i; ?>" class="d-flex align-items-center"><?php echo $noticia; ?></a>
        </div>
      <?php
        $i++;
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>