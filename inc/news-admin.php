<?php

function civicsquare_change_post_labels($labels) {

    $labels->name = '📰 Новости';
    $labels->singular_name = 'Новость';

    $labels->add_new = 'Добавить новость';
    $labels->add_new_item = 'Добавить новость';

    $labels->edit_item = 'Редактировать новость';
    $labels->new_item = 'Новая новость';

    $labels->view_item = 'Посмотреть новость';

    $labels->search_items = 'Поиск новостей';

    $labels->not_found = 'Новости не найдены';

    return $labels;
}

add_filter(
    'post_type_labels_post',
    'civicsquare_change_post_labels'
);

function civicsquare_change_posts_menu() {

    global $menu;
    global $submenu;

    foreach ($menu as $key => $item) {

        if ($item[2] === 'edit.php') {

            $menu[$key][0] = '📰 Новости';

            break;
        }
    }


    if (isset($submenu['edit.php'])) {

        $submenu['edit.php'][5][0] = 'Все новости';

        $submenu['edit.php'][10][0] = 'Добавить новость';

    }

}

add_action(
    'admin_menu',
    'civicsquare_change_posts_menu',
    999
);