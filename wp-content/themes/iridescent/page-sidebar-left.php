<?php
    /*

        Template Name: Left Sidebar

    */
?>


<?php get_header(); ?>

    <div class="container-full">
    <div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    </div>
    </div>

<?php endwhile; else : ?>
    <p><?php _e('Sorry, no pages found.'); ?> </p>
<?php endif; ?>

<?php get_footer(); ?>