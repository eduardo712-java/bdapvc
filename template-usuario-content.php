<?php
yb_check_loged('representante');
?>
<?php

/**
 * Template Name: Usuário > Content
 */
get_header();

$titulo = "Lista de pedidos";
$meta = '';
$meta_value = '';

// Verifica se algum status foi informado
if (isset($_GET["status"])) {
  $meta = 'pedido_status';
  $meta_value = $_GET["status"];

  switch ($_GET["status"]) {
    case 1:
      $titulo = "Lista de pedidos recebidos";
      break;
    case 2:
      $titulo = "Lista de pedidos em expedição";
      break;
    case 3:
      $titulo = "Lista de pedidos enviados";
      break;
    case 4:
      $titulo = "Lista de pedidos em entregues";
      break;
  }
}

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
              <h2 class="mb-3"><i class="fa-light fa-files me-1 text-primary"></i> <?php echo $titulo; ?></h2>

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
                    'pedido', // cpt
                    -1, // limite
                    '', // categoria
                    '', // id da categoria
                    '', // ordem
                    'DESC', // ordem por - DESc ou ASC
                    $meta, // meta
                    $meta_value, // meta_value
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
                          <th scope="col">Nº</th>
                          <th scope="col">Razão Social</th>
                          <th scope="col">Vendedor</th>
                          <th scope="col">Valor</th>
                          <th scope="col">Data</th>
                          <th scope="col" style="width: 105px;">Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $i = 0;
                        foreach ($posts as $post) :
                          $data = get_the_date('d/m/Y', $post->ID);
                          $url = get_permalink($post->ID);
                          $pedido_vendedor = get_field('pedido_vendedor', $post->ID);
                          $pedido_status = get_field('pedido_status', $post->ID);
                          $pedido_valor_total = number_format(get_field('pedido_valor_total', $post->ID), 2, ",", ".");

                          // while (have_rows('pedido_itens')) : the_row();

                          //   // Load sub field value.
                          //   $pedido_item_valor = get_sub_field('pedido_item_valor');
                          //   $pedido_item_valor_total = $pedido_item_qtd * $pedido_item_valor;
                          //   $pedido_valor_total = $pedido_valor_total + $pedido_item_valor_total;
                          //   $pedido_item_valor = number_format($pedido_item_valor, 2, ",", ".");
                          //   $pedido_item_valor_total = number_format($pedido_item_valor_total, 2, ",", ".");

                          // // End loop.
                          // endwhile;
                        ?>

                          <tr class="position-relative small">
                            <td><?php echo $post->ID; ?></td>
                            <td><a href="/usuario-single-content/?ID=<?php echo $post->ID; ?>" class="stretched-link2 text-decoration-none"><?php echo $post->post_title; ?></a></td>
                            <td><?php echo $pedido_vendedor; ?></td>
                            <td><?php echo $pedido_valor_total; ?></td>
                            <td><?php echo $data; ?></td>
                            <td><?php echo $pedido_status['label']; ?></td>
                            <td><a href="<?php echo $url; ?>" target="_blank"><i class="fa-light fa-print"></i></a></td>
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
                    <h3 class="h4 mb-0 text-primary fw-light">Você ainda não fez nenhum pedido.</h3>
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