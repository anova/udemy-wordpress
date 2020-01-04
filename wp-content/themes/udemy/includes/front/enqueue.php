<?php

function udemy_enqueue() {
    $uri = get_theme_file_uri();
    $version = UDEMY_DEV_MODE ? time() : false;
    wp_register_style( 'udemy_google_fonts'  , 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i' );
    wp_register_style( 'udemy_bootstrap'     , $uri . '/assets/css/bootstrap.css', [], $version );
    wp_register_style( 'udemy_style'         , $uri . '/assets/css/style.css', [], $version );
    wp_register_style( 'udemy_dark'          , $uri . '/assets/css/dark.css', [], $version );
    wp_register_style( 'udemy_font-icons'    , $uri . '/assets/css/font-icons.css', [], $version );
    wp_register_style( 'udemy_animate'       , $uri . '/assets/css/animate.css', [], $version );
    wp_register_style( 'udemy_magnific-popup', $uri . '/assets/css/magnific-popup.css', [], $version );
    wp_register_style( 'udemy_custom'        , $uri . '/assets/css/custom.css', [], $version );
    wp_register_style( 'udemy_responsive'    , $uri . '/assets/css/responsive.css', [], $version );

    wp_enqueue_style( 'udemy_google_fonts' );
    wp_enqueue_style( 'udemy_bootstrap' );
    wp_enqueue_style( 'udemy_style' );
    wp_enqueue_style( 'udemy_dark' );
    wp_enqueue_style( 'udemy_font-icons' );
    wp_enqueue_style( 'udemy_animate' );
    wp_enqueue_style( 'udemy_magnific-popup' );
    wp_enqueue_style( 'udemy_custom' );
    wp_enqueue_style( 'udemy_responsive' );

    wp_register_script( 'udemy_plugins', $uri . '/assets/js/plugins.js', [ 'jquery' ], $version, true );
    wp_register_script( 'udemy_functions', $uri . '/assets/js/functions.js', [ 'jquery' ], $version, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'udemy_plugins' );
    wp_enqueue_script( 'udemy_functions' );
}