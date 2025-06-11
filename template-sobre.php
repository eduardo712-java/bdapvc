<?php

/**
 * Template Name: Sobre
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
            <h3 class="text-white fw-light text-center h5">Obstinada em qualidade e excelência no atendimento</h3>
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

      <!-- .content-30 -->
      <section class="content-30 pb-0">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-12 col-xl-6">
              <p class="mb-3 fw-light"><strong>Desde a sua fundação em 06/09/2013</strong>, nossa marca tem se destacado como referência no mercado de painéis de PVC em alto brilho, proporcionando soluções versáteis e elegantes para a decoração de ambientes.</p>
              <p class="fw-light h5 mb-3"><strong class="text-red">Nosso compromisso com a excelência e a inovação tem sido a base para conquistar a confiança dos nossos clientes.</strong></p>
              <p>Os painéis de PVC são verdadeiras estrelas do nosso portfólio, sendo perfeitamente adequados tanto para o teto quanto para as paredes dos mais diversos espaços. Com seu acabamento em alto brilho, eles conferem um toque moderno e sofisticado aos ambientes, transformando espaços com elegância e praticidade.</p>
              <p>Um dos nossos produtos mais valorizados e que destaca nossa ligação com a preservação ambiental é a utilização de estampas de madeiras amazônicas. Essas estampas reproduzem com fidelidade a beleza das madeiras da região, agregando um charme natural aos ambientes sem comprometer a sustentabilidade.</p>
              <p>Ao escolher nossos painéis de PVC, nossos clientes usufruem de inúmeros benefícios tanto para o seu conforto quanto para o meio ambiente. Ao substituir forros e painéis de madeira, eles contribuem para a preservação das florestas e redução do desmatamento. Além disso, os painéis de PVC são de fácil limpeza, resistentes à umidade e ao mofo, o que prolonga sua vida útil e economiza recursos ao longo do tempo.</p>
              <p class="mb-0">Estamos comprometidos em proporcionar aos nossos consumidores um produto de qualidade e durabilidade, aliado à sustentabilidade e consciência ambiental. Através da combinação entre estampas de madeiras amazônicas e a versatilidade do PVC, oferecemos uma alternativa moderna e ecologicamente correta para tornar seus ambientes ainda mais encantadores. Junte-se a nós nesta jornada de beleza, funcionalidade e respeito à natureza! Transforme seus espaços com nossos painéis de PVC em alto brilho e descubra um novo conceito de decoração para o seu mundo.</p>
            </div>
            <div class="col-12 col-lg-12 col-xl-6">
              <div class="row">
                <div class="col-12 col-md-6 text-center">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-img-01.jpg" class="img-fluid rounded-3 mt-4">
                </div>
                <div class="col-12 col-md-6 text-center">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-img-02.jpg" class="img-fluid rounded-3 mt-2 mt-lg-0">
                </div>
                <div class="col-12 col-lg-10 offset-0 offset-lg-1 text-center">
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-img-03.jpg" class="img-fluid rounded-3 mt-2 mt-md-4">
                </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <p>Estamos comprometidos em proporcionar aos nossos consumidores um produto de qualidade e durabilidade, aliado à sustentabilidade e consciência ambiental. Através da combinação entre estampas de madeiras amazônicas e a versatilidade do PVC, oferecemos uma alternativa moderna e ecologicamente correta para tornar seus ambientes ainda mais encantadores. Junte-se a nós nesta jornada de beleza, funcionalidade e respeito à natureza! Transforme seus espaços com nossos painéis de PVC em alto brilho e descubra um novo conceito de decoração para o seu mundo.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ./content-30 -->


      <!-- .content-28 -->
      <section class="content-28 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card bg-orange border-0 rounded-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <div class="card-body p-5">

                  <div class="row">
                    <div class="col-12 col-lg-4 text-center">
                      <img src="/wp-content/themes/yeti-bootstrap/assets/img/ceo-aires.png?v2" class="img-fluid mb-4 mb-lg-0">
                    </div>
                    <div class="col-12 col-lg-8 d-flex align-items-center">
                      <div class="text-center text-lg-start">
                        <h4 class="text-white mb-3 fw-light">Conheça nosso COO</h4>
                        <p class="text-white"><strong>Aires Alencar</strong> é um executivo experiente e dinâmico, ocupando com sucesso a posição de Chief Operating Officer (COO) em uma empresa líder no seu setor. Com uma carreira marcada por conquistas notáveis, Alencar é reconhecido por suas habilidades excepcionais de liderança e gestão operacional.</p>
                        <p class="text-white mb-0">Aires Alencar é orientado por resultados, estabelecendo metas desafiadoras e incentivando a equipe a alcançar e superar esses objetivos. Seu comprometimento com a excelência impulsiona o desempenho geral da organização.</p>
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


      <!-- team-2 -->
      <section class="team-2">
        <div class="container">

          <div class="y-header text-center">
            <h2 class="fw-light">Conheça nossa equipe</h2>
            <p class="y-header-text">Nossa equipe é formada por profissionais que tem como missão superar as expectativas e satisfação<br> de nossos clientes, buscando entender as necessidades para transformá-las em soluções robustas</p>
          </div>

          <div class="row justify-content-center">

            <div class="co-12 col-sm-6 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center px-5 px-lg-3 px-xxl-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100" >
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-team-01.jpg?v2" alt="" class="img-fluid rounded-3"/>
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-2 fw-light mb-0 text-red">Akio Alencar</h5>
                    <h6 class="mb-3">Chief Financial Officer</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="co-12 col-sm-6 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center px-5 px-lg-3 px-xxl-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="150" >
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-team-02.jpg?v2" alt="" class="img-fluid rounded-3" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-2 fw-light mb-0 text-red">Érica Talita</h5>
                    <h6 class="mb-3">Administrator</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="co-12 col-sm-6 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center px-5 px-lg-3 px-xxl-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="200" >
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-team-03.jpg?v2" alt="" class="img-fluid rounded-3" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-2 fw-light mb-0 text-red">Matheus</h5>
                    <h6 class="mb-3">Chief Marketing Officer</h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="co-12 col-sm-6 col-lg-3 mb-4">
              <div class="row">
                <div class="col-12 text-center px-5 px-lg-3 px-xxl-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="250" >
                  <img src="/wp-content/themes/yeti-bootstrap/assets/img/sobre-team-04.jpg?v2" alt="" class="img-fluid rounded-3" />
                </div>
                <div class="col-md-12 text-center">
                  <div class="pt-2">
                    <h5 class="mt-2 fw-light mb-0 text-red">Geovane Nunes​</h5>
                    <h6 class="mb-3">Expedition</h6>
                  </div>
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




<?php endwhile; ?>

</main>
<!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>