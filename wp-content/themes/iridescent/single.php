<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                        <?php the_post_thumbnail(); ?>
                    <div class="single-post-content">

                        <p><?php the_content(); ?></p>
                        <p><em>
                                By <?php the_author(); ?>
                                on <?php echo the_time('l, F jS, Y') ?>
                                in <?php the_category(','); ?>
                            </em>
                        </p>
                    </div>
                    <hr>

                    <?php comments_template(); ?>


                <?php endwhile; else : ?>
                    <p><?php _e('Sorry, no pages found.'); ?> </p>
                <?php endif; ?>
            </div>
                <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>