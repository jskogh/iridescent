<?php

class Services_Widget extends WP_Widget {

    // Registrerar widgheten, bestämmer vad den ska heta
    public function __construct(){
        parent::__construct(
            'services-widget',
            __( 'Services Widget', 'awsm' )
        );
    }

    // Här bestämmer hur widgeten ska se ut
    public function widget( $args, $instance ){
        ?>

        <div class="service">

            <div class="big-intro-text container">
                <hr>
                <?php if( $title = @$instance['title'] ) : ?> <!-- @ gör så att vi kollar om $instance['title'] finns, som en if -->
                        <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if( $subtitle = @$instance['subtitle'] ) : ?>
                    <p><?php echo $subtitle; ?></p>
                <?php endif; ?>
            </div>

            <?php if ( $featured_image = @$instance['featured_image'] ) : ?>
                <div class="service-image" style="background-image: url(<?php echo $featured_image ?>);"></div>
            <?php endif; ?>

        </div>

        <?php
    }

    // Här bestämmer vi vad som får gå in, vi filtrerar värdet
    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['subtitle'] = strip_tags( $new_instance['subtitle'] );
        $instance['featured_image'] = esc_url_raw( $new_instance['featured_image'] );

        return $instance;
    }

    // Här skriver vi vad som ska finnas i widgeten när vi editerar den
    public function form( $instance ) {
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'awsm' ); ?></label>
            <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php if( ! empty( $instance['title'] ) ) echo $instance['title']; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'subtitle' ); ?>"><?php _e( 'Subitle', 'awsm' ); ?></label>
            <input type="text" name="<?php echo $this->get_field_name( 'subtitle' ); ?>" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" value="<?php if( ! empty( $instance['subtitle'] ) ) echo $instance['subtitle']; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'featured image' ); ?>"><?php _e( 'Feautured Image', 'awms' ); ?></label>
            <span class="image-container">
                <?php if ( ! empty( $instance['featured_image'] ) ) : ?>
                    <img src="<?php echo $instance['featured_image']; ?>" style="max-width: 100%; margin: 5px 0; display: block;">
                <?php endif; ?>
            </span>
            <input type="text" name="<?php echo $this->get_field_name('featured_image'); ?>" id="<?php echo $this->get_field_id( 'featured_image' ); ?>" value="<?php if ( ! empty( $instance['featured_image'] ) ) echo $instance['featured_image']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload image" style="margin-top: 5px;">
        </p>
        <?php
    }
}