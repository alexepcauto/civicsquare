<?php


function civicsquare_enqueue_styles() {


    wp_enqueue_style(
        'civicsquare-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0'
    );

}


add_action(
    'wp_enqueue_scripts',
    'civicsquare_enqueue_styles'
);



function civicsquare_scripts(){


    wp_enqueue_script(
        'civicsquare-accessibility',
        get_template_directory_uri()
        . '/assets/js/accessibility.js',
        array(),
        '1.0',
        true
    );


}


add_action(
    'wp_enqueue_scripts',
    'civicsquare_scripts'
);