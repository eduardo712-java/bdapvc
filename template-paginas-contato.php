<?php
/**
 * Template Name: Páginas > Contatos
 */
get_header();
?>

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
            <h2 class="y-header-title"><?php the_title(); ?></h2>
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

      <!-- contact-1 -->
      <section class="contact-1">
        <div class="container">
          <div class="y-header">
            <h2 class="y-header-title">FALE CONOSCO</h2>
            <p class="y-header-text">Etiam posuere ullamcorper finibus. Aenean laoreet ligula feugiat laoreet accumsan.</p>
          </div>
          <div class="row">
            <div class="col-12 col-lg-7 text-center text-lg-start mt-5 mt-lg-0">
              <h3><i class="fa fa-envelope-o"></i> Envie sua mensagem</h3>
              <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato 1"]'); ?>          
            </div>
            <div class="col-12 col-lg-4 offset-lg-1 offset-0 text-center text-lg-start">
              <h3>Nosso endereço</h3>
              <p class="y-address">
                Rua XYZ, nº 123<br>
                Cidade - Estado - Brasil<br>
                CEP: 66060-000
              </p>

              <h3>Telefones</h3>
              <p class="y-phones">
                (91) 3232-3232<br>
                (91) 3232-3233
              </p>

              <h3>Siga-nos</h3>
              <p class="y-social">
                <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="#" title="Youtube"><i class="fab fa-youtube-square fa-2x"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" title="Linkedin"><i class="fab fa-linkedin-square fa-2x"></i></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- map-1 -->
      <section class="map-1">
        <div class="container">
          <div class="y-header">
            <h2 class="y-header-title">ONDE NOS ENCONTRAR</h2>
            <p class="y-header-text">Etiam finibus auctor magna quis porta. Vivamus id ornare tellus. Nullam vitae metus felis.</p>
          </div>
        </div>

        <br class="y-clear">
      </section>


    <?php endwhile; ?>
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->


<?php get_footer(); ?>