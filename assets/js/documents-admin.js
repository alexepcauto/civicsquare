jQuery(document).ready(function($){

    $('#add-document-file').on('click', function(e){

        e.preventDefault();


        let frame = wp.media({

            title: 'Выберите файл документа',

            button: {
                text: 'Добавить'
            },

            multiple: true

        });


        frame.on('select', function(){

            let attachments = frame.state()
                .get('selection')
                .toJSON();


            attachments.forEach(function(file){

                $('#document-files').append(

                    '<p>' +
                    '<input type="text" name="document_files[]" value="' + file.url + '" style="width:80%;"> ' +
                    '<button class="button remove-file">Удалить</button>' +
                    '</p>'

                );

            });

        });


        frame.open();

    });



    $(document).on(
        'click',
        '.remove-file',
        function(e){

            e.preventDefault();

            $(this)
                .parent()
                .remove();

        }
    );


});
