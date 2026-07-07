<?php

get_header();


?>


<section class="archive-page">

<div class="container">


<h1>

<?php single_cat_title(); ?>

</h1>


<div class="posts-grid">


<?php

while(have_posts()):

the_post();

?>


<article class="post-card">


<h2>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h2>


<?php the_excerpt(); ?>


</article>


<?php

endwhile;

?>


</div>


</div>

</section>


<?php

get_footer();

?>
