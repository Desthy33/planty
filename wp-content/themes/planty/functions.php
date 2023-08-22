<?php 
add_action("wp_enqueue_scripts","planty_enqueue_styles");

function planty_enqueue_styles()
{
    wp_enqueue_style("parent-style",get_template_directory_uri()."/style.css");
    wp_enqueue_style("child-style",get_stylesheet_directory_uri()."/css/planty.css" , array() , time() );
}

// Disable auto <p> tags in Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

add_action('after_setup_theme', 'planty_setup');
function planty_setup()
{
    add_theme_support('custom-logo');
}


add_filter( 'wp_nav_menu_items', 'add_admin_to_nav_menu', 10, 2);


function add_admin_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location==='main-menu') {
        $items.= '<li class="menu-item admin"><a href="'.get_admin_url().'" itemprop="url">Admin</a></li>';
    }   
    return $items;
}

