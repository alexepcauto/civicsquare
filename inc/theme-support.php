<?php


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