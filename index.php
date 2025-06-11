<?php get_header(); ?>

<section class="section-custom">

  <div class="row">
    <div class="col-lg-9">


      <?php if (have_posts()) : ?>

        <?php if (is_home() && !is_front_page()) : ?>
          <div class="page-header">
            <h1><?php the_title(); ?></h1>
          </div>
        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>

          <div class="post-content">                     
            <p>
                <?php the_content() ?>
            </p>    
          </div>

          <div>

            <div class="page-heading center">
              <h3>DEIXA UM COMENTÁRIO</h3>
              <p>Seu endereço de email não será publicado. Campos obrigatórios são marcados *</p>
            </div>

            <div class="row">
              <div class="col-xs-12 col-md-12 col-sm-12">
                  <?php comments_template(); ?>
              </div>
            </div>

          </div>



        <?php endwhile; ?>

      <?php endif; ?>
    </div>
    <div class="col-lg-3">
      <?php get_sidebar(); ?>
    </div>
  </div>

</section>

<?php get_footer(); ?>