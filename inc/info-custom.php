<?php

if (function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'Настройки темы',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="elementor-item"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');