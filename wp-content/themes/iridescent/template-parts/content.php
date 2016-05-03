<article>

    <?php

    if ( is_single() || is_page() ) :
        the_title( '<h1 class="article-title">', '</h1>' );

    else:
        the_title( '<h3><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );

    endif;
    ?>

    <?php the_content() ?>

</article>
