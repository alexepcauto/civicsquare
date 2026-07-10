<?php

get_header();

?>


<section class="archive-page">

<div class="container">


<header class="archive-header">

<h1>

<?php

the_archive_title();

?>

</h1>


<?php

the_archive_description();

?>

</header>



<div class="posts-grid">


<?php

if(have_posts()):


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


<?php

endwhile;


endif;

?>


</div>


</div>

</section>



<?php

get_footer();

?>
