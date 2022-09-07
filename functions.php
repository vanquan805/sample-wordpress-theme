<?php
/**
 * Created by PhpStorm.
 * User: quannv27
 * Date: 07/09/2022
 * Time: 08:50
 * To change this template use File | Settings | File Templates.
 */

add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 150, 150);


function sw_add_theme_scripts()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/plugins/bootstrap/jquery-3.3.1.slim.min.js', '4.3.1', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/plugins/bootstrap/popper.min.js', '4.3.1', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.js', '4.3.1', true);
    wp_enqueue_style('style', get_stylesheet_uri());
}

function sw_add_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu'),
    ));
}

function sw_add_widgets()
{
    register_sidebar(array(
        'name' => __('Right Sidebar'),
        'id' => 'right-sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.'),
        'before_widget' => '<div  id="%1$s" class="p-3 mb-3 bg-light rounded widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widgettitle display-6 mb-3">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Second Footer Sidebar'),
        'id' => 'footer-sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.'),
        'before_widget' => '<div  id="%1$s" class="footer-sidebar-widget mb-4 col-12 col-md-4 col-lg-4 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="footer-sidebar-title widgettitle display-6 mb-3">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('First Footer Sidebar'),
        'id' => 'first-footer-sidebar',
        'description' => __('Widgets in this area will be shown on all posts and pages.'),
        'before_widget' => '<div  id="%1$s" class="footer-sidebar-widget mb-4 widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="footer-sidebar-title widgettitle display-6 mb-4">',
        'after_title' => '</h6>',
    ));
}

add_action('wp_enqueue_scripts', 'sw_add_theme_scripts');
add_action('after_setup_theme', 'sw_add_nav_menus', 0);
add_action('widgets_init', 'sw_add_widgets');

