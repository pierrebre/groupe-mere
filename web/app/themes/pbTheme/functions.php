<?php

require_once('options/social-media.php');
function pbTheme_setup()
{
    // Add featured image support
    add_theme_support('post-thumbnails');
    // Add title tag support
    add_theme_support('title-tag');
    // Add custom logo support
    add_theme_support('custom-logo');
    // Add custom header support
    add_theme_support('custom-header');
    // Add custom post thumbnail support
    add_theme_support('post-thumbnails');
    // Add theme support
    add_theme_support('menus');
    // Register menus
    register_nav_menu('header', 'Primary Menu');
    register_nav_menu('footer', 'Footer Menu');

    add_image_size('post-thumbnail', 350, 215, true);
}

function pbTheme_register_assets()
{
    // Register styles
    wp_register_style('pbTheme', get_template_directory_uri() . '/style.css', [], false, 'all');
    // Enqueue styles
    wp_enqueue_style('pbTheme');
}

function pbTheme_title_separator()
{
    return '|';
}

function pbTheme_navigation()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) return;
    echo '<ol class="flex justify-center gap-1 text-xs font-medium my-3">';
    foreach ($pages as $page) {
        $class = 'block size-8 rounded border border-gray-100 bg-white text-center leading-8';
        // Ajoute la classe bg-gray-300 si c'est la page actuelle
        if (strpos($page, 'rounded border-blue-600 bg-blue-600 text-center leading-8 text-white') !== false) {
            $class .= ' bg-gray-300';
        }
        // Supprime les classes rtl
        $page = str_replace('rtl:rotate-180', '', $page);
        echo '<li class="">' . str_replace('page-numbers', $class, $page) . '</li>';
    }
    echo '</ol>';
}
function my_theme_enqueue_assets() {
    wp_enqueue_style('navbar-styles', get_template_directory_uri() . '/assets/navbar/navbar.css');

    wp_enqueue_script('navbar-script', get_template_directory_uri() . '/assets/navbar/navbar.js', array(), '', true);
}


add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
add_action('after_setup_theme', 'pbTheme_setup');
add_action('wp_enqueue_scripts', 'pbTheme_register_assets');
add_filter('wp_title', 'pbTheme_title_separator');





// Register custom post types
require_once('classes/marque.php');

$marque = new Marque();
$marque->init();


