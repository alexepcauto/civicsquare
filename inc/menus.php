<?php


function civicsquare_register_menus() {


    register_nav_menus(

        array(

            'primary' => 'Главное меню',

            'footer'  => 'Меню в подвале',

        )

    );


}


add_action(
    'after_setup_theme',
    'civicsquare_register_menus'
);