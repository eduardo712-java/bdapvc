<?php

/**
 * Template Name: Contato
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
            <h3 class="text-white fw-light text-center h5">Entre em contato através dos nossos canais de atendimento</h3>
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
      <section class="contact-2">
        <div class="container">
          <div class="row position-relative">
            <div class="col-12">
              <div class="bg-white position-absolute rounded-4 box d-flex flex-row align-items-center">
                <div class="m-5 my-2 small">
                  <h4 class="mt-0 fw-light">Contato</h4>
                  <div><i class="fa-light text-red fa-location-arrow me-1 fs-5"></i> Tv. Primeira. Amazonex, 22 - Maracacuera / CEP 66815-200</div>
                  <div><i class="fa-brands text-red fa-whatsapp me-1 fs-5"></i> <strong class="fw-bolder">Celular / WhatsApp:</strong> <a href="https://wa.me/559193384268?text=Ol%C3%A1!%20Tenho%20interesse%20nos%20produtos." class="text-decoration-none" target="_blank" rel="noreferrer" aria-label="WhatsApp">(91) 9338-4268</a></div>
                  <div><i class="fa-light text-red fa-phone me-1 fs-5"></i> <strong class="fw-bolder">Fone:</strong> (91) 4104-1438</div>
                  <div><i class="fa-light text-red fa-envelope me-1 fs-5"></i> <strong class="fw-bolder">Email:</strong> comercial@bezerradealencar.com.br</div>
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238.640767789419!2d-48.45878135307777!3d-1.291831018630414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a46763458d4191%3A0xd48d2eae48a5f0f7!2sBezerra%20de%20Alencar%20-%20Importadora%20e%20Distribuidora%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1732559575244!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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