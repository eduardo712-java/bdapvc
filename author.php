<?php get_header(); ?>


<section>

    <div class="row">
        <div class="col-lg-9">

            <div class="page-header">
                <h1><?php printf('%s', 'Notícias de ' . get_author_name()); ?></h1>
            </div>


            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>


                    <?php
                    $vFoto = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                    $foto = count($vFoto) ? $vFoto[0] : false;
                    ?>

                    <div class="posts-content">

                        <div class="post-header"> 
                            <?php if ($foto): ?> 
                                <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>"> 
                                    <img class="img-fluid" src="<?php echo $foto ?>" title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>"/> 
                                </a> 
                            <?php endif; ?>
                        </div>

                        <div class="post-title">
                            <h2><a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>"><?php the_title(); ?></a></h2>
                        </div>

                        <ul class="post-meta">
                            <li><i class="fa fa-calendar"></i> <?php echo get_the_date(null, get_the_ID()) ?></li>                                                        
                        </ul>

                        <div class="post-content">
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                        </div>

                        <hr>

                    </div>



                <?php endwhile; ?>


                <?php theme_bootstrap_pagination(); ?>

            <?php else: ?>


                <p>
                    Nenhum conteúdo foi encontrado.
                </p>


            <?php endif; ?>

        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>

</section>


<?php get_footer(); ?>