<?php

get_header();

?>

<div class="page-content">

    <div class="container">

        <?php

        if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();

                ?>

                <article class="single-deputy">

                    <div class="single-deputy-profile">


                        <div class="deputy-profile-photo">


                            <?php

                            if ( has_post_thumbnail() ) {

                                the_post_thumbnail(
                                    'large',
                                    array(
                                        'class' => 'deputy-single-thumbnail'
                                    )
                                );

                            }

                            ?>


                        </div>



                        <div class="deputy-profile-content">


                            <h1>

                                <?php the_title(); ?>

                            </h1>



                            <div class="deputy-description">

                                <?php the_content(); ?>

                            </div>



                            <a class="button"
                               href="<?php echo get_post_type_archive_link('deputy'); ?>">

                                Все депутаты

                            </a>


                        </div>


                    </div>


                </article>


                <?php

            endwhile;

        endif;

        ?>


    </div>

</div>

<?php

get_footer();