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



<?php

$files = get_post_meta(
    get_the_ID(),
    '_document_files',
    true
);


if ( ! empty($files) ) :

?>


<div class="document-files">


<h2>
Файлы документа
</h2>



<ul>


<?php foreach ( $files as $file ) :


$filename = basename($file);

$extension = strtolower(
    pathinfo($filename, PATHINFO_EXTENSION)
);


?>


<li>


<div class="document-file-info">


<span class="document-file-icon">

📄

</span>



<span class="document-file-name">

<?php echo esc_html($filename); ?>

</span>


</div>



<div class="document-file-actions">


<?php if ( $extension == 'pdf' ) : ?>


<a class="button"
href="<?php echo esc_url($file); ?>"
target="_blank">

Открыть PDF

</a>


<?php endif; ?>



<a class="button"
href="<?php echo esc_url($file); ?>"
download>

Скачать

</a>


</div>


</li>



<?php endforeach; ?>


</ul>


</div>



<?php endif; ?>


</article>



<?php

endwhile;

?>


</div>

</div>


<?php

get_footer();