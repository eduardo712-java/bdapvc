<?php

/**
 * Template Name: Usuário > Registro sucesso
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
                      <h2 class="text-center my-4"><i class="fa-light fa-square-user fs-3 me-1 text-primary"></i> Conta criada!</h2>
                      <div class="card-body">
                        <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
                          <div>Sua conta foi criada <strong class="fw-bold">com sucesso!</strong></div>
                        </div>
                        <p class="text-center small">
                          <a href="/login/" class="btn btn-primary btn-lg w-100">Acessar sua conta!</a>
                        </p>
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