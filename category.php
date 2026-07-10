<?php

get_header();

?>

<section class="archive-page">

<div class="container">


<div class="archive-layout">


<main class="archive-content">


<h1>

<?php single_cat_title(); ?>

</h1>


<div class="news-grid">


<?php

while(have_posts()):

the_post();

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

<?php the_excerpt(); ?>

</p>


<a class="read-more"
href="<?php the_permalink(); ?>">

Подробнее →

</a>


</div>


</article>


<?php

endwhile;

?>


</div>


</main>


<?php

get_template_part(
    'template-parts/sidebar/news'
);

?>


</div>


</div>

</section>


<?php

get_footer();

?>