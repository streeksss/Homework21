<?php

/*Stylesheet*/

function blog() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'blog');


/*Navigation*/


register_nav_menus(array(
    'header' => __('Head Menu'),
    'footer' => __('Foot Menu'),
));


/*Sidebar*/


register_sidebar(array(
    'name'          => 'sidebar_widget',
    'id'            => 'first_sidebar',
    'description'   => 'this is sidebar widget',
    'before_widget' => '<div class="sidebar">',
    'after_widget' => '</div>',
));


/*Customize*/

function blogname_customize_register( $wp_customize ) {


    $wp_customize->add_setting( 'social_links_facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'blogname_social' , array(
        'title'      => __( 'Social links', 'blogname' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_facebook', array(
        'label'        => __( 'Facebook', 'blogname' ),
        'section'    => 'blogname_social',
        'settings'   => 'social_links_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_links_twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_twitter', array(
        'label'        => __( 'Twitter', 'blogname' ),
        'section'    => 'blogname_social',
        'settings'   => 'social_links_twitter',
    ) ) );

    $wp_customize->add_setting( 'social_links_linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_links_linkedin', array(
        'label'        => __( 'Linkedin', 'blogname' ),
        'section'    => 'blogname_social',
        'settings'   => 'social_links_linkedin',
    ) ) );




    $wp_customize->add_setting( 'logo_image' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'logo' , array(
        'title'      => __( 'Logo image', 'blogname' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'logo_image', array(
        'label'        => __( 'Upload logo', 'blogname' ),
        'section'    => 'logo',
        'settings'   => 'logo_image',
    ) ) );




    $wp_customize->add_setting( 'banner_image' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'banner' , array(
        'title'      => __( 'Banner image', 'blogname' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'banner_image', array(
        'label'        => __( 'Upload your banner', 'blogname' ),
        'section'    => 'banner',
        'settings'   => 'banner_image',
    ) ) );




    $wp_customize->add_setting( 'contact_tel' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'tel' , array(
        'title'      => __( 'Phone', 'blogname' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_tel', array(
        'label'        => __( 'Number of your phone', 'blogname' ),
        'section'    => 'tel',
        'settings'   => 'contact_tel',
    ) ) );




    $wp_customize->add_setting( 'contact_mail' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );


    $wp_customize->add_section( 'mail' , array(
        'title'      => __( 'E-mail', 'blogname' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_mail', array(
        'label'        => __( 'Your email', 'blogname' ),
        'section'    => 'mail',
        'settings'   => 'contact_mail',
    ) ) );

}
add_action( 'customize_register', 'blogname_customize_register' );


add_action('init', 'slider');

function slider(){
    register_post_type('slider', array(
        'public' => true


    ));
}