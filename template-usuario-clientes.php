<?php
yb_check_loged('representante');
?>
<?php

/**
 * Template Name: Usuário > Clientes
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
              <h2 class="mb-3"><i class="fa-light fa-users me-1 text-primary"></i> Lista de clientes</h2>

              <div class="bg-white shadow rounded-3 p-4">

                <?php
                // Start the loop.
                while (have_posts()) : the_post();
                ?>
                  <?php
                  // Recupera as notícias com os argumentos básicos
                  if (get_query_var('paged')) {
                    $paged = get_query_var('paged');
                  } elseif (get_query_var('page')) {
                    $paged = get_query_var('page');
                  } else {
                    $paged = 1;
                  }

                  // Recupera o username do usuário logado
                  $current_user = wp_get_current_user();

                  $posts = yb_get_posts_cpt(
                    'cliente', // cpt
                    -1, // limite
                    '', // categoria
                    '', // id da categoria
                    '', // ordem
                    'DESC', // ordem por - DESc ou ASC
                    '', // meta
                    '', // meta_value
                    $current_user->user_nicename, // autor
                    '', // include - array de ID's
                    '', // exclude - array de ID's
                    $paged, // paged
                    '', // offset
                    1, //  ignore_sticky - 0 ou 1
                    /*
                    array(
                      'taxonomy' => '', // nome da taxonomia personalizada
                      'field'    => '', // term_id, slug ou name (Define por o que você irá pesquisar usando o termo abaixo)    
                      'terms'    => '', // informe o termo ou ID
                    )
                    */
                  );
                  ?>
                  <?php
                  if ($posts) {
                  ?>
                    <table class="table table-hover small">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Razão Social</th>
                          <th scope="col">Comprador</th>
                          <th scope="col">E-mail</th>
                          <th scope="col" class="text-end">Data</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $i = 0;
                        foreach ($posts as $post) :
                          $data = get_the_date('d/m/Y', $post->ID);
                          $url = get_permalink($post->ID);
                          $cliente_comprador = get_field('cliente_comprador', $post->ID);
                          $cliente_email = get_field('cliente_email', $post->ID);
   
                        ?>

                          <tr class="position-relative small">
                            <td><?php echo $post->ID; ?></td>
                            <td><a href="/usuario-single-cliente/?ID=<?php echo $post->ID; ?>" class="stretched-link text-decoration-none"><?php echo $post->post_title; ?></a></td>
                            <td><?php echo $cliente_comprador; ?></td>
                            <td><?php echo $cliente_email; ?></td>
                            <td class="text-end"><?php echo $data; ?></td>
                          </tr>
                        <?php
                          $i++;
                        endforeach;
                        ?>
                      </tbody>
                    </table>

                    <?php
                    yeti_bootstrap_pagination();
                    // Reset Query
                    wp_reset_query();
                    ?>

                  <?php
                  } else {
                  ?>
                    <h3 class="h4 mb-0 text-primary fw-light">Você ainda não cadastrou nenhum cliente.</h3>
                  <?php
                  }
                  ?>

                <?php endwhile; ?>

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