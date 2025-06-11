<?php
/**
 * Template Name: Template Portfolio
 */
$paged = get_query_var('paged');
query_posts("post_type=portfolio&posts_per_page=-1&paged=$paged");
get_header();
?>


<section>
    <div class="row">
        <div class="col-lg-9">

            <div class="page-header">
                <h1>Portfólio</h1>
            </div>
            <?php if (have_posts()): ?>

                <?php while (have_posts()): the_post(); ?>

                    <div class="row post">
                        <div class="col-xs-12 col-md-3 col-sm-4 text-center">
                            <a href="" class="featured-img">
                                <img class="portfolio-img" src="<?php echo get_post_meta($post->ID, 'portfolio', true); ?>"/>
                            </a> 
                        </div>

                        <div class="col-xs-12 col-md-9 col-sm-8">
                            <h3>
                                <a href="">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <span class="devider"></span>
                            <div class="meta group">
                                <div class="left"> 
                                    <span class="text-muted">Site:</span> 
                                    <a href="<?php echo get_post_meta($post->ID, 'portfolio-link', true); ?>"><?php echo get_post_meta($post->ID, 'portfolio-link', true); ?></a> 
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endwhile; ?>
            
            <?php else:?>
            
            <p class="lead">
                Nenhum registro no momento.
            </p>

            <?php endif; ?>



        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
