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
            'slug' => 'deputies',
            'with_front' => false
        ),

        'menu_icon' => 'dashicons-businessperson',

        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),

        'show_in_rest' => true,
		'query_var' => true

    ));

}


add_action(
    'init',
    'civicsquare_register_deputy_post_type'
);



function civicsquare_register_document_post_type() {

    register_post_type('document', array(

        'labels' => array(
            'name'          => 'Документы',
            'singular_name' => 'Документ',
            'add_new_item'  => 'Добавить документ',
            'edit_item'     => 'Редактировать документ',
        ),

        'public' => true,

        'publicly_queryable' => true,

        'has_archive' => true,

        'rewrite' => array(
            'slug' => 'documents',
            'with_front' => false
        ),

        'menu_icon' => 'dashicons-media-document',

        'supports' => array(
            'title',
            'editor'
        ),

        'show_in_rest' => true,
		'query_var' => true

    ));

}


add_action(
    'init',
    'civicsquare_register_document_post_type'
);




function civicsquare_document_files_metabox() {

    add_meta_box(
        'document_files',
        'Файлы документа',
        'civicsquare_document_files_callback',
        'document',
        'normal',
        'high'
    );

}


add_action(
    'add_meta_boxes',
    'civicsquare_document_files_metabox'
);




function civicsquare_document_files_callback($post) {

    $files = get_post_meta(
        $post->ID,
        '_document_files',
        true
    );

    wp_nonce_field(
        'save_document_files',
        'document_files_nonce'
    );

    ?>

    <div id="document-files">

        <?php if ( ! empty($files) ) : ?>

            <?php foreach ( $files as $file ) : ?>

                <p>

                    <input 
                    type="text"
                    name="document_files[]"
                    value="<?php echo esc_url($file); ?>"
                    style="width:80%;"
                    >

                    <button class="button remove-file">
                        Удалить
                    </button>

                </p>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>


    <button 
    type="button" 
    class="button"
    id="add-document-file">

        Добавить файл

    </button>


    <?php

}

function civicsquare_register_appeal_post_type() {


    register_post_type('appeal', array(

        'labels' => array(

            'name'          => 'Обращения',

            'singular_name' => 'Обращение',

            'add_new_item'  => 'Добавить обращение',

            'edit_item'     => 'Редактировать обращение',

        ),


        'public' => false,


        'show_ui' => true,


        'menu_icon' => 'dashicons-email-alt',


        'supports' => array(

            'title',

            'editor'

        ),


        'show_in_rest' => true

    ));


}


add_action(

    'init',

    'civicsquare_register_appeal_post_type'

);