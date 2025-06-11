<?php

/**
 * Template Name: Usuário > Recuperar senha
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
              <div class="col-12">
                <div class="row mt-5">
                  <div class="col-12 col-lg-4 offset-0 offset-lg-4">

                    <div class="card shadow p-3 mb-5 rounded-3 border-0" id="user-form">
                      <h2 class="text-center my-4"><i class="fa-light fa-key fs-3 me-1 text-primary"></i> Recuperar senha</h2>
                      <div class="card-body">
                        <?php echo do_shortcode(' [wppb-recover-password] '); ?>
                      </div>
                    </div>

                  </div>
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