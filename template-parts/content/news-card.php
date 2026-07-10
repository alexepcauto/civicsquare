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