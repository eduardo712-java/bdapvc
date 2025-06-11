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
        //$bg = 'style="background-image: url(' . get_the_post_thumbnail_url(get_the_ID(), 'large') . ' )"';
        $bg = 'style="background-image: url(/wp-content/themes/yeti-bootstrap/assets/img/produto-img-01.jpg)"';
      }
      ?>
      <!-- header-1 -->
      <section class="header-1" <?php echo $bg; ?>>
        <div class="container-fluid">
          <div class="y-block">
            <h4 class="h4 mb-2 fw-light text-white text-center">Produtos</h4>
            <h3 class="h3 fw-light text-white text-center mb-0"><?php the_title(); ?></h3>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- Content -->
      <section class="pt-0">
        <article>
          <div class="container">
            <div class="row">
              <!-- Content -->
              <div class="col-12 mb-4 mt-4">

                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                  <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item small"><i class="fa-light fa-house me-1"></i> <a href="/">Home</a></li>
                    <li class="breadcrumb-item small"><a href="/produtos/">Produtos</a></li>
                    <li class="breadcrumb-item small active" aria-current="page"><?php the_title(); ?></li>
                  </ol>
                </nav>

                <div class="row mt-5">
                  <div class="col-12 col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="<?php echo get_field('produto_foto_principal'); ?>" class="img-fluid w-100">
                  </div>
                  <div class="col-12 col-lg-8 ps-0 ps-lg-5">
                    <h1 class="display-6 text-red"><?php the_title(); ?></h1>
                    <?php
                    $categoria = get_the_terms(get_the_ID(), 'categoria');
                    //if($categoria[0]->term_id == 7) { // Alto Brilho
                    if (get_the_ID() == 295) { // Alto Brilho
                      //$desc = 'O painel decorativo em <strong class="fw-bold text-red">Alto Brilho BDA</strong> traz uma estrutura totalmente única e diversificada ao mercado, com 34 colmeias e 5 camadas de verniz, a BDA traz o mais resistente e duradouro painel paratetos e paredes do mercado.';
                      $desc = 'Transforme seus ambientes com um efeito visual surpreendente! O Painel Alto Brilho Furta-Cor BDA traz uma estrutura única e inovadora, combinando sofisticação, resistência e um brilho iridescente que muda de tonalidade conforme a luz.<br><br><strong class="fw-bold text-red">Efeito furta-cor exclusivo</strong> – Um acabamento dinâmico que reflete diferentes cores, criando um visual moderno e impactante. ';
                      //} else if($categoria[0]->term_id == 8) { // Foaco
                    } else if (get_the_ID() == 294) { // Foaco
                      //$desc = 'O painel decorativo <strong class="fw-bold text-red">Fosco Rústico BDA</strong> traz uma estrutura totalmente única e diversificada ao mercado, com 38 colmeias e superfície texturizada a BDA traz o mais resistente e duradouro painel para tetos e paredes do mercado.';
                      $desc = 'Elegância atemporal para qualquer ambiente! O Painel Alto Brilho Branco Style BDA une modernidade, sofisticação e resistência, garantindo um acabamento impecável para tetos e paredes.<br><br><strong class="fw-bold text-red">Tonalidade branca pura e versátil</strong> – Perfeito para composições modernas, clássicas e minimalistas.';
                      //} else if($categoria[0]->term_id == 9) { // Painel Ripado
                    } else if (get_the_ID() == 293) { // 
                      //$desc = 'Painel de parede em poliestireno extrudido de alta densidade PS com superfície lisa e parte posterior nervurada para melhor aderência da cola. Altamente resistente e indicado para áreas internas - fabricado com polímeros de alta densidade.';
                      $desc = 'Transforme seus espaços com o Alto Brilho Verde Losango BDA, um painel que combina sofisticação, resistência e um design inovador para tetos e paredes.<br><br> <strong class="fw-bold text-red">Tonalidade Verde Losango exclusiva</strong> – Elegância com um toque moderno e vibrante.';
                    }
                    ?>
                    <p class="mb-0"><?php echo $desc; ?></p>

                    <div class="mt-5">
                      <h5 class="h5 text-red fw-bolder">Descrição</h5>
                      <p class="mb-2"><i class="fa-light fa-arrows-left-right me-1 text-red"></i> <strong>Comprimento</strong>: <?php echo get_field('produto_comprimento', get_the_ID()); ?></p>
                      <p class="mb-2"><i class="fa-light fa-arrows-up-down me-1 text-red"></i> <strong>Largura</strong>: <?php echo get_field('produto_largura', get_the_ID()); ?></p>
                      <p class="mb-2"><i class="fa-light fa-arrows-to-line me-1 text-red"></i> <strong>Espessura</strong>: <?php echo get_field('produto_espessura', get_the_ID()); ?></p>
                      <p class="mb-2"><i class="fa-light fa-arrows-maximize me-1 text-red "></i> <strong>Metragem por pacote</strong>: <?php echo get_field('produto_metragem_pct', get_the_ID()); ?>m</p>
                    </div>
                    <div class="mt-5">
                      <h5 class="h5 text-red fw-bolder">Galeria de fotos</h5>
                      <div class="y-gallery">

                        <?php
                        $images = get_field('produto_fotos', get_the_ID());
                        if ($images): ?>
                          <?php foreach ($images as $image): ?>
                            <a href="<?php echo esc_url($image['sizes']['large']); ?>"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"></a>
                          <?php endforeach; ?>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>

                </div>




              </div>
              <!-- /.Content -->

            <?php endwhile; ?>

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