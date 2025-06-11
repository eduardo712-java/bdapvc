<?php

/**
 * Template Name: Home
 */

get_header(); ?>

<main role="main">

  <!-- slider-1 v2 -->
  <section class="slider-1 v2 my-5 mb-2">
    <div class="container-fluid p-0">
      <div class="row position-relative p-0 m-0">
        <div class="col-12 p-0 m-0">
          <ul class="slider owl-carousel">

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
              'slider', // cpt
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
              /*
        array(
          'taxonomy' => '', // nome da taxonomia personalizada
          'field'    => '', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
          'terms'    => '', // informe o termo ou ID
        )
        */
            );
            foreach ($posts as $post) :
              $url = get_field('slider_img', $post->ID);
            ?>

              <li>
                <div class="slider-content h-100">
                  <div class="container-fluid h-100">
                    <div class="row h-100">
                      <div class="col-lg-12 col-12 d-flex align-items-center p-0 slider-bg2 position-relative order-lg-2 order-1">
                        <img src="<?php echo $url; ?>" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </li>

            <?php
            endforeach;
            // Reset Query
            wp_reset_query();
            ?>

          </ul>
        </div>
        <div class="slider-info slider-info px-2 mt-2">
          <div class="bg-opacity-75 bg-dark p-5 text-white text-md-start text-center rounded-3 mt-0">
            <div class="row align-items-center">
              <div class="col-lg-8 col-12 pe-lg-5">
                <h3 class="fw-light lh-1 mb-3 text-white">Solução em painéis moderno</h3>
                <p class="fw-light lh-2 m-0">Os painéis de PVC são um dos maiores coadjuvantes de nosso portfólio, perfeitamente adequados tanto para o teto quanto para as paredes dos mais diversos espaços.</p>
              </div>
              <div class="col-lg-4 col-12 mt-4 mb-lg-0">
                <a href="/produtos/" class="y-buttons-btn btn btn-lg btn-primary text-white border-0 px-5 py-3 btn-over text-nowrap d-block">Conheça nossos produtos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- carousel-2 -->
  <section class="carousel-2 nav-lateral produtos bg-gray-gradient">
    <div class="container">
      <div class="y-header">
        <h2 class="text-center fw-light">Diversas linhas de produtos<br>
          com a ampla <strong class="fw-bold text-red">versatilidade do PVC e WPC</strong>.</h2>
        <p class="y-header-text">Oferecemos uma alternativa moderna e ecologicamente correta para tornar seus<br> ambientes ainda mais encantadores.</p>
      </div>

      <div class="row">

        <!-- Categoria -->
        <div class="col-12 col-lg-4">
          <h5 class="text-red text-center m-0 mb-4">Alto Brilho</h5>
          <div class="itens owl-carousel row">

            <?php
            $posts = yb_get_posts_cpt(
              'produto', // cpt
              3, // limite
              '', // categoria
              '', // id da categoria
              '', // ordem
              'DESC', // ordem por - DESc ou ASC
              '', // meta
              '', // meta_value
              '', // autor
              array(292, 293, 235), // include - array de ID's
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
              //$url = get_permalink($post->ID);
              $url = "javascript:void(0);";
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
          <h5 class="text-red text-center m-0 mb-4">Fosco Rústico</h5>
          <div class="itens owl-carousel row">

            <?php
            $posts = yb_get_posts_cpt(
              'produto', // cpt
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
              array(
                'taxonomy' => 'categoria', // nome da taxonomia personalizada
                'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                'terms'    => 'fosco-rustico', // informe o termo ou ID
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
              //$url = get_permalink($post->ID);
              $url = "javascript:void(0);";
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
          <h5 class="text-red text-center m-0 mb-4">Painel ripado</h5>
          <div class="itens owl-carousel row">

            <?php
            $posts = yb_get_posts_cpt(
              'produto', // cpt
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
              array(
                'taxonomy' => 'categoria', // nome da taxonomia personalizada
                'field'    => 'slug', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                'terms'    => 'painel-ripado', // informe o termo ou ID
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
              //$url = get_permalink($post->ID);
              $url = "javascript:void(0);";
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

        <div class="col-12 mt-5 text-center">
          <a href="/produtos" class="y-buttons-btn btn btn-primary px-5">Conheça nossa linha completa</a>
        </div>


      </div>

    </div>
  </section>

  <!-- hero-1 -->
  <section class="hero-1 sticky-hero js-sticky-hero">
    <div class="sticky-hero__media sticky-hero--scale sticky-hero--overlay rounded-3 mx-2" aria-hidden="true"></div>

    <div class="sticky-hero__content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5">
            <div class="y-block text-center">
              <h2 class="fw-light"><strong class="fw-bold">Projetos premiados</strong>​ dão testemunho do nosso<br> compromisso com a excelência.</h2>
              <p class="y-header-text">Ao receber reconhecimento por inovação e liderança, fortalecemos nossa posição<br> e inspiramos continuamente nossa equipe a alcançar novos patamares.</p>
              <p class="mt-5"><a href="/produtos/" class="y-buttons-btn btn btn-primary px-5">Conheça nossos produtos</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- .content-22 -->
  <section class="content-22 bg-gradient-light-white">
    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-4 offset-0 offset-lg-1 text-center d-flex align-items-center">

          <picture class="mb-4 mb-lg-0 rounded-3">
            <source media="(max-width: 992px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-altobrilho-img-04.jpg">
            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-altobrilho-img-01.jpg">
            <source media="(min-width: 1200px) and (max-width: 1399px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-altobrilho-img-02.jpg">
            <source media="(min-width: 1400px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-altobrilho-img-03.jpg">
            <img src="/wp-content/themes/yeti-bootstrap/assets/img/bloco-altobrilho-img-03.jpg" alt="" class="img-fluid rounded-4">
          </picture>

        </div>
        <div class="col-12 col-lg-6 text-center text-lg-start ps-lg-5 px-3">
          <h2 class="fw-light mb-3">Painel Alto Brilho BDA – Sofisticação e Durabilidade em Cada Detalhe</h2>
          <p class="lh-sm lead m-0">Quer um acabamento moderno, sofisticado e de alto impacto visual? O <strong class="text-red fw-bold">Painel Alto Brilho BDA</strong> é a escolha perfeita para quem busca elegância e resistência em um só produto!</p>

          <div class="row mt-5">
            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">

                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-chart-scatter-bubble fa-stack-1x fa-inverse"></i>
                </span>

              </p>
              <p class="lh-sm"> <strong class="text-red fw-bold">Brilho intenso e acabamento impecável</strong> – Com 5 camadas de verniz, garante um efeito premium que realça qualquer ambiente.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-game-board fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Estrutura reforçada com 34 colmeias</strong> – O painel mais resistente e duradouro do mercado.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-thumbs-up fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Fácil limpeza e manutenção</strong> – Beleza que dura, sem complicações.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-rectangle-vertical-history fa-stack-1x fa-inverse"></i>
                </span>

              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Versatilidade para qualquer espaço</strong> – Ideal para tetos e paredes, agregando requinte e modernidade ao seu projeto.</p>
            </div>

            <div class="col-12">
              <a href="/produtos/#pvc-alto-brilho" class="y-buttons-btn btn btn-primary px-5">Conheça nossos produtos</a>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- ./content-22 -->

  <!-- .content-22 -->
  <section class="content-22 bg-gradient-light-white">
    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-5 offset-0 offset-lg-1 text-center text-lg-end px-3 order-lg-1 order-2">
          <h2 class="fw-light mb-3">Fosco Rústico BDA – Resistência, Estilo e Exclusividade</h2>
          <p class="lh-sm lead m-0">Dê um toque de elegância e personalidade aos seus ambientes com o <strong class="text-red fw-bold">Fosco Rústico BDA</strong>! Desenvolvido com uma estrutura inovadora de 38 colmeias e uma superfície texturizada única, ele oferece um acabamento sofisticado, durável e diferenciado para tetos e paredes.</p>

          <div class="row mt-5">
            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-raindrops fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"> <strong class="text-red fw-bold">Máxima resistência e durabilidade</strong> – O painel mais robusto do mercado, pronto para qualquer ambiente interno.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">

                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-trophy-star fa-stack-1x fa-inverse"></i>
                </span>

              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Estética exclusiva</strong> – Textura rústica que agrega charme e autenticidade ao seu projeto.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-thumbs-up fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Fácil instalação e manutenção</strong> – Sem complicações, sem sujeira e com uma durabilidade excepcional.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-rectangle-vertical-history fa-stack-1x fa-inverse"></i>
                </span>

              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Versatilidade incomparável</strong> – Ideal para criar espaços aconchegantes e sofisticados.</p>
            </div>

            <div class="col-12">
              <a href="/produtos/#pvc-fosco-rustico" class="y-buttons-btn btn btn-primary px-5">Conheça nossos produtos</a>
            </div>

          </div>

        </div>

        <div class="col-12 col-lg-5 text-center d-flex align-items-center ps-lg-5 order-lg-2 order-1">

          <picture class="mb-4 mb-lg-0 rounded-3">
            <source media="(max-width: 992px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-fosco-img-04.jpg">
            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-fosco-img-01.jpg">
            <source media="(min-width: 1200px) and (max-width: 1399px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-fosco-img-02.jpg">
            <source media="(min-width: 1400px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-fosco-img-03.jpg">
            <img src="/wp-content/themes/yeti-bootstrap/assets/img/bloco-fosco-img-03.jpg" alt="" class="img-fluid rounded-4">
          </picture>

        </div>
      </div>

    </div>
  </section>
  <!-- ./content-22 -->

  <!-- .content-22 -->
  <section class="content-22 bg-gradient-light-white">
    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-4 offset-0 offset-lg-1 text-center d-flex align-items-center">

          <picture class="mb-4 mb-lg-0 rounded-3">
            <source media="(max-width: 992px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-ripado-img-04.jpg">
            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-ripado-img-01.jpg">
            <source media="(min-width: 1200px) and (max-width: 1399px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-ripado-img-02.jpg">
            <source media="(min-width: 1400px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-ripado-img-03.jpg">
            <img src="/wp-content/themes/yeti-bootstrap/assets/img/bloco-ripado-img-03.jpg" alt="" class="img-fluid rounded-4">
          </picture>

        </div>
        <div class="col-12 col-lg-6 text-center text-lg-start ps-lg-5 px-3">
          <h2 class="fw-light mb-3">Painel Ripado BDA – Sofisticação e Praticidade para Seu Ambiente</h2>
          <p class="lh-sm lead m-0">Transforme seus espaços com os <strong class="text-red fw-bold">Painéis Ripados BDA</strong>, a escolha perfeita para quem busca design moderno, alta durabilidade e fácil aplicação. Fabricados em poliestireno extrudido de alta densidade (PS), nossos painéis possuem superfície lisa para um acabamento impecável e parte posterior nervurada, garantindo melhor aderência da cola e fixação segura.</p>


          <div class="row mt-5">
            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-thumbs-up fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Instalação rápida e prática</strong> – Renove seus ambientes sem sujeira e sem complicações.</p>
            </div>


            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-raindrops fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Resistência superior</strong> – Ideal para áreas internas, sem deformações ou danos ao longo do tempo.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-trophy-star fa-stack-1x fa-inverse"></i>
                </span>
              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Acabamento sofisticado</strong> – Perfeito para valorizar qualquer projeto, do clássico ao contemporâneo.</p>
            </div>

            <div class="col-12 col-lg-6 mb-4 pe-0 pe-lg-4">
              <p class="mb-3 text-primary">
                <span class="fa-stack fa-2x text-red">
                  <i class="fa-solid fa-circle fa-stack-2x"></i>
                  <i class="fa-light fa-wrench-simple fa-stack-1x fa-inverse"></i>
                </span>

              </p>
              <p class="lh-sm"><strong class="text-red fw-bold">Manutenção fácil</strong> – Material leve, lavável e de longa vida útil.</p>
            </div>

            <div class="col-12">
              <a href="/produtos/#pvc-alto-brilho" class="y-buttons-btn btn btn-primary px-5">Conheça nossos produtos</a>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- ./content-22 -->


  <!-- .content-29 -->
  <section class="content-29" id="empresa">
    <div class="container">
      <div class="row">
        <div class="col-12 position-relative">
          <img src="/wp-content/themes/yeti-bootstrap/assets/img/empresa-ornamento.png" class="empresa-ornamento">
          <div class="card border-0 rounded-3 p-0  overflow-hidden">
            <div class="row g-0">
              <div class="col-lg-5 col-12">
                <div class="card-body p-5">
                  <div class="text-center text-lg-start text-white">

                    <h3 class="text-white mb-3 fw-light">Empresa com sede em Belém​​​​</h3>
                    <p class="mb-0">Somos sediados em Belém do Pará que se destaca como um exemplo de sucesso ao integrar práticas comerciais inovadoras com um compromisso inabalável com a sustentabilidade e responsabilidade social.</p>
                    <a href="#" class="btn btn-light px-5 mt-5 bg-white">Saiba mais</a>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-12 d-none d-lg-block content-29-bg" style="background-image: url('/wp-content/themes/yeti-bootstrap/assets/img/empresa-img.jpg');">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ./content-29 -->


  <section class="clients-7 carousel-3 nav-lateral pt-0">
    <div class='container px-4'>
      <div class="row d-flex align-items-center">
        <div class="col-lg-3 col-12">
          <div class="y-block mb-5 mb-lg-0">
            <h3 class="mb-4 fw-light text-center text-lg-start">O que nossos clientes falam sobre nossos produtos</h3>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-1 offset-0 col-12">

          <div class="itens owl-carousel row">

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

              <div class="card shadow-sm" style="min-height: 270px;">
                <div class="card-body">
                  <p class="card-text"><i class="fa-solid fa-quote-left me-1 opacity-50"></i><?php echo $post->post_content; ?><i class="fa-solid fa-quote-right ms-1 opacity-50"></i></p>
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
                      <p class="mb-0 fw-bold text-primary"><?php echo $post->post_title; ?></p>
                    </div>
                  </div>
                </div>
              </div>

            <?php
              $i++;
            endforeach;
            ?>



          </div>

        </div>
      </div>

    </div>
  </section>


  <section class="clients-3 bg-light py-5">
    <div class='container px-4'>
      <div class="row d-flex align-items-center">
        <div class="col-lg-3 col-12">
          <div class="y-block mb-5 mb-lg-0">
            <h3 class="mb-0 fw-light text-center text-lg-start">Nossos parceiros</h3>
          </div>
        </div>
        <div class="col-lg-9 col-12">
          <div class="row gy-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="text-center bg-light rounded-3 p-0">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/parceiro-01.png?v2" class="img-fluid">
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="text-center bg-light rounded-3 p-0">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/parceiro-02.png?v2" class="img-fluid">
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="text-center bg-light rounded-3 p-0">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/parceiro-03.png?v2" class="img-fluid">
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
              <div class="text-center bg-light rounded-3 p-0">
                <img src="/wp-content/themes/yeti-bootstrap/assets/img/parceiro-04.png?v2" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

  <!-- .content-22 -->
  <section class="content-22 bg-white">
    <div class="container">

      <div class="row">
        <div class="col-12 col-lg-4 offset-0 offset-lg-1 text-center d-flex align-items-center">

          <picture class="mb-4 mb-lg-0 rounded-3">
            <source media="(max-width: 992px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-bda-img-04.jpg">
            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-bda-img-01.jpg">
            <source media="(min-width: 1200px) and (max-width: 1399px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-bda-img-02.jpg">
            <source media="(min-width: 1400px)" srcset="/wp-content/themes/yeti-bootstrap/assets/img/bloco-bda-img-03.jpg">
            <img src="/wp-content/themes/yeti-bootstrap/assets/img/bloco-bda-img-03.jpg" alt="" class="img-fluid rounded-4">
          </picture>

        </div>
        <div class="col-12 col-lg-6 text-center text-lg-start ps-lg-5 px-3">
          <h2 class="fw-light mb-3">Seja um <strong class="text-red fw-bold">Representante BBA</strong><br>e Cresça Conosco!</h2>
          <p class="lh-sm lead m-0 mb-4">A BDA quer estar presente em todos os cantos do Brasil, levando qualidade, inovação e sofisticação para cada projeto! Estamos expandindo e buscamos parceiros comprometidos para representar nossa linha de painéis decorativos em WPC e PVC.</p>
          <p class="lh-sm">Se você deseja fazer parte de uma marca que une tecnologia, design e sustentabilidade, essa é a sua oportunidade! Como representante BDA, você terá acesso a produtos diferenciados, suporte exclusivo e condições especiais para crescer no mercado.</p>
          <p class="lh-sm">Venha construir esse sucesso conosco! Preencha o formulário e seja um representante oficial da BDA em sua região.</p>

          <div class="row mt-5">
            <div class="col-12">
              <a href="https://wa.me/559193384268?text=Ol%C3%A1!%20Tenho%20interesse%20em%20me%20tornar%20um%20representante%20DBA." class="y-buttons-btn btn btn-primary px-5">Fale conosco</a>
            </div>
          </div>
        </div>

      </div>
  </section>
  <!-- ./content-22 -->


</main>

<?php get_footer(); ?>