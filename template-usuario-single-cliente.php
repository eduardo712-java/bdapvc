<?php
yb_check_loged('representante');
?>
<?php
acf_form_head();
/**
 * Template Name: Usuário > Gerenciar cliente
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
                <h2 class="mb-3"><i class="fa-light fa-user-pen me-1 text-primary"></i> Detalhes do cliente</h2>
                <div class="bg-white shadow rounded-3 p-4">

                  <?php
                  // Recupera os dados do post
                  $post = get_post(htmlspecialchars($_GET["ID"]));

                  acf_form(
                    array(
                      'post_id'       => $post,
                      'post_title'    => true,
                      'post_content'  => false,
                      'updated_message' => __("Cliente atualizado!", 'acf'),
                      'new_post'      => array(
                        'post_type'     => 'cliente',
                        'post_status'   => 'publish'
                      ),
                      'submit_value'  => 'Editar cliente'
                    )
                  );
                  ?>

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