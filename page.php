<?php

get_header();

?>


<section class="page-content">

<div class="container">


<?php

while(have_posts()):

the_post();

?>


<h1>
<?php the_title(); ?>
</h1>


<div class="content">

<?php

the_content();

?>

</div>


<?php

endwhile;

?>


</div>

</section>


<?php

get_footer();

?>
