<?php

function civicsquare_post_image() {

    if(has_post_thumbnail()) {

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
        . civicsquare_get_placeholder_image()
        . '"
        alt="Муниципальная информация">';

    }

}