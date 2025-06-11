<?php

/**
 * Template Name: Produtos
 */

get_header(); ?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <!-- header-1 -->
      <section class="header-1 produtos">
        <div class="container-fluid">
          <div class="y-block">
            <h1 class="fw-light text-white text-center mb-1"><?php the_title(); ?></h1>
            <h3 class="text-white fw-light text-center h5">Temos opções incríveis para valorizar seu espaço!</h3>
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

      <!-- .content-26 -->
      <section class="content-26" id="poliestireno">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6 align-items-center d-flex">
              <div data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <h3 class="text-center text-lg-start mb-3 fw-light">Painéis BDA em PVC e WPC.</h3>
                <p class="y-header-text text-center text-lg-start mb-5">Os painéis BDA são a escolha ideal para quem busca beleza, resistência e praticidade na decoração de interiores. Desenvolvidos com materiais de alta qualidade, nossos painéis garantem um acabamento sofisticado e duradouro para diversos tipos de projetos.</p>

                <p class="y-header-text text-center text-lg-start fw-bolder mb-4">Características</p>

                <div class="d-flex flex-column flex-lg-row mb-4">
                  <div class="text-red text-center text-lg-start mb-2 mb-lg-0">
                    <i class="fa-light fa-chart-scatter-bubble fa-2x"></i>
                  </div>
                  <div class="ms-0 ms-lg-3">
                    <p class="h5 mb-1 fw-light text-center text-lg-start mb-3 mb-lg-0">
                      Produzidos em PVC e WPC, materiais de alta durabilidade e sustentáveis.
                    </p>
                  </div>
                </div>

                <div class="d-flex flex-column flex-lg-row mb-4">
                  <div class="text-red text-center text-lg-start mb-2 mb-lg-0">
                    <i class="fa-light fa-game-board fa-2x"></i>
                  </div>
                  <div class="ms-0 ms-lg-3">
                    <p class="h5 mb-1 fw-light text-center text-lg-start mb-3 mb-lg-0">
                      Verso texturizado, garantindo melhor aderência da cola.
                    </p>
                  </div>
                </div>

                <div class="d-flex flex-column flex-lg-row mb-4">
                  <div class="text-red text-center text-lg-start mb-2 mb-lg-0">
                    <i class="fa-light fa-thumbs-up fa-2x"></i>
                  </div>
                  <div class="ms-0 ms-lg-3">
                    <p class="h5 mb-1 fw-light text-center text-lg-start mb-3 mb-lg-0">
                      Manutenção simples.
                    </p>
                  </div>
                </div>

                <div class="d-flex flex-column flex-lg-row mb-5">
                  <div class="text-red text-center text-lg-start mb-2 mb-lg-0">
                    <i class="fa-light fa-trophy-star fa-2x"></i>
                  </div>
                  <div class="ms-0 ms-lg-3">
                    <p class="h5 mb-1 fw-light text-center text-lg-start mb-3 mb-lg-0">
                      Acabamento sofisticado, com texturas inspiradas na Madeira da Amazônia e Mármore Deluxe.
                    </p>
                  </div>
                </div>

                <p class="y-header-text text-center text-lg-start mb-5">Os painéis decorativos BDA oferecem um design moderno e versátil, transformando qualquer ambiente com sofisticação e praticidade.</p>

              </div>
            </div>
            <div class="col-12 col-lg-6 text-center position-relative">
              <img class="ornamento d-none d-md-block" src="/wp-content/themes/yeti-bootstrap/assets/img/empresa-ornamento.png" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
              <img class="y-screenshot img-fluid  mb-5 mb-lg-0" src="/wp-content/themes/yeti-bootstrap/assets/img/poliestireno.jpg" data-aos="fade" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-26 -->

      <!-- .content-1 -->
      <section class="content-1 overflow-hidden bg-light py-5 my-5">
        <div class="container">

          <div class="row">

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="0">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_01.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Qualidade superior</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_02.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">À prova d'água</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="150">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_03.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Ecológico</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="200">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_04.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Não contém formaldeído</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="250">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_05.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Fácil instalação</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_06.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Anti traça</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5 mb-lg-0">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="350">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_07.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Alta resistência</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5 mb-lg-0">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="400">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_08.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Superficie técnica</h3>
                </div>
              </div>
            </div>

            <div class="col-6 col-lg-4 mb-5 mb-lg-0">
              <div class="y-thumb border-0" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="400">
                <div class="y-thumb-image mb-2 text-primary">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/icone_09.jpg">
                </div>
                <div class="y-thumb-caption">
                  <h3 class="h6 fw-light">Película de proteção</h3>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>
      <!-- ./content-1 -->


      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos">
        <div class="container">
          <div class="y-header">
            <h2 class="text-center fw-light">Conheça nossas linhas de produtos</h2>
            <p class="y-header-text">Soluções modernas e ecologicamente corretas para tornar os seus<br> ambientes ainda mais encantadores.</p>
          </div>
        </div>
      </section>

      <!-- .content-25 -->
      <section class="content-25 bg-gray" id="pvc-alto-brilho">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-7 text-center">
              <img class="border border-light rounded-3 shadow img-fluid mb-5 mb-lg-0" src="/wp-content/themes/yeti-bootstrap/assets/img/produto-img-01.jpg" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
            </div>
            <div class="col-12 col-lg-5 align-items-center d-flex">
              <div>
                <h3 class="y-header-subtitle text-center text-lg-start text-white">Alto Brilho</h3>
                <p class="y-header-text text-center text-lg-start m-0 text-white"><strong>O painel decorativo em Alto Brilho BDA</strong> traz uma estrutura totalmente única e diversificada ao mercado, com 34 colmeias e 5 camadas de verniz, a BDA traz o mais resistente e duradouro painel paratetos e paredes do mercado.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-25 -->

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0 bg-gray-gradient">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-0">

            <!-- Categoria -->
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'alto-brilho', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bolder"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>

      <!-- carousel-2 -->
      <section class="carousel-2 nav-lateral produtos pt-0">
        <div class="container">
          <div class="y-header">
            <h4 class="text-center fw-light">Perfis</h4>
          </div>

          <div class="row">

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil H</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-h', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil U</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-u', // informe o termo ou ID
                    'include_children' => false
                  )
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
                    <div class="h-100 w-100 item">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil Colonial</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-colonial', // informe o termo ou ID
                    'include_children' => false
                  )
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
                    <div class="h-100 w-100 item">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bolder"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

          </div>

        </div>
      </section>

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0 d-none">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-5">

            <!-- Categoria -->
            <div class="col-12">
              <h4 class="fw-light text-center">Perfil H</h4>
            </div>
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-h', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bold"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0 d-none">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-5">

            <!-- Categoria -->
            <div class="col-12">
              <h4 class="fw-light text-center">Perfil U</h4>
            </div>
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-u', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bold"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0 d-none">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-5">

            <!-- Categoria -->
            <div class="col-12">
              <h4 class="fw-light text-center">Perfil Colonial</h4>
            </div>
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-colonial', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bold"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>

      <!-- .content-25 -->
      <section class="content-25 bg-gradient-light-white" id="pvc-fosco-rustico">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-5 align-items-center d-flex mb-5 mb-lg-0">
              <div>
                <h3 class="y-header-subtitle text-center text-lg-end text-red">Fosco Rústico</h3>
                <p class="y-header-text text-center text-lg-end m-0"><strong>O painel decorativo Fosco Rústico BDA</strong> traz uma estrutura totalmente única e diversificada ao mercado, com 38 colmeias e superfície texturizada a BDA traz o mais resistente e duradouro painel para tetos e paredes do mercado.</p>
              </div>
            </div>
            <div class="col-12 col-lg-7 text-center">
              <img class="border border-light rounded-3 shadow img-fluid " src="/wp-content/themes/yeti-bootstrap/assets/img/produto-img-02.jpg" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-25 -->

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-5">

            <!-- Categoria -->
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'fosco-rustico', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>

      <!-- carousel-2 -->
      <section class="carousel-2 nav-lateral produtos pt-0">
        <div class="container">
          <div class="y-header">
            <h4 class="text-center fw-light">Perfis</h4>
          </div>

          <div class="row">

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil H</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-h-fosco-rustico', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil U</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-u-fosco-rustico', // informe o termo ou ID
                    'include_children' => false
                  )
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
                    <div class="h-100 w-100 item">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12 col-lg-4">
              <h5 class="text-red text-center m-0 mb-4">Perfil Colonial</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'perfil-colonial-fosco-rustico', // informe o termo ou ID
                    'include_children' => false
                  )
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
                    <div class="h-100 w-100 item">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bolder"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

          </div>

        </div>
      </section>

      <!-- .content-25 -->
      <section class="content-25 bg-gradient-light-white" id="painel-interno">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-7 text-center">
              <img class="border border-light rounded-3 shadow img-fluid mb-5 mb-lg-0" src="/wp-content/themes/yeti-bootstrap/assets/img/produto-img-03.jpg" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
            </div>
            <div class="col-12 col-lg-5 align-items-center d-flex">
              <div>
                <h3 class="y-header-subtitle text-center text-lg-start text-red">Painel Ripado</h3>
                <p class="y-header-text text-center text-lg-start m-0">Painel de parede em poliestireno extrudido de alta densidade PS com superfície lisa e parte posterior nervurada para melhor aderência da cola. Altamente resistente e indicado para áreas internas - fabricado com polímeros de alta densidade.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-25 -->

      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0">
        <div class="container">


          <!-- Linha -->
          <div class="row mb-5">

            <!-- Categoria -->
            <div class="col-12">
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'painel-ripado', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center fw-bold"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->


          </div>
          <!-- ./ Linha -->


        </div>
      </section>


      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos pt-0">
        <div class="container">
          <div class="y-header">
            <h4 class="text-center fw-light">Acessórios</h4>
          </div>

          <div class="row">

            <!-- Categoria -->
            <div class="col-12 mb-5">
              <h5 class="text-red text-center m-0 mb-4">Acabamento em L</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'acessorio-l', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12 mb-5">
              <h5 class="text-red text-center m-0 mb-4">Acessório A/B</h5>
              <div class="itens owl-carousel row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
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
                  1, //  ignore_sticky - 0 ou 1
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'acessorio_ab	', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

            <!-- Categoria -->
            <div class="col-12">
              <h5 class="text-red text-center m-0 mb-4">Clipe de Fixação</h5>
              <div class="itens2 owl-carousel2 row">

                <?php
                $posts = yb_get_posts_cpt(
                  'produto', // cpt
                  1, // limite
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
                  array(
                    'taxonomy' => 'categoria', // nome da taxonomia personalizada
                    'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                    'terms'    => 'clipe-de-fixacao', // informe o termo ou ID
                    'include_children' => false
                  )
                );

                $i = 0;
                foreach ($posts as $post) :
                  $url = get_permalink($post->ID);
                ?>
                  <a href="<?php echo $url; ?>" class="text-decoration-none">
                    <div class="h-100 item w-100">
                      <div class="text-center">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('yeti-thumb', ['class' => 'produto-img attachment-thumbnail wp-post-image img-fluid', 'title' => $post->post_title]);
                        }
                        ?>
                      </div>
                      <div class="mt-2">
                        <p class="text-center"><?php echo $post->post_title; ?></p>
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
            <!-- ./Categoria -->

          </div>

        </div>
      </section>


      <!-- carousel-2 -->
      <section class="carousel-produtos nav-lateral produtos">
        <div class="container">
          <div class="y-header">
            <h2 class="text-center fw-light">Leia nosso catálogo online</h2>
          </div>
          <div class="row">
            <div class="col-12 text-center">
              <?php echo  do_shortcode('[dflip id="309"][/dflip]'); ?>
            </div>
          </div>
        </div>
      </section>

      <!-- .content-28 -->
      <section class="content-28">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card bg-light border-0 rounded-3">
                <div class="card-body p-5">

                  <div class="row">
                    <div class="col-12 col-lg-6 text-center">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/catalogo.png" class="img-fluid content-28-img">
                    </div>
                    <div class="col-12 col-lg-6 d-flex align-items-center">
                      <div class="text-center text-lg-start">
                        <h4 class="text-red mb-3">Baixe nosso catálogo com nossa linha completa de produtos</h4>
                        <p class="mb-0">Faça o download do PDF do catálogo contendo nossa linha completa de painéis, perfis e acessórios.</p>
                        <a href="<?php echo get_field('pagina_catalogo'); ?>" target="_blank" class="btn btn-primary px-5 mt-5">Baixe nossa catálogo</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-28 -->

    <?php endwhile; ?>

  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>