<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">


<div class="top-bar">

    <div class="container top-bar-inner">


        <div class="branding">

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                alt="<?php bloginfo('name'); ?>"
                >

                <span>
                    <?php bloginfo('name'); ?>
                </span>

            </a>

        </div>


        <div class="accessibility">

            <button 
                class="accessibility-button"
                id="accessibility-toggle">

                Версия для слабовидящих

            </button>

            <div 
class="accessibility-panel"
id="accessibility-panel">


<div class="container">

<h3>
Настройки отображения
</h3>


<div class="accessibility-controls">


<button data-size="normal">
А
</button>


<button data-size="large">
А+
</button>


<button data-size="extra">
А++
</button>


<button data-contrast="high">
Высокий контраст
</button>


</div>

</div>


</div>

        </div>


        <div class="appeal">

            <a href="#">
                Приём обращений
            </a>

        </div>


    </div>

</div>



<nav class="main-navigation">

    <div class="container">


        <?php

        wp_nav_menu(
            array(

                'theme_location' => 'primary',

                'container' => false,

                'menu_class' => 'main-menu-list'

            )
        );

        ?>


    </div>

</nav>


</header>


<main class="site-content">