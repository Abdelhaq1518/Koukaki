<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/.css', array(), filemtime(get_stylesheet_directory() . '/.css'));

}

function script_JS_Custo()
{
    wp_enqueue_script('animation-scripts', get_stylesheet_directory_uri() . '/js/animationSectionsTitres.js', array('jquery'), '', true);
    wp_enqueue_script('Parallaxe-script', get_stylesheet_directory_uri() . '/js/parallaxe.js', array('jquery'), '', true);
    wp_enqueue_script('logo-floating-scripts', get_stylesheet_directory_uri() . '/js/logoFloating.js', array('jquery'), '', true);
    wp_enqueue_script('fallback-scripts', get_stylesheet_directory_uri() . '/js/fallback.js', array('jquery'), '', true);
    wp_enqueue_script('nuages-script', get_stylesheet_directory_uri() . '/js/animationNuages.js', array('jquery'), null, true);
    wp_enqueue_script('menu-script', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'), null, true);
    // Swiper.js
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Initialisation et configuration de swiper//
    wp_enqueue_script('swiper-init', get_stylesheet_directory_uri() . '/js/swiper-init.js', array('swiper', 'jquery'), '', true);

}




add_action('wp_enqueue_scripts', 'script_JS_Custo');
function load_custom_scripts()
{
    wp_enqueue_script('intersection-observer', 'https://unpkg.com/intersection-observer@0.12.0/intersection-observer.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_custom_scripts');

// Enqueue Skrollr script
function enqueue_skrollr_script()
{
    wp_enqueue_script('skrollr', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_skrollr_script');


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}