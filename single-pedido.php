<?php
yb_check_loged('representante');
?>
<?php

/**
 * Template Name: Usuário > Single Content
 */
get_header('clean');
?>

<div class="container-fluid">
  <main class="main" role="main">

    <div class="text-end d-print-none p-2">
      <button onclick="window.print();" class="btn btn-primary btn-sm"><i class="fa-light fa-print"></i> Imprimir</button>
    </div>

    <!-- gallery-wordpress -->
    <section class="p-0">
      <article>
        <div class="container-fluid p-2">
          <div class="row">
            <div class="col-12 col-lg-3 d-none">

              <?php //get_template_part('usuario-menu'); 
              ?>

            </div>
            <div class="col-12 col-lg-12">
              <img src="/wp-content/themes/yeti-bootstrap/assets/img/logo_laranja2.png" class="float-end">
              <h2 class="mb-3"><i class="fa-light fa-memo-pad me-1 text-primary"></i> Detalhes do pedido</h2>

              <div class="p-4">

                <?php
                // Recupera os dados do post
                $post = get_post(htmlspecialchars($_GET["ID"]));

                // Recupera o username do usuário logado
                $current_user = wp_get_current_user();
                ?>

                <?php
                if (($post) and (($post->post_author == $current_user->ID) or (current_user_can('edit_dashboard')))) {

                  // Dados do pedido
                  //$pedido_codigo = get_field("pedido_codigo", $post->ID);
                  $representante_id = get_field("representante_id", "user_" . $post->post_author);
                  $representante_nome = get_the_title($representante_id);
                  $representante_razao = get_field('representante_razao_social', $representante_id);
                  $pedido_escritorio_numero = get_field("pedido_escritorio_numero", $post->ID);
                  $pedido_escritorio_data = get_the_date('d/m/Y', $post->ID);
                  $pedido_cliente_nome = $post->post_title;
                  $pedido_cliente_id = get_field("pedido_cliente", $post->ID);
                  $pedido_cliente_nome_fantasia = get_field("cliente_fantasia", $pedido_cliente_id);
                  $pedido_cliente_cnpj = get_field('cliente_cnpj', $pedido_cliente_id);
                  $pedido_cliente_insc_est = get_field('cliente_insc_est', $pedido_cliente_id);
                  $pedido_cliente_endereco = get_field("cliente_endereco", $pedido_cliente_id);
                  $pedido_cliente_bairro = get_field("cliente_bairro", $pedido_cliente_id);
                  $pedido_cliente_cidade = get_field("cliente_cidade", $pedido_cliente_id);
                  $pedido_cliente_estado = get_field("cliente_estado", $pedido_cliente_id);
                  $pedido_cliente_cep = get_field("cliente_cep", $pedido_cliente_id);
                  $pedido_cliente_fone1 = get_field("cliente_fone_1", $pedido_cliente_id);
                  $pedido_cliente_fone2 = get_field("cliente_fone_2", $pedido_cliente_id);
                  $pedido_cliente_email = get_field("cliente_email", $pedido_cliente_id);
                  $pedido_cliente_comprador = get_field("cliente_comprador", $pedido_cliente_id);
                  $pedido_vendedor = get_field("pedido_vendedor", $post->ID);
                  $pedido_cond_pagto = get_field("pedido_cond_pagto", $post->ID);
                  $pedido_formas_pagto = get_field("pedido_formas_pagto", $post->ID);
                  $pedido_transportadora = get_field("pedido_transportadora", $post->ID);
                  $pedido_transporte = get_field("pedido_transporte", $post->ID);
                  $pedido_observacao = get_field("pedido_observacao", $post->ID);
                ?>

                  <!-- PEDIDO -->
                  <div class="pedido small">

                    <!-- CABEÇALHO -->
                    <div class="pedido_cabecalho border-bottom border-dark border-2 pb-3 mb-3">
                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Código</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $post->ID; ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Representante</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $representante_razao . ' (' . $representante_nome . ')'; ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Controle representante</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_escritorio_numero; ?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Data</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_escritorio_data; ?>
                        </div>
                      </div>
                    </div>
                    <!-- ./CABEÇALHO -->

                    <!-- CORPO -->
                    <div class="pedido_corpo">

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Nome fantasia</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cliente_nome_fantasia; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Razão social</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cliente_nome; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">CNPJ</strong>
                        </div>
                        <div class="col-6">
                          <?php echo $pedido_cliente_cnpj; ?>
                        </div>
                        <div class="col-1 small">
                          <strong class="fw-bold">Insc. Est.</strong>
                        </div>
                        <div class="col-3">
                          <?php echo $pedido_cliente_insc_est; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Endereço</strong>
                        </div>
                        <div class="col-6">
                          <?php echo $pedido_cliente_endereco; ?>
                        </div>
                        <div class="col-1">
                          <strong class="fw-bold">Bairro</strong>
                        </div>
                        <div class="col-3">
                          <?php echo $pedido_cliente_bairro; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Cidade</strong>
                        </div>
                        <div class="col-3">
                          <?php echo $pedido_cliente_cidade; ?>
                        </div>
                        <div class="col-1">
                          <strong class="fw-bold">Estado</strong>
                        </div>
                        <div class="col-2">
                          <?php echo $pedido_cliente_estado; ?>
                        </div>
                        <div class="col-1">
                          <strong class="fw-bold">CEP</strong>
                        </div>
                        <div class="col-3">
                          <?php echo $pedido_cliente_cep; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Fones</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cliente_fone1 . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $pedido_cliente_fone2; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">E-mail</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cliente_email; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Comprador</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cliente_comprador; ?>
                        </div>
                      </div>

                      <div class="row d-none">
                        <div class="col-2">
                          <strong class="fw-bold">Vendedor</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_vendedor; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Cond. Pagamento</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_cond_pagto; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Form. de Pagamento</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_formas_pagto; ?>
                        </div>
                      </div>

                      <div class="row d-none">
                        <div class="col-2">
                          <strong class="fw-bold">Transportadora</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_transportadora; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Transporte</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_transporte; ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-2">
                          <strong class="fw-bold">Observação</strong>
                        </div>
                        <div class="col-10">
                          <?php echo $pedido_observacao; ?>
                        </div>
                      </div>

                    </div>
                    <!-- ./ CORPO -->

                    <h6 class="h6 mt-4">Ítens do pedido</h6>

                    <!-- ITENS -->
                    <div class="pedido_itens border-top border-dark border-2 pt-2 mt-2">

                      <div tabindex="0">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="width: 130px;">Código</th>
                              <th style="width: 90px;">Pacotes</th>
                              <th style="width: 90px;">Unidade</th>
                              <th style="width: 75px;">QTD</th>
                              <th>Discriminação</th>
                              <th class="text-end" style="width: 150px;">Valor R$</th>
                              <th class="text-end" style="width: 150px;">Total R$</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                            // Check rows exists.
                            if (have_rows('pedido_itens')):

                              $pedido_valor_total = 0;

                              // Loop through rows.
                              while (have_rows('pedido_itens')) : the_row();

                                // Load sub field value.
                                $pedido_item_qtd = get_sub_field('pedido_item_qtd');
                                $pedido_item_unidade = get_sub_field('pedido_item_unidade');
                                $pedido_item_pct = get_sub_field('pedido_item_pct');
                                $pedido_item_referencia = get_sub_field('pedido_item_referencia');
                                $pedido_item_produto = get_sub_field('pedido_item_produto');

                                $produto = get_post($pedido_item_produto);
                                $pedido_item_produto_nome = $produto->post_title;
                                $pedido_item_produto_info = $produto->post_content;

                                //$pedido_item_produto_nome = get_the_title($pedido_item_produto);
                                //$pedido_item_produto_info = get_the_content($pedido_item_produto);
                                $pedido_item_valor = get_sub_field('pedido_item_valor');
                                $pedido_item_valor_total = $pedido_item_qtd * $pedido_item_valor;
                                $pedido_valor_total = $pedido_valor_total + $pedido_item_valor_total;
                                $pedido_item_valor = number_format($pedido_item_valor, 2, ",", ".");
                                $pedido_item_valor_total = number_format($pedido_item_valor_total, 2, ",", ".");

                            ?>

                                <tr>
                                  <td><?php echo $pedido_item_referencia; ?></td>
                                  <td><?php echo $pedido_item_pct; ?></td>
                                  <td><?php echo $pedido_item_unidade; ?></td>
                                  <td><?php echo $pedido_item_qtd; ?></td>
                                 
                                  <td>
                                    <?php echo $pedido_item_produto_nome; ?>
                                    <?php if ($pedido_item_produto_info) { ?>
                                      <span class="small d-block lh-1"><i class="small"><?php echo $pedido_item_produto_info; ?></i></span>
                                    <?php } ?>
                                  </td>
                                  <td class="text-end"><?php echo $pedido_item_valor; ?></td>
                                  <td class="text-end"><?php echo $pedido_item_valor_total; ?></td>
                                </tr>

                            <?php
                              // End loop.
                              endwhile;

                            // No value.
                            else :
                            // Do something...
                            endif;
                            ?>

                            <tr>
                              <td class="border-0"></td>
                              <td class="border-0"></td>
                              <td class="border-0"></td>
                              <td class="border-0"></td>
                              <td class="border-0"></td>
                              <td class="text-end border-0 fs-5"><strong class="fw-bold">Total R$ </strong></td>
                              <td class="text-end border-0 fs-5"><strong class="fw-bold"><?php echo number_format($pedido_valor_total, 2, ",", "."); ?></strong></td>
                            </tr>

                          </tbody>
                        </table>

                      </div>
                      <!-- ./ITENS -->




                    </div>
                    <!-- ./PEDIDO -->

                  <?php
                } else {
                  ?>
                    <h3 class="h4 mb-4 text-primary fw-light">Nenhum post encontrado!</h3>
                  <?php
                }
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


<?php get_footer('clean'); ?>