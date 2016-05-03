<?php

// Customers widget
require get_template_directory() . '/inc/widgets/customers-widget.php';

// Services Widget
require get_template_directory() . '/inc/widgets/services-widget.php';

function iridescent_register_widgets(){

    register_widget( 'Customers_Widget' );
    register_widget( 'Services_Widget' );

    $sidebars = array(
            'sidebar-customers-section' => __( 'Customers Section Widgets', 'iridescent' ),
            'sidebar-services-section' => __( 'Services Section Widgets', 'iridescent' )
        );


    /*
     *      $args = array(
     *      'name' => $name,
     *      'id' => $id,
     *      'before_widget' => '',
     *      'after_widget' => '',
     *      );
     *      register_sidebar($args);
     *
     *      noticing above example, this is how you insert $args in functions in a more
     *      clear way.
     *
     *      we do not write $args, but the register_sidebar(array()) is the same thing.
     */

    foreach ( $sidebars as $id => $name) {
        register_sidebar( array(
            'name' => $name,
            'id' => $id,
            'before_widget' => '',
            'after_widget' => '',
            'before_widget' => '',
            'after_widget' => ''
        ) );
    }

}
add_action( 'widgets_init', 'iridescent_register_widgets' );

function iridescent_widget_scripts() {
    wp_enqueue_media();
    wp_enqueue_script( 'iridescent-widget-js', get_template_directory_uri() . '/assets/js/widgets.js', array( 'jquery' ), '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'iridescent_widget_scripts' );