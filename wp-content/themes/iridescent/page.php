<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="page-header">
                    <h1><?php the_title(); ?></h1>
                </div>
            <?php endwhile; else : ?>
                <p><?php _e('Sorry, no pages found.'); ?> </p>
            <?php endif; ?>
            </div>



        </div>


        <div class="row">

                <?php global $cat_id; ?>
                <? if (is_page('Kultur')) :
                    $cat_id = 8; ?>
                    <?php include( locate_template( '/template-parts/content-article.php' ) ); ?>
                <?php endif; ?>

                <? if (is_page('Sport')) : ?>
                    <?php $cat_id = 7; ?>
                    <?php include( locate_template( '/template-parts/content-article.php' ) ); ?>
                <?php endif; ?>

                <? if (is_page('Världen')) : ?>
                    <?php $cat_id = 9; ?>
                    <?php include( locate_template( '/template-parts/content-article.php' ) ); ?>
                <?php endif; ?>

                <? if (is_page('Nöje')) : ?>
                    <?php $cat_id = 10; ?>
                    <?php include( locate_template( '/template-parts/content-article.php' ) ); ?>
                <?php endif; ?>


            <?php get_sidebar(); ?>

        </div>



    </div>



<?php get_footer(); ?>