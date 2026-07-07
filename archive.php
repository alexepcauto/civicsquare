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


<article class="post-card">


<h2>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h2>


<div class="post-date">

<?php echo get_the_date(); ?>

</div>


<p>

<?php

the_excerpt();

?>

</p>


</article>


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
