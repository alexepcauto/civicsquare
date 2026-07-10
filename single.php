<?php

get_header();

?>


<section class="single-post">

<div class="container">


<div class="single-layout">


<main class="single-content">


<?php

while(have_posts()):

the_post();

?>


<article>


<h1>
<?php the_title(); ?>
</h1>


<div class="post-meta">

<?php echo get_the_date(); ?>

</div>


<div class="single-image">

<?php civicsquare_post_image(); ?>

</div>


<div class="post-content">

<?php

the_content();

?>

</div>


</article>


<?php

endwhile;

?>


</main>


<?php

get_template_part(
    'template-parts/sidebar/news'
);

?>


</div>







</div>


</div>

</section>


<?php

get_footer();

?>