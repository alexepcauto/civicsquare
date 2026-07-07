<?php

get_header();

?>


<section class="single-post">

<div class="container">


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


<?php

if(has_post_thumbnail()):

the_post_thumbnail(
    'large'
);

endif;

?>


<div class="post-content">

<?php

the_content();

?>

</div>


</article>


<?php

endwhile;

?>


</div>

</section>


<?php

get_footer();

?>
