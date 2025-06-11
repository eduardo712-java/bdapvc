<?php get_header(); ?>

  <div class="container-full">
    <main class="main" role="main">
      
    <?php 
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
    
      <!-- header-1 -->
      <section class="header-1">
        <div class="container-fluid">
          <div class="y-block">
            <h1 class="y-header-title"><?php the_title(); ?></h1>
            <?php
            // Verifica se existe um subtítulo para a página
            $subtitulo = get_field("pagina_subtitulo");
            if ($subtitulo) {
            ?>
            <h2 class="y-header-subtitle"><?php echo $subtitulo; ?></h2>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <section>
        <article>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <?php the_content(); ?>
              </div>
              <!-- /.col-sm-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </article>
        <!-- /.article -->
      </section>
      <!-- /.section -->
    <?php endwhile; ?>
    </main>
    <!-- /.main -->
  </div>
  <!-- /.container-full -->
      
<?php get_footer(); ?>