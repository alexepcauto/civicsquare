<?php

get_header();

?>

<div class="page-content">

<div class="container">


<h1>
Документы
</h1>


<?php


if ( have_posts() ) :


while ( have_posts() ) :

the_post();


?>


<article class="document-card">


<h2>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h2>


<div class="document-excerpt">

<?php the_excerpt(); ?>

</div>


<a class="button"
href="<?php the_permalink(); ?>">

Открыть

</a>


</article>


<?php


endwhile;


else:


?>


<p>
Документы пока не добавлены.
</p>


<?php

endif;


?>


</div>

</div>


<?php

get_footer();