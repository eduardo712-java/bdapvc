<?php

/**
 * Template Name: Aguarde
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
            <h1 class="fw-light text-white text-center mb-1">Conteúdo indisponível temporariamente</h1>
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


      <!-- contact-2 -->
      <section class="">
        <div class="container">
          <div class="row position-relative">
            <div class="col-12">
              <div class="bg-light rounded-4 p-4">
                <div class="m-5 my-2 text-center">
                  <h4 class="mt-0 fw-light">Estamos realizando uma manutenção temporária.</h4>
                  <p class="mt-0 fw-light">Em breve este conteúdo estará de volta.</p>

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