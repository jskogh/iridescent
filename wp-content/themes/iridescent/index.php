<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        </div>
    </div>
</div>

    <?php endwhile; else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?> </p>
    <?php endif; ?>

<?php get_footer(); ?>