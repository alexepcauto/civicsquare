<?php


function civicsquare_get_placeholder_image() {


    $placeholder = 'default-news.jpg';


    $categories = get_the_category();


    if ( ! empty($categories) ) {


        foreach($categories as $category) {


            switch($category->slug) {


                case 'prokuratura-informiruet':

                    $placeholder = 'placeholder-prosecutor.jpg';

                break;



                case 'sport':

               

                    $placeholder = 'placeholder-sport.jpg';

                break;
				
				case 'uvd-informiruet':


                    $placeholder = 'placeholder-police.jpg';

                break;



                case 'obshhestvo':

                    $placeholder = 'placeholder-community.jpg';

                break;



                case 'proisshestviya':

                    $placeholder = 'placeholder-police.jpg';

                break;



                case 'obyavleniya':

                    $placeholder = 'placeholder-community.jpg';

                break;



                case 'municzipalitet':

                case 'municzipalnyj-okrug':

                case 'sovet-deputatov':

                    $placeholder = 'placeholder-community.jpg';

                break;



                case 'news':

                case 'resheniya':

                    $placeholder = 'default-news.jpg';

                break;


            }


        }


    }


    return get_template_directory_uri()
    . '/assets/images/placeholders/'
    . $placeholder;


}