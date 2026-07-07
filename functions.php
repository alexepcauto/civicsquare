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


function civicsquare_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'gallery',
            'caption'
        )
    );

}

add_action(
    'after_setup_theme',
    'civicsquare_setup'
);

register_nav_menus(
    array(
        'primary' => 'Главное меню',
    )
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

function civicsquare_post_image() {


    if(has_post_thumbnail()){


        the_post_thumbnail(
            'large',
            array(
                'class' => 'news-thumbnail'
            )
        );


    } else {


        echo '<img 
        class="news-thumbnail"
        src="' 
        . get_template_directory_uri()
        . '/assets/images/default-news.jpg"
        alt="Муниципальная информация">';


    }

}
