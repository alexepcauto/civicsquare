<?php
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
