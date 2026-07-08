</main>


<footer class="site-footer">

    <div class="container footer-grid">


        <div class="footer-brand">

            <h3>
                <?php bloginfo('name'); ?>
            </h3>

            <p>
                Официальный сайт муниципальной информации.
            </p>

        </div>



        <div class="footer-navigation">

            <h4>
                Разделы
            </h4>


            <?php

            wp_nav_menu(

                array(

                    'theme_location' => 'footer',

                    'container' => false,

                    'fallback_cb' => false

                )

            );

            ?>


        </div>




        <div class="footer-contact">

            <h4>
                Контакты
            </h4>


            <p>
                Администрация муниципального округа
            </p>

            <p>
                Телефон: +00 000 000 00 00
            </p>

        </div>


    </div>



    <div class="footer-bottom">

        <div class="container">

            © <?php echo date('Y'); ?>

            <?php bloginfo('name'); ?>


        </div>

    </div>


</footer>


<?php wp_footer(); ?>

</body>

</html>