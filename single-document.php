<?php

get_header();

?>

<div class="page-content">

<div class="container">


<?php


while ( have_posts() ) :

the_post();


?>


<article class="single-document">


<h1>

<?php the_title(); ?>

</h1>


<div class="document-content">

<?php the_content(); ?>

</div>


</article>


<?php

endwhile;

?>


</div>

</div>


<?php

get_footer();
