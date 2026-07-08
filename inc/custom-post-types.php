<?php

function civicsquare_register_deputy_post_type() {

    register_post_type('deputy', array(

        'labels' => array(
            'name'          => 'Депутаты',
            'singular_name' => 'Депутат',
            'add_new_item'  => 'Добавить депутата',
            'edit_item'     => 'Редактировать депутата',
        ),

        'public' => true,

        'has_archive' => true,

        'rewrite' => array(
            'slug' => 'deputies'
        ),

        'menu_icon' => 'dashicons-businessperson',

        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),

        'show_in_rest' => true

    ));

}

add_action(
    'init',
    'civicsquare_register_deputy_post_type'
);