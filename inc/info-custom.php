<?php

if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'Настройки темы',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    if (function_exists('acf_add_options_sub_page')) {
        acf_add_options_sub_page(array(
            'page_title'  => __('Advantages'),
            'menu_title'  => __('Advantages'),
            'parent_slug' => $option_page['menu_slug'],
        ));
        acf_add_options_sub_page(array(
            'page_title'  => __('Gallery block'),
            'menu_title'  => __('Gallery block'),
            'parent_slug' => $option_page['menu_slug'],
        ));
        acf_add_options_sub_page(array(
            'page_title'  => __('Contact Form'),
            'menu_title'  => __('Contact Form'),
            'parent_slug' => $option_page['menu_slug'],
        ));
    }
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="elementor-item"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');