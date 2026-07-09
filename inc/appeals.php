<?php


function civicsquare_handle_appeal_form() {


    if (
        ! isset($_POST['send_appeal'])
    ) {

        return;

    }


    if (
        ! isset($_POST['appeal_nonce']) ||
        ! wp_verify_nonce(
            $_POST['appeal_nonce'],
            'send_appeal'
        )

    ) {

        return;

    }


    $ip = $_SERVER['REMOTE_ADDR'];



    $recent_appeals = new WP_Query(array(

        'post_type' => 'appeal',

        'posts_per_page' => 1,

        'date_query' => array(

            array(

                'after' => '24 hours ago'

            )

        ),

        'meta_query' => array(

            array(

                'key' => '_appeal_ip',

                'value' => $ip,

                'compare' => '='

            )

        )

    ));



    if (
    $recent_appeals->have_posts()
) {


    $redirect = add_query_arg(
        'appeal_limit',
        '1',
        get_permalink()
    );


    wp_redirect(
        $redirect
    );


    exit;


}



    $name = sanitize_text_field(
        $_POST['name']
    );


    $email = sanitize_email(
        $_POST['email']
    );


    $phone = sanitize_text_field(
        $_POST['phone']
    );


    $message = sanitize_textarea_field(
        $_POST['message']
    );


    $deputy_id = intval(
        $_POST['deputy']
    );



    if (
        empty($name) ||
        empty($email)
    ) {

        wp_die(
            'Укажите ФИО и email.'
        );

    }



    $post_id = wp_insert_post(array(

    'post_type' => 'appeal',

    'post_title' => 'Обращение от ' . $name,

    'post_content' => $message,

    'post_status' => 'publish'

));


if (
    is_wp_error($post_id)
) {

    wp_die(
        $post_id->get_error_message()
    );

}


if (
    ! $post_id
) {

    wp_die(
        'Запись обращения не создана'
    );

}



    if (
        is_wp_error($post_id)
    ) {

        return;

    }



    /*
     * Сохраняем файлы
     */

    if (
        isset($_FILES['appeal_files'])
        &&
        ! empty($_FILES['appeal_files']['name'][0])
    ) {


        require_once(
            ABSPATH . 'wp-admin/includes/file.php'
        );


        require_once(
            ABSPATH . 'wp-admin/includes/media.php'
        );


        require_once(
            ABSPATH . 'wp-admin/includes/image.php'
        );



        $attachments = array();



        foreach (
            $_FILES['appeal_files']['name']
            as $key => $value
        ) {


            if (
                $_FILES['appeal_files']['size'][$key]
                >
                5 * 1024 * 1024
            ) {

                continue;

            }



            $_FILES['upload_file'] = array(

                'name' =>
                $_FILES['appeal_files']['name'][$key],

                'type' =>
                $_FILES['appeal_files']['type'][$key],

                'tmp_name' =>
                $_FILES['appeal_files']['tmp_name'][$key],

                'error' =>
                $_FILES['appeal_files']['error'][$key],

                'size' =>
                $_FILES['appeal_files']['size'][$key]

            );



            $attachment_id = media_handle_upload(
                'upload_file',
                $post_id
            );



            if (
                ! is_wp_error($attachment_id)
            ) {

                $attachments[] = $attachment_id;

            }


        }



        update_post_meta(
            $post_id,
            '_appeal_files',
            $attachments
        );


    }



    /*
     * Данные обращения
     */


    update_post_meta(
        $post_id,
        '_appeal_name',
        $name
    );


    update_post_meta(
        $post_id,
        '_appeal_email',
        $email
    );


    update_post_meta(
        $post_id,
        '_appeal_phone',
        $phone
    );


    update_post_meta(
        $post_id,
        '_appeal_ip',
        $ip
    );


    update_post_meta(
        $post_id,
        '_appeal_deputy',
        $deputy_id
    );



    wp_redirect(
        add_query_arg(
            'appeal_sent',
            '1',
            wp_get_referer()
        )
    );


    exit;


}



add_action(
    'init',
    'civicsquare_handle_appeal_form'
);