<?php
$base = get_template_directory_uri() . '/';
$assets = $base . "assets" . "/";
$images = $assets . "images" . "/";
$current_lang = pll_current_language() == "en" ? true : false;
$site_url = get_site_url();
$lang_code = $current_lang ? 'en' : 'ar';
// load assets
if (!function_exists("load_theme_assets")) {
    function load_theme_assets()
    {
        global $base;
        // styles
        if(pll_current_language()=="en"){
            wp_enqueue_style('addc_bootstrap_css', $base . 'assets/css/bootstrap.min.css', [], null);
            wp_enqueue_style('addc_fontawesome', $base . 'assets/css/all.min.css', [], null);
            wp_enqueue_style('addc_swiper_css', $base . 'assets/css/swiper-bundle.min.css', [], null);
            wp_enqueue_style('addc_main_style', $base . 'assets/css/style.css', [], null);
            wp_enqueue_style('addc_sweet', $base . 'assets/css/sweetalert2.min.css', [], null);
        }else{
            wp_enqueue_style('addc_bootstrap_css', $base . 'assets/css/bootstrap.rtl.min.css', [], null);
            wp_enqueue_style('addc_fontawesome', $base . 'assets/css/all.min.css', [], null);
            wp_enqueue_style('addc_swiper_css', $base . 'assets/css/swiper-bundle.min.css', [], null);
            wp_enqueue_style('addc_main_style', $base . 'assets/css/style.css', [], null);
            wp_enqueue_style('addc_main_style', $base . 'assets/css/style_rtl.css', [], null);
            wp_enqueue_style('addc_main_style_rtl', $base . 'assets/css/style_rtl.css', [], null);
        }

        // script
        wp_enqueue_script('addc_bootstrap_js', $base . 'assets/js/bootstrap.min.js', [], null, true);
        wp_enqueue_script('addc_swiper_js', $base . 'assets/js/swiper-bundle.min.js', [], null, true);
        wp_enqueue_script('addc_main_js', $base . 'assets/js/script.js', [], null, true);
        wp_enqueue_script('addc_sweet', $base . 'assets/js/sweetalert2.all.min.js', [], null, true);
        wp_localize_script('addc_main_js', 'ajaxData', [
            'ajax_url'=> admin_url('admin-ajax.php'),
            'direction'=> $current_lang ? 'ltr':'rtl'
        ]);
    }
    add_action('wp_enqueue_scripts', 'load_theme_assets');
}

// theme support
if (!function_exists("theme_support")) {
    function theme_support()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('block-templates');
    }
    add_action('after_setup_theme', 'theme_support');
}

// change dashboard font
if (!function_exists("load_assets_dash")) {
    function load_assets_dash()
    {
        global $base;
        // styles
        wp_enqueue_style('addc_bootstrap_css', $base . 'assets/css/dash.css', [], null);
    }
    add_action('admin_enqueue_scripts', 'load_assets_dash');
}

if (!function_exists('hide_admin_bar')) {
    function hide_admin_bar()
    {
        if(current_user_can('administrator'))
            add_filter('show_admin_bar', '__return_false');
    }
    hide_admin_bar();
}



require_once get_template_directory() . "/inc/string_restrations.php";
require_once get_template_directory() . "/inc/ajax-actions.php";
require_once get_template_directory() . "/inc/meta_boxes.php";
