<?php

function load_dependencies()
{
    $stylesURL = get_template_directory_uri() . '/assets/index.css';
    $scriptsURL = get_template_directory_uri() . '/assets/index.js';

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('css', $stylesURL, array(), $version);
    wp_enqueue_script('js', $scriptsURL, array(), $version);

    if (WP_DEBUG === true) {
        $liveReloadURL = preg_replace('/\d+.+$/', '35729/livereload.js?snipver=1', get_template_directory_uri());
        wp_enqueue_script('livereload', $liveReloadURL, array('js'), $version);
    }
}

function theme_slug_setup()
{
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'load_dependencies');
add_action('after_setup_theme', 'theme_slug_setup');
