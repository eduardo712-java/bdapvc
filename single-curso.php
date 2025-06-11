<?php
/**
 * Arquivo que que exibe todos os cursos single
 */
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
      ?>

      <?php
      // Configura os dados personalizados da postagem
      $data = get_the_date('d \d\e F \d\e Y', get_the_ID());
      $hora = get_field('curso_hora', get_the_ID(), true);
      $curso_video = get_field('curso_video', get_the_ID(), true);

      // Imagem do cabeçalho
      if (has_post_thumbnail()) {
        $bg = 'style="background-image: url(' . get_the_post_thumbnail_url(get_the_ID(), 'large') . ' )"';
      }
      ?>

      <!-- header-1 -->
      <section class="header-1" <?php echo $bg; ?>>
        <div class="container-fluid">
          <div class="y-block">
            <h2 class="y-header-title"><?php //echo $tipo['label'] . ': ';   ?><?php the_title(); ?></h2>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- Content -->
      <section class="y-small-padding">
        <article>
          <div class="container">
            <div class="row">

              <!-- Content -->
              <div class="col-sm-12">

                <h3>
                  <strong>Dia: <?php echo $data; ?></strong><br>
                  <strong>Hora: <?php echo $hora; ?></strong><br>
                  <strong>Local: <?php echo $local; ?></strong>
                </h3>

                <?php the_content(); ?>

                <?php if ($curso_video): ?>
                  <div class="y-embed-container">
                    <?php the_field('curso_video'); ?>
                  </div>
                <?php endif; ?>

                <div class="curso-participante">

                  <?php
                  // Verifica a existência de participantes
                  if (have_rows('curso_participantes')):
                    // Loop
                    while (have_rows('curso_participantes')): the_row();

                      $participante = get_sub_field('curso_participante_nome', get_the_ID(), true);
                      $participante_tipo_obj = get_sub_field('curso_participante_tipo', get_the_ID(), true);
                      $participante_tipo = $participante_tipo_obj->name;
                      $participante_foto_array = get_sub_field('curso_participante_foto', get_the_ID(), true);
                      $participante_foto_id = $participante_foto_array['id'];
                      $participante_foto_url = $participante_foto_array['url'];
                      $participante_cv = get_sub_field('curso_participante_cv', get_the_ID(), true);
                      ?>
                      <div class="media">
                        <div class="media-left media-middle">
                          <img class="media-object curso-participante-avatar" src="<?php echo $participante_foto_url; ?>" alt="<?php echo $$participante; ?>">
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading">
                            <strong><?php echo $participante; ?></strong>
                            <p><i><?php echo $participante_tipo; ?></i></p>
                          </h4>
                          <p><?php echo $participante_cv; ?></p>
                        </div>
                      </div>

                      <?php
                    endwhile;
                  endif;
                  ?>


                </div>
                <div class="well">
                  <h3>Inscreva-se no curso</h3>
                  <?php
                  // Exibe o formulário de inscrição
                  acf_form(array(
                      'post_id' => 'new_post',
                      'new_post' => array(
                          'post_type' => 'curso_inscricao',
                          'post_status' => 'publish'
                      ),
                      'submit_value' => 'Realizar inscrição!'
                  ));
                  ?>
                </div>

                <div class="y-article-footer">
                  <div class="y-social-share">
                    <?php
                    // Insere os botões de compartilhamento
                    echo do_shortcode('[social_warfare]');
                    ?>
                  </div>
                  <?php
                  the_post_navigation(array(
                      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Próxima', 'yeti-bootstrap') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',
                      'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i><span class="meta-nav" aria-hidden="true"> ' . __('Anterior', 'yeti-bootstrap') . '</span> ',
                      'screen_reader_text' => __('Outras atrações', 'yeti-bootstrap'),
                  ));
                  ?>
                </div>

              </div>


            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </article>
        <!-- /.article -->
      </section>
      <!-- /.section -->
    <?php endwhile; ?>
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->

<?php get_footer(); ?>