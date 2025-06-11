<?php

/**
 * Template Name: Recursos > Galerias
 */
get_header();
?>

<div class="container-full">
  <main class="main" role="main">

    <?php
    // Start the loop.
    while (have_posts()) : the_post();
    ?>

      <!-- header-1 -->
      <section class="header-1">
        <div class="container-fluid">
          <div class="y-block">
            <h2 class="y-header-title"><?php the_title(); ?></h2>
            <?php
            // Verifica se existe um subtítulo para a página
            $subtitulo = get_field("pagina_subtitulo");
            if ($subtitulo) {
            ?>
              <h3 class="y-header-subtitle"><?php echo $subtitulo; ?></h3>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- /.header-1 -->

      <!-- gallery-wordpress -->
      <section>
        <article>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="y-block">
                  <h2 class="y-header-title">Galeria padrão do Wordpress</h2>
                </div>
                <?php the_content(); ?>
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

      <!-- gallery-1 -->
      <section class="gallery-1">
        <div class="container">
          <div class="y-block">
            <h2 class="y-header-title">Galeria 1</h2>
          </div>
          <div class="row y-item">
            <div class="col text-center">
              <div class="y-gallery">
                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75" title="The Cleaner"></a>
                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75" title="Winter Dance"></a>
                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75" title="The Uninvited Guest"></a>
                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75" title="Oh no, not again!"></a>
                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75" title="Swan Lake"></a>
                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75" title="The Shake"></a>
                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75" title="Who's that, mommy?"></a>
                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75" title="The Cleaner"></a>
                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75" title="Winter Dance"></a>
                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75" title="The Uninvited Guest"></a>
                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75" title="Oh no, not again!"></a>
                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75" title="Swan Lake"></a>
                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75" title="The Shake"></a>
                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75" title="Who's that, mommy?"></a>
                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75" title="The Cleaner"></a>
                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75" title="Winter Dance"></a>
                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75" title="The Uninvited Guest"></a>
                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75" title="Oh no, not again!"></a>
                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75" title="Swan Lake"></a>
                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75" title="The Shake"></a>
                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75" title="Who's that, mommy?"></a>
                <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"><img src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75" title="The Cleaner"></a>
                <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"><img src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75" title="Winter Dance"></a>
                <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"><img src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75" title="The Uninvited Guest"></a>
                <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"><img src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75" title="Oh no, not again!"></a>
                <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"><img src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75" title="Swan Lake"></a>
                <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"><img src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75" title="The Shake"></a>
                <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"><img src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75" title="Who's that, mommy?"></a>
              </div>

            </div>
          </div>
        </div>
      </section>




    <?php endwhile; ?>
  </main>
  <!-- /.main -->
</div>
<!-- /.container-full -->


<?php get_footer(); ?>