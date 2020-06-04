<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oak_theme
 */

?>


<footer>
    <div class="footer__background__top"></div>
    <div class="footer__background__buttom"></div>
    <div class="container container--stick">

        <div class="footer">
            <div class="row">
                <div class="col">

                   

                    <div class="footer__nav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'Footer Navigation',
                                'menu_class'     => 'nav',
                                'container'      => 'nav'
                            ) );
                        ?>
                    </div>

                <div class="maps__container__info">
                    <p class="maps__container__info__navn">Hotel Marina</p>
                    <p class="maps__container__info__navn">Vedbæk Strandvej 391</p>
                    <p class="maps__container__info__navn">2950 Vedbæk</p>
                    <p class="maps__container__info__navn">Tlf: 45 89 17 11</p>
                    <div class="maps__container__info__social__container">
                        <p class="maps__container__info__social__paragraph">Find os på de sociale medier:</p>
                        <div class="maps__container__info__social">
                            <a class="maps__container__info__social__icons" href="https://www.instagram.com/hotelmarina.dk/"><?php get_icon('instagram') ?></a>
                            <a class="maps__container__info__social__icons" href="https://www.facebook.com/MarinaVedbaek/"><?php get_icon('facebook') ?></a>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
