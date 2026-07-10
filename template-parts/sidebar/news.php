<aside class="news-sidebar">


<div class="sidebar-widget">

<h2>
Последние новости
</h2>


<div class="sidebar-categories">

<?php

$categories = get_categories(
    array(
        'hide_empty' => false
    )
);


foreach($categories as $category):

?>

<a href="<?php echo get_category_link($category->term_id); ?>">

<?php echo $category->name; ?>

</a>


<?php endforeach; ?>

</div>


</div>



<div class="sidebar-widget">

<h2>
Новые материалы
</h2>


<?php

$sidebar_news = new WP_Query(

array(

'post_type' => 'post',

'posts_per_page' => 5

)

);


if($sidebar_news->have_posts()):


while($sidebar_news->have_posts()):

$sidebar_news->the_post();

?>


<div class="sidebar-news-item">

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>


<div class="sidebar-news-date">

<?php echo get_the_date(); ?>

</div>


</div>


<?php

endwhile;

wp_reset_postdata();


endif;

?>


</div>


</aside>