<?php
yb_check_loged('representante');
?>
<?php
acf_form_head();
/**
 * Template Name: Usuário > Criar conteúdo
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

                <?php get_template_part('usuario-menu'); ?>

              </div>
              <div class="col-12 col-lg-9">
                <h2 class="mb-3"><i class="fa-light fa-file-circle-plus me-1 text-primary"></i> Criar novo pedido</h2>
                <div class="bg-white shadow rounded-3 p-4 position-relative">

                  <?php
                  acf_form(
                    array(
                      'post_id'       => 'new_post',
                      'post_title'    => false,
                      'post_content'  => false,
                      'updated_message' => __('<div class="alert alert-success fw-bolder alert-dismissible fade show" role="alert"><i class="fa-light fa-circle-check"></i> Pedido enviado com sucesso!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button></div>', 'acf'),
                      'new_post'      => array(
                        'post_type'     => 'pedido',
                        'post_status'   => 'publish'
                      ),
                      'submit_value'  => 'Enviar pedido'
                    )
                  );
                  ?>

                  <div class="pedido-total h4 text-end pe-3"><span style="width: 50px; display: inline-block;" class="d-none"><i class="d-none fa-solid fa-spinner fa-spin-pulse me-4"></i></span> TOTAL: <span class="pedido-total-valor">0,00</span></div>
                  <script>

                  </script>

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