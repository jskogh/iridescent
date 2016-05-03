<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <?php the_content(); ?>

                <?php endwhile; else : ?>
                    <p><?php _e('Sorry, no pages found.'); ?> </p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>

        <div class="row">

            <?php
                $args = array(
                    'post_type' => 'book'
                );

                $the_query = new WP_Query($args);

            ?>

            <?php if(have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-sm-3">

                    <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src('$thumbnail_id', 'thumbnail-size', true);
                    ?>

                    <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?>graphic"></a></p>
                    <h3> <?php the_title(); ?></h3>
                </div>

                <?php $portfolio_count = $the_query->current_post + 1; ?>
                <?php if($portfolio_count %4 == 0) : ?>
                    </div><div class="row">
                <?php endif; ?>
            <?php endwhile; endif; wp_reset_postdata();?>


        </div>
    </div>



<?php get_footer(); ?>