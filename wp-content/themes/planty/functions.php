<?php 
add_action("wp_enqueue_scripts","planty_enqueue_styles");
add_filter("nav_menu_css_class" , "planty_menu_class");

function planty_menu_class($classes)
{
    $classes[] = "menu";
    return $classes;
}

function planty_enqueue_styles()
{
    wp_enqueue_style("parent-style",get_template_directory_uri()."/style.css");
    wp_enqueue_style("child-style",get_stylesheet_directory_uri()."/css/planty.css");
}

function planty_supports()
{
    add_theme_support('menus');
    register_nav_menu( array( 'header' => esc_html__( 'Main menu', 'planty' ) ) ); 
}