<section class="big-cards">

    <div class="container">

        <div class="card">

            <?php

            $news = get_category_by_slug('news');

            ?>

            <h2>

                <a href="<?php echo get_category_link($news->term_id); ?>">

                    Новости

                </a>

            </h2>

            <p>
                Последние события города.
            </p>

        </div>


        <div class="card">

            <?php

            $media = get_category_by_slug('media');

            ?>

            <h2>

                <a href="<?php echo get_category_link($media->term_id); ?>">

                    Медиа

                </a>

            </h2>

            <p>
                Фото, видео и публикации.
            </p>

        </div>

    </div>

</section>

