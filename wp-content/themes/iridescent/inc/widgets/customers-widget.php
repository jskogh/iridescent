<?php

class Customers_Widget extends WP_Widget {

    public function __construct(){
        parent::__construct(
            'customers-widget',
            __( 'Customers Widget', 'awsm')
        );
    }

    public function widget( $args, $instance ){
        extract( $args );

        echo $before_widget;

        ?>

        <?php if ( ! empty( $instance['customer_logo'] ) ) : ?>

            <li>
                <img src="<?php echo esc_url( $instance['customer_logo'] ); ?>" alt="<?php if ( ! empty( $instance ) ) echo $instance['title']; ?>">
            </li>

        <?php endif; ?>

        <?php

        echo $after_widget;

    }

    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['customer_logo'] = esc_url_raw( $new_instance['customer_logo'] );

        return $instance;
    }

    public function form( $instance ){
        ?>
        <p>
            <label for="<?php $this->get_field_id( 'title' ); ?>"><?php echo __( 'Title', 'awsm' ); ?></label>
            <input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php $this->get_field_id( 'title' ); ?>" value="<?php if ( ! empty( $instance['title'] ) ) echo $instance['title']; ?>" class="widefat">

        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'customer logo' ); ?>"><?php _e( 'Logo', 'awms' ); ?></label>
            <span class="image-container">
                <?php if ( ! empty( $instance['customer_logo'] ) ) : ?>
                <img src="<?php echo $instance['customer_logo']; ?>" style="max-width: 100%; margin: 5px 0; display: block;">
                <?php endif; ?>
            </span>
            <input type="text" name="<?php echo $this->get_field_name('customer_logo'); ?>" id="<?php echo $this->get_field_id( 'customer_logo' ); ?>" value="<?php if ( ! empty( $instance['customer_logo'] ) ) echo $instance['customer_logo']; ?>" class="widefat media-input">
            <input type="button" class="upload-media-button button" value="Upload image" style="margin-top: 5px;">
        </p>
        <?php
    }

}