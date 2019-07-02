<?php

if (!function_exists('mhdent_setup')) :
    function mhdent_setup()
    {

        load_theme_textdomain('mhdent', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support( 'responsive-embeds' );

        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'mhdent'),
        ));


        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-background', apply_filters('mhdent_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'mhdent_setup');

function mhdent_scripts()
{
    wp_enqueue_style('basic-styles', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_style('mhdent-styles', get_template_directory_uri() . '/css/styles.min.css', array(), '0.0.3');

    wp_enqueue_script('mhdent-navigation', get_template_directory_uri() . '/js/scripts.min.js', array(), '0.0.2');

}

add_action('wp_enqueue_scripts', 'mhdent_scripts');

/**
 * Подключаем файлы с кастомными функциями
 *
 * Функции админ панели
 *
 */

require_once __DIR__ . '/includes/admin-panel-hooks/admin-panel-switcher.php';

require_once __DIR__ . '/includes/admin-panel-hooks/additional-settings.php';

require_once __DIR__ . '/includes/admin-panel-hooks/admin-panel-styles.php';

/**
 *  Функции ядра
 */

require_once __DIR__ . '/includes/core_hooks/get-component.php';

require_once __DIR__ . '/includes/core_hooks/archive-title-filter.php';

require_once __DIR__ . '/includes/core_hooks/taxonomy-thumbnail.php';

require_once __DIR__ . '/includes/core_hooks/order-filter.php';


