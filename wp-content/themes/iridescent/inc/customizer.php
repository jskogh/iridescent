<?php

/**
 * Register customizer
 * @param WP_Customize_Manager $wp_customize
 */
function awsm_customize_register( $wp_customize ) {

    /**
     * -------------------------------------------------
     * GENERAL PANEL
     * -------------------------------------------------
     */
    $wp_customize->add_panel( 'awsm_general_panel', array(
            'priority'      => 1,
            'capability'    => 'edit_theme_options',
            'title'         => __( 'General Options', 'awsm')
        ) );

    // Head section
    $wp_customize->add_section( 'awsm_general_head', array(
            'panel'     => 'awsm_general_panel',
            'title'     => __( 'Head', 'awsm' )
        ) );

    // Head title
    $wp_customize->add_setting( 'awsm_general_head_title', array(
            'sanitize_callback' => 'awsm_sanitize_text'
        ) );
    $wp_customize->add_control( 'awsm_general_head_title', array(
            'label' => __( 'Title', 'awms' ),
            'section' => 'awsm_general_head',
            'setting' => 'awsm_general_head_title'
        ) );

    // Head subtitle
    $wp_customize->add_setting( 'awsm_general_head_subtitle', array(
        'sanitize_callback' => 'awsm_sanitize_text'
    ) );
    $wp_customize->add_control( 'awsm_general_head_subtitle', array(
        'label' => __( 'Subtitle', 'awms' ),
        'section' => 'awsm_general_head',
        'setting' => 'awsm_general_head_subtitle'
    ) );

    // Head Logo
    $wp_customize->add_setting( 'awsm_general_head_logo', array(
            'sanitize_callback' => 'esc_url_raw'
        ) );
    $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'awsm_general_head_logo',
            array(
                'label'     => __( 'Logo', 'awsm' ),
                'section'   => 'awsm_general_head',
                'setting'   => 'awsm_general_head_logo'
            )
        ) );

    // Social section
    $wp_customize->add_section( 'awsm_general_social', array(
        'panel'     => 'awsm_general_panel',
        'title'     => __( 'Social', 'awsm' )
    ) );

    // Facebook link
    $wp_customize->add_setting( 'awsm_general_social_facebook', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );
    $wp_customize->add_control( 'awsm_general_social_facebook', array(
        'label' => __( 'Facebook Link', 'awms' ),
        'section' => 'awsm_general_social',
        'setting' => 'awsm_general_social_facebook'
    ) );

    // Linkedin link
    $wp_customize->add_setting( 'awsm_general_social_linkedin', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );
    $wp_customize->add_control( 'awsm_general_social_linkedin', array(
        'label' => __( 'Linkedin Link', 'awms' ),
        'section' => 'awsm_general_social',
        'setting' => 'awsm_general_social_linkedin'
    ) );

    // Twitter link
    $wp_customize->add_setting( 'awsm_general_social_twitter', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ) );
    $wp_customize->add_control( 'awsm_general_social_twitter', array(
        'label' => __( 'Twitter Link', 'awms' ),
        'section' => 'awsm_general_social',
        'setting' => 'awsm_general_social_twitter'
    ) );

    /**
     * ----------------------------------------------------------
     * CUSTOMERS PANEL
     * ----------------------------------------------------------
     */

    $wp_customize->add_panel( 'awsm_customers_panel', array(
            'priority'      => 32,
            'capability'    => 'edit_theme_options',
            'title'         => __( 'Customers section', 'awsm' )
        ));

    // Customers content section
    $wp_customize->add_section( 'awsm_customers_content', array(
            'priority'  => 1,
            'title'     => __( 'Content', 'awsm' ),
            'panel'     => 'awsm_customers_panel'
        ) );

    // Customers title
    $wp_customize->add_setting( 'awsm_customers_content_title', array(
            'sanitize_callback' => 'awsm_sanitize_text'
        ) );
    $wp_customize->add_control( 'awsm_customers_content_title', array(
            'label'     => __( 'Title', 'awsm' ),
            'section'   => 'awsm_customers_content',
            'setting'   => 'awsm_customers_content_title'
        ) );

    // Customer subtitle
    $wp_customize->add_setting( 'awsm_customers_content_subtitle', array(
        'sanitize_callback' => 'awsm_sanitize_text'
    ) );
    $wp_customize->add_control( 'awsm_customers_content_subtitle', array(
        'label'     => __( 'Subtitle', 'awsm' ),
        'section'   => 'awsm_customers_content',
        'setting'   => 'awsm_customers_content_subtitle'
    ) );

}
add_action( 'customize_register', 'awsm_customize_register' );

function awsm_sanitize_text( $input ){
    return wp_kses_post( force_balance_tags( $input ) );
}

function awsm_customize_enqueue_scripts(){
    wp_enqueue_script( 'awsm-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery'), 'v1', true );
}
add_action( 'customize_controls_enqueue_scripts', 'awsm_customize_enqueue_scripts');