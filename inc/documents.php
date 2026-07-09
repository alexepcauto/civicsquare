<?php
function civicsquare_document_admin_scripts($hook) {

    global $post;

    if (
        ($hook == 'post-new.php' || $hook == 'post.php')
        &&
        isset($post)
        &&
        $post->post_type == 'document'
    ) {

        wp_enqueue_media();

    }

}

add_action(
    'admin_enqueue_scripts',
    'civicsquare_document_admin_scripts'
);

function civicsquare_documents_admin_scripts($hook) {

    global $post;


    if (
        ($hook == 'post-new.php' || $hook == 'post.php')
        &&
        isset($post)
        &&
        $post->post_type == 'document'
    ) {

        wp_enqueue_script(
            'civicsquare-documents-admin',
            get_template_directory_uri() . '/assets/js/documents-admin.js',
            array('jquery'),
            null,
            true
        );

    }

}

add_action(
    'admin_enqueue_scripts',
    'civicsquare_documents_admin_scripts'
);

function civicsquare_save_document_files($post_id) {


    if (
        !isset($_POST['document_files_nonce'])
        ||
        !wp_verify_nonce(
            $_POST['document_files_nonce'],
            'save_document_files'
        )
    ) {

        return;

    }


    if (
        defined('DOING_AUTOSAVE')
        &&
        DOING_AUTOSAVE
    ) {

        return;

    }


    if (
        get_post_type($post_id) != 'document'
    ) {

        return;

    }


    if (
        isset($_POST['document_files'])
    ) {


        $files = array_map(
            'esc_url_raw',
            $_POST['document_files']
        );


        update_post_meta(
            $post_id,
            '_document_files',
            $files
        );


    } else {


        delete_post_meta(
            $post_id,
            '_document_files'
        );


    }


}


add_action(
    'save_post_document',
    'civicsquare_save_document_files'
);