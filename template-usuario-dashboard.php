<?php
yb_check_loged('representante');
?>
<?php

/**
 * Template Name: Usuário > Dashboard
 */
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <!-- gallery-wordpress -->
      <section class="bg-light">
        <article>
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-3">

                <?php get_template_part( 'usuario-menu'); ?>

              </div>
              <div class="col-12 col-lg-9">
                <h2 class="mb-3"><i class="fa-light fa-grid-horizontal me-1 text-primary"></i> Dashboard</h2>
                <div class="bg-white shadow rounded-3 p-4" style="height: 800px;">
                  <h3 class="h4 mb-4 text-primary fw-light">Título</h3>
                  <p>OPA</p>
                </div>
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