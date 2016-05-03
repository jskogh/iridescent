<?php

// the query
$args = array(
    'cat' => $cat_id,
    'posts_per_page' => 5
);
query_posts($args); ?>

<?php while (have_posts()) : the_post(); ?>
        <div class="col-md-7 article-preview">
            <h3><?php the_title(); ?> </h3>
            <a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_post_thumbnail(); ?>
            <p><?php the_excerpt();?></p></a>
            <hr>
        </div>


<?php endwhile; ?>
<?php wp_reset_query(); ?>