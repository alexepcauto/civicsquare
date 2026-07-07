<?php

get_header();

?>

<section class="hero">

    <div class="container">

        <h1>
            Город.<br>
            Люди.<br>
            Будущее.
        </h1>

        <a href="#" class="button">
            Получить услугу
        </a>

    </div>

</section>

<section class="latest-news">

<div class="container">


<h2 class="section-title">

Последние новости

</h2>



<div class="news-grid">


<?php


$news_query = new WP_Query(

array(

'post_type' => 'post',

'posts_per_page' => 3,

'category_name' => 'news',

)

);



if(
$news_query->have_posts()
):

while(
$news_query->have_posts()
):

$news_query->the_post();


?>


<article class="news-card">



<div class="news-image">

    <a href="<?php the_permalink(); ?>">

        <?php civicsquare_post_image(); ?>

    </a>

</div>


<div class="news-content">


<div class="news-date">

<?php echo get_the_date(); ?>

</div>



<h3>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h3>



<p>

<?php

the_excerpt();

?>

</p>



<a class="read-more"
href="<?php the_permalink(); ?>">

Подробнее →

</a>


</div>


</article>



<?php


endwhile;


wp_reset_postdata();


endif;


?>


</div>



<div class="news-button">


<a href="<?php echo get_category_link(
get_category_by_slug('news')->term_id
); ?>">

Все новости

</a>


</div>


</div>

</section>

<section class="big-cards">

    <div class="container">

<div class="card">

<?php

$news = get_category_by_slug('news');

?>


<h2>

<a href="<?php echo get_category_link($news->term_id); ?>">

Новости

</a>

</h2>


<p>
Последние события города.
</p>


</div>


<div class="card">


<?php

$media = get_category_by_slug('media');

?>


<h2>

<a href="<?php echo get_category_link($media->term_id); ?>">

Медиа

</a>

</h2>


<p>
Фото, видео и публикации.
</p>


</div>

    </div>

</section>


<section class="services">

    <div class="container">

        <article class="service-card">

            <h3>
                Новости
            </h3>

            <p>
                Последние события города.
            </p>

        </article>


        <article class="service-card">

            <h3>
                Муниципальные услуги
            </h3>

            <p>
                Получайте услуги онлайн.
            </p>

        </article>


        <article class="service-card">

            <h3>
                События
            </h3>

            <p>
                Культурная жизнь города.
            </p>

        </article>

    </div>

</section>


<?php

get_footer();
