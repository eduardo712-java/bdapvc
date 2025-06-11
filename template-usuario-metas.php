<?php
yb_check_loged('representante');
?>
<?php

/**
 * Template Name: Usuário > Metas e Comissões
 */
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <!-- gallery-wordpress -->
    <section class="bg-light">
      <article>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-3">

              <?php get_template_part('usuario-menu'); ?>

            </div>
            <div class="col-12 col-lg-9">
              <h2 class="mb-3"><i class="fa-light fa-files me-1 text-primary"></i> Metas e Comissões</h2>

              <div class="bg-white shadow rounded-3 p-4">

                  <?php
                   get_current_user_id();
                  $representante_id =  get_field('representante_id', 'user_'.get_current_user_id());
                  //$representante_metas_comissoes = get_field('representante_metas_comissoes', $representante_id);
                  the_field('representante_metas_comissoes', $representante_id);
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
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->


<?php get_footer(); ?>