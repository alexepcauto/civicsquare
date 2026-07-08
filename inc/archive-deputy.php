<?php

get_header();

?>

<main class="page-content">

    <div class="container">

        <h1>

            Депутаты

        </h1>

        <?php

        if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();


                ?>

                <article class="deputy-card">

<div class="deputy-photo">

<?php

if ( has_post_thumbnail() ) {

    the_post_thumbnail(
        'medium',
        array(
            'class' => 'deputy-thumbnail'
        )
    );

} else {

    ?>

    <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/default-news.jpg"
        class="deputy-thumbnail"
        alt="Фото депутата">

    <?php

}

?>

</div>


                    <div class="deputy-content">

                        <h2>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_title(); ?>

                            </a>

                        </h2>

                        <?php the_content(); ?>

                    </div>

                </article>

                <?php

            endwhile;

        else :

            ?>

            <p>

                Пока депутаты не добавлены.

            </p>

            <?php

        endif;

        ?>

    </div>

</main>

<?php

get_footer();