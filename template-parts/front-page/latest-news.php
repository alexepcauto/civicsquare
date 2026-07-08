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

