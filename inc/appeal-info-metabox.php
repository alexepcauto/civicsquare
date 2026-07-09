<?php


function civicsquare_appeal_info_metabox() {


    add_meta_box(

        'appeal_info',

        'Информация об обращении',

        'civicsquare_appeal_info_callback',

        'appeal',

        'normal',

        'high'

    );


}


add_action(
    'add_meta_boxes',
    'civicsquare_appeal_info_metabox'
);



function civicsquare_appeal_info_callback($post) {


    $name = get_post_meta(
        $post->ID,
        '_appeal_name',
        true
    );


    $email = get_post_meta(
        $post->ID,
        '_appeal_email',
        true
    );


    $phone = get_post_meta(
        $post->ID,
        '_appeal_phone',
        true
    );


    $deputy_id = get_post_meta(
        $post->ID,
        '_appeal_deputy',
        true
    );


    $ip = get_post_meta(
        $post->ID,
        '_appeal_ip',
        true
    );


    ?>


    <p>
        <strong>ФИО:</strong><br>
        <?php echo esc_html($name); ?>
    </p>


    <p>
        <strong>Email:</strong><br>
        <?php echo esc_html($email); ?>
    </p>


    <p>
        <strong>Телефон:</strong><br>
        <?php echo esc_html($phone); ?>
    </p>


    <p>
        <strong>Депутат:</strong><br>

        <?php

        if ($deputy_id) {

            echo esc_html(
                get_the_title($deputy_id)
            );

        }

        ?>

    </p>


    <p>
        <strong>IP:</strong><br>
        <?php echo esc_html($ip); ?>
    </p>


    <?php


}
