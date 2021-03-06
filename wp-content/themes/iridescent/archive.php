<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="page-header">
                    <h1><?php wp_title(''); ?></h1>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article>
                        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                        <p><em>
                                By <?php the_author(); ?>
                                on <?php echo the_time('l, F jS, Y') ?>
                                in <?php the_category(','); ?>
                            </em>
                        </p>

                        <?php the_excerpt(); ?>
                        <hr>

                    </article>


                <?php endwhile; else : ?>
                    <p><?php _e('Sorry, no pages found.'); ?> </p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>



<?php get_footer(); ?>