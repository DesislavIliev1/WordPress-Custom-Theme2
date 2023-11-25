<?php
function enqueue_main_scripts(){
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script("scripts.js",  get_template_directory_uri(). "/scripts.js" , array('jquery' , '1.0.0'));
}
add_action("wp_enqueue_scripts" , 'enqueue_main_scripts');

function register_functional_theme_menus(){
    register_nav_menus(
        array(
            'primary-menu'=> esc_html__('Primary Menu' , 'theme')
        )
        );

};

add_action('init' , 'register_functional_theme_menus');

function theme_customize_register($wp_customize){
    $wp_customize->add_section('primary-menu' , array(
        'title' => __('Primary menu' , 'theme'),
        'description' => sprintf(__('options for primary menu', 'theme')) ,
        'priority' => 130
    ));

    $wp_customize->add_setting('primary-menu-title', array(
        'default' => _x('Primary menu','theme'),
    ));

    $wp_customize->add_control('primary-menu-title', array(
        'label' =>__('Primary menu title' , 'theme'),
        'section' => 'primary-menu',
        'priority' => 1

    ));

    $wp_customize->add_section('footer' , array(
        'title' => __('Footer' , 'theme'),
        'description' => sprintf(__('options for footer', 'theme')) ,
        'priority' => 130
    ));

    $wp_customize->add_setting('footer', array(
        'default' => _x('Footer title','theme'),
    ));

    $wp_customize->add_control('footer', array(
        'label' =>__('Footer title' , 'theme'),
        'section' => 'footer',
        'priority' => 1

    ));

}

add_action('customize_register', 'theme_customize_register');


function theme_widgets_init(){
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'theme'),
            'id' => 'sidebar-1',
            'class'=> 'sidebar-1',
            'description' => esc_html__("Add widgets here", 'theme'),
            'before_widget' => '<section id="12" class="widget">',
            'after_widget' => '</section>',
        )
        );

        register_sidebar(
            array(
                'name' => esc_html__('Footer', 'theme'),
                'id' => 'footer-1',
                'description' => esc_html__("Add widgets here", 'theme'),
                'before_widget' => '<section id="12" class="widget">',
                'after_widget' => '</section>',
            )
            );
}

add_action('widgets_init', 'theme_widgets_init');