<?php

/**
 * Template Name: Recursos > Ajax
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

      <!-- gallery-wordpress -->
      <section>
        <article>
          <div class="container">
            <div class="row">
              <div class="col-6 offset-3">
                <div class="y-block">
                  <h2 class="y-header-title text-left">Exemplo de consulta com Ajax</h2>
                </div>

                <!-- Modelo de formulário -->
                <form class="" id="ajax-example-form" method="post" action="#">
                  <div class="form-group">
                    <label for="ajax-example-field">Informe o <strong>ID de uma página</strong> para retornar seu título:</label>
                    <input type="number" class="form-control" name="ajax-example-field" id="ajax-example-field" aria-describedby="ajax-example-help" value="3">
                    <small id="ajax-example-help" class="form-text text-muted">Sugestões de consulta: ID's 2 & 3.</small>
                  </div>
                  <div class="alert alert-success d-flex align-items-center d-none" role="alert">
                    <div id="ajax-example-msg">Aguardando...</div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-buscar mt-2" id="btn-ajax">Buscar título</button>

                </form>



              </div>
              <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </article>
        <!-- /.article -->
      </section>
      <!-- ./gallery-wordpress -->


    <?php endwhile; ?>
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->


<?php get_footer(); ?>