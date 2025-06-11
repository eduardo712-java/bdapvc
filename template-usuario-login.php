<?php
if (is_user_logged_in()) {
  header("Location: " . get_site_url() . "/usuario-content");
}
/**
 * Template Name: Usuário > Login
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
                      <h2 class="text-center my-4"><i class="fa-light fa-fingerprint fs-3 me-1 text-primary"></i> Faça seu login</h2>
                      <p class="text-center small">Não tem uma conta? <a href="/usuario-register/">Registre-se!</a></p>
                      <div class="card-body">
                        <?php
                        echo do_shortcode('[wppb-login redirect_url="' . home_url() . '/usuario-content/"  lostpassword_url="' . home_url() . '/usuario-recover-password"]');
                        ?>

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