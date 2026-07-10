<?php


function civicsquare_get_placeholder_image() {


    $image = 'placeholder-community.jpg';


    $categories = get_the_category();


    if( ! empty($categories) ) {


        $slug = $categories[0]->slug;


        switch($slug) {


            case 'prokuratura-informiruet':

                $image = 'placeholder-prosecutor.jpg';

            break;



            case 'sport':

                $image = 'placeholder-sport.jpg';

            break;



            case 'uvd-informiruet':

                $image = 'placeholder-police.jpg';

            break;



            case 'obshhestvo':

                $image = 'placeholder-community.jpg';

            break;



            case 'kultura':

                $image = 'placeholder-culture.jpg';

            break;


        }

    }


    return get_template_directory_uri()
    . '/assets/images/'
    . $image;


}