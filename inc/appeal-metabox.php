<?php


function civicsquare_appeal_files_metabox() {


    add_meta_box(

        'appeal_files',

        'Файлы обращения',

        'civicsquare_appeal_files_callback',

        'appeal',

        'normal',

        'high'

    );


}


add_action(
    'add_meta_boxes',
    'civicsquare_appeal_files_metabox'
);



function civicsquare_appeal_files_callback($post) {


    $files = get_post_meta(

        $post->ID,

        '_appeal_files',

        true

    );


    if (
        empty($files)
    ) {

        echo '<p>Файлов нет.</p>';

        return;

    }


    echo '<ul>';


    foreach (
        $files as $file_id
    ) {


        $url = wp_get_attachment_url(
            $file_id
        );


        $name = basename($url);


        echo '<li>';

        echo '📎 ';

        echo '<a href="' 
            . esc_url($url) 
            . '" target="_blank">';

        echo esc_html($name);

        echo '</a>';

        echo '</li>';


    }


    echo '</ul>';


}
