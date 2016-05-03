<li class="archive-article">
    <a href="<?php esc_url( the_permalink() ); ?>" class="article-link">

        <div class="archive-featured-image" style="<?php if ( $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' ) ) echo 'background-image: url(' . $thumb[0] . ')'; ?>"></div>

        <div class="archive-text">
            <div class="author">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?> <!-- ID går att byta till name mm, googla-->
            </div>
            <h4><?php the_title(); ?></h4>

            <?php the_excerpt(); ?> <!-- förkortningen av inlägget, om långt inlägg kapas texten av -->

            <ul class="article-meta">
                <li>
                    <i class="glyphicon glyphicon-time"></i>
                    <?php the_date(); ?> <!-- går att formatera hur datumet ska skrivas ut tex the_date( 'y-m-d' ); -->
                </li>
                <li>
                    <i class="glyphicon glyphicon-comment"></i>
                    <?php comments_number( '0', '1', '%' ) ?> <!-- % hämtar antalet kommentarer och det skrivs ut -->
                </li>
            </ul>

        </div>

    </a>
</li>