<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 entry-content">
                <?php
                    $args = array(
                        'post_type' => 'reportage',
                        'posts_per_page' => 1
                    );

                    $loop = new WP_Query($args);

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="reportage-image">
                            <a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <h1 class="reportage-name"><?php the_title(); ?></h1>
            </div>
        </div>

         <div class="row">
              <div class="col-sm-12 entry-excerpt">
                     <p class="image-text"><?php the_field('bildtext_header') ?></p>
              </div>
          </div>
    </div>
                <?php endwhile;?>
                <?php wp_reset_query(); ?>


    <div class="container">
    <hr>
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <div class="col-lg-12">
                   <h1>senaste...</h1>
                   <?php the_content(); ?>
               </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row subscribe-field">
            <div class="col-lg-12 text-center">
                <form>
                    <input type="email" name="subscribe-email" placeholder="mailadress" />
                    <input type="submit" name="subscribe-btn" value="prenumenera" />
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 front-page">
                <h1>senaste från ledarstaben...</h1>
            </div>
        </div>

                <?php
                $args = array(
                    'post_type' => 'kronikor',
                    'posts_per_page' => 3
                );

                $loop = new WP_Query($args);

                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="row kronika">
                        <div class="col-sm-6 entry-content col-sm-offset-1 ">
                            <a href="<?php echo get_permalink( $post->ID ); ?>"> <h1 class=""><?php the_title(); ?></h1></a>
                                <a href="<?php echo get_permalink( $post->ID ); ?>"><p><?php the_excerpt(); ?></p></a>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-circle attachment-post-thumbnail")); ?>
                        </div>
                    </div>
                <?php endwhile; ?>

    </div>
                <?php wp_reset_query(); ?>

<?php endwhile; else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?> </p>
<?php endif; ?>

  <!---  <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if(dynamic_sidebar('front-left')); ?>
            </div>
            <div class="col-md-4">
                <?php if(dynamic_sidebar('front-center')); ?>
            </div>
            <div class="col-md-4">
                <?php if(dynamic_sidebar('front-right')); ?>
            </div>
        </div>
    </div> --->

<?php get_footer(); ?>