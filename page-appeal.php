<?php

/*
Template Name: Appeal
*/

get_header();

?>

<div class="page-content">

<div class="container">


<?php

if (
    isset($_GET['appeal_limit'])
) :

?>

<div class="appeal-error">

Вы сможете отправить обращение повторно через 24 часа.

</div>

<?php

elseif (
    isset($_GET['appeal_sent'])
) :

?>

<div class="appeal-success">

Ваше обращение принято. Спасибо!

</div>

<?php

endif;

?>


<h1>
Обращение к депутату
</h1>



<form 
class="appeal-form"
method="post"
enctype="multipart/form-data">


<?php wp_nonce_field('send_appeal','appeal_nonce'); ?>


<label>
Выберите депутата
</label>


<select name="deputy">


<option value="">
Выберите депутата
</option>


<?php


$deputies = new WP_Query(array(

    'post_type' => 'deputy',

    'posts_per_page' => -1,

    'orderby' => 'title',

    'order' => 'ASC'

));


if ( $deputies->have_posts() ) :


while ( $deputies->have_posts() ) :


$deputies->the_post();


?>


<option value="<?php echo get_the_ID(); ?>">

<?php the_title(); ?>

</option>


<?php


endwhile;


wp_reset_postdata();


endif;


?>


</select>


<br><br>


<label>
Ваше имя
</label>


<input 
type="text"
name="name"
required>



<label>
Email
</label>


<input 
type="email"
name="email"
required>



<label>
Телефон
</label>


<input 
type="text"
name="phone">



<label>
Текст обращения
</label>


<textarea
name="message"
rows="8"
required></textarea>



<label>
Приложить файлы
</label>


<input
type="file"
name="appeal_files[]"
multiple>


<p class="appeal-file-help">

Можно прикрепить до 3 файлов.
Разрешены JPG, PNG, PDF.
Размер одного файла — не более 2 МБ.

</p>



<label>

<input
type="checkbox"
name="consent"
required>

Я согласен на обработку персональных данных

</label>


<br>


<button 
type="submit"
name="send_appeal"
class="button">

Отправить обращение

</button>


</form>


</div>

</div>


<?php

get_footer();

?>