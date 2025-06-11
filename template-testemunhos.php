<?php

/**
 * Template Name: Testemunhos
 */

get_header(); ?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <!-- header-1 -->
      <section class="header-1">
        <div class="container-fluid">
          <div class="y-block">
            <h1 class="fw-light text-white text-center mb-1"><?php the_title(); ?></h1>
            <h3 class="text-white fw-light text-center h5">O que nossos clientes tem a dizer</h3>
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




      <section class="clients-5">
        <div class='container px-4'>

          <div class="row" data-masonry='{"percentPosition": true }'>

            <?php
            // Recupera as notícias com os argumentos básicos
            if (get_query_var('paged')) {
              $paged = get_query_var('paged');
            } elseif (get_query_var('page')) {
              $paged = get_query_var('page');
            } else {
              $paged = 1;
            }

            $posts = yb_get_posts_cpt(
              'depoimento', // cpt
              -1, // limite
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
              0, //  ignore_sticky - 0 ou 1
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
            ?>

              <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <p class="card-text"><i class="fa-solid text-red fa-quote-left me-1 opacity-50"></i><?php echo $post->post_content; ?><i class="fa-solid text-red fa-quote-right ms-1 opacity-50"></i></p>
                  </div>
                  <div class="card-footer p-3 bg-white border-0">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail', ['class' => 'card-img-top attachment-thumbnail wp-post-image img-fluid rounded-circle', 'title' => $post->post_title]);
                      }
                      ?>
                      </div>
                      <div class="flex-grow-1 ms-2 lh-sm">
                        <p class="mb-0 fw-bolder text-red"><?php echo $post->post_title; ?>​</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php
              $i++;
            endforeach;
            ?>

            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow-sm">
                <div class="card-body">
                  <p class="card-text"><i class="fa-solid text-red fa-quote-left me-1 opacity-50"></i>Estou simplesmente encantada com os Painéis Decorativos de PVC em Alto Brilho! Escolhi a Linha Madeiras da Amazônia para dar um toque natural e acolhedor à minha sala de estar. A qualidade é incrível, e o brilho adiciona um charme extra. Minha casa nunca esteve tão elegante!<i class="fa-solid text-red fa-quote-right ms-1 opacity-50"></i></p>
                </div>
                <div class="card-footer p-3 bg-white border-0">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/avatar-michelle-150x150.png" class="card-img-top rounded-circle" style="width: 50px;" alt="">
                    </div>
                    <div class="flex-grow-1 ms-2 lh-sm">
                      <p class="mb-0 fw-bolder text-red">Michelle P.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow-sm">
                <div class="card-body">
                  <p class="card-text"><i class="fa-solid text-red fa-quote-left me-1 opacity-50"></i>Os Painéis Decorativos de PVC da Linha Madeiras da Amazônia são simplesmente deslumbrantes! Eu estava buscando uma maneira de trazer a natureza para dentro de casa, e esses painéis fizeram exatamente isso. A qualidade, a textura e a durabilidade são incomparáveis. Minha casa agora é um verdadeiro refúgio!<i class="fa-solid text-red fa-quote-right ms-1 opacity-50"></i></p>
                </div>
                <div class="card-footer p-3 bg-white border-0">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/avatar-smith-150x150.png" class="card-img-top rounded-circle" style="width: 50px;" alt="">
                    </div>
                    <div class="flex-grow-1 ms-2 lh-sm">
                      <p class="mb-0 fw-bolder text-red">Amaro Silva</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow-sm">
                <div class="card-body">
                  <p class="card-text"><i class="fa-solid text-red fa-quote-left me-1 opacity-50"></i>Os Painéis Decorativos de PVC transformaram completamente o visual do meu escritório. A sofisticação e a modernidade que eles trouxeram são surpreendentes. O acabamento em alto brilho realmente faz toda a diferença. Recomendo a todos que buscam um toque contemporâneo!<i class="fa-solid text-red fa-quote-right ms-1 opacity-50"></i></p>
                </div>
                <div class="card-footer p-3 bg-white border-0">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/avatar-john-150x150.png" class="card-img-top rounded-circle" style="width: 50px;" alt="">
                    </div>
                    <div class="flex-grow-1 ms-2 lh-sm">
                      <p class="mb-0 fw-bolder text-red">Patricio Santos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card shadow-sm">
                <div class="card-body">
                  <p class="card-text"><i class="fa-solid text-red fa-quote-left me-1 opacity-50"></i>Impressionante o resultado final… estou sem palavras e minimamente só posso indicar sem medo de errar, que a BDA tem um compromisso visível com seus clientes<i class="fa-solid text-red fa-quote-right ms-1 opacity-50"></i></p>
                </div>
                <div class="card-footer p-3 bg-white border-0">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/avatar-tupil-150x150.png" class="card-img-top rounded-circle" style="width: 50px;" alt="">
                    </div>
                    <div class="flex-grow-1 ms-2 lh-sm">
                      <p class="mb-0 fw-bolder text-red">Mariana Morgan</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>




    <?php endwhile; ?>

  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>