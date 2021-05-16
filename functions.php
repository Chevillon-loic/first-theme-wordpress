<?php

// Add supports
function theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}

function add_style()
{
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
}

// chargement Bootstrap
function chevillon_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// create block categories
// add_filter('block_categories', function ($categories){
//     $categories
// });

// block register
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', function () {

        acf_register_block_type([
            'name' => 'OUR PLACE block',
            'title' => 'home block',
            'render_template' => 'block/homeblock.php',
        ]);

        acf_register_block_type([
            'name' => 'OUR FOOD block',
            'title' => 'our food block',
            'render_template' => 'block/ourfoodblock.php'
        ]);

        acf_register_block_type([
            'name' => 'OUR RESTAURANT block',
            'title' => 'our restaurant block',
            'render_template' => 'block/ourrestaurantblock.php'
        ]);

        acf_register_block_type([
            'name' => 'OUR VALUE block',
            'title' => 'our value block',
            'render_template' => 'block/ourvalueblock.php'
        ]);

        acf_register_block_type([
            'name' => 'OUR INFORMATIONS block',
            'title' => 'our informations block',
            'render_template' => 'block/ourinformationsblock.php'
        ]);
    });
}



// API KEY GOOGLE MAP
function my_acf_google_map_api($api)
{
    $api['key'] = '...';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


add_action('after_setup_theme', 'theme_supports');
add_action('wp_enqueue_scripts', 'chevillon_register_assets');
add_action("wp_enqueue_scripts", "add_style");
