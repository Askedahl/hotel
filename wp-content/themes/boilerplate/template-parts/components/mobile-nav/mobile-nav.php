<?php
/*------------------------------------------------
# CASE ELEMENT COMPONENT
------------------------------------------------*/
$args = (object) $args; // Making it an object in case we for some reason get it as an array

?>

<div class="mobile-nav">
     <div class="mobile-navbar-container">
        <img src="<?= get_template_directory_uri() . '/assets/icons/mobile-menu-curve.svg'; ?>" alt="Oak Digitl Menu">
        <div class="burger-btn">
            <img class="burger-icon open active" src="<?= get_template_directory_uri() . '/assets/icons/burger.svg'; ?>" alt="Mobile Menu">
            <img class="burger-icon close" src="<?= get_template_directory_uri() . '/assets/icons/burger-close.svg'; ?>" alt="Mobile Menu Close">
        </div>
        <div class="mobile-navbar">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'Mobile Menubar',
                    'menu_id'        => 'primary-menu',
                ) );
            ?>
        </div>
    </div>
    <div class="burger-menu">
        <div class="burger-menu-container">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'Mobile Burger Menu',
                    'menu_id'        => 'burger-menu',
                ) );
            ?>
        </div>
    </div>
</div>




<script>
defer(function() {
	$(document).ready(function() {


        /*======================================
            MOBILE NAVIGATION
        ======================================*/
        window.burger_active = false;

        function toggleBurger() {
            jQuery('.burger-icon').removeClass('active');
			jQuery('body').removeClass('burger--active');
            if (window.burger_active) {
                jQuery('.burger-icon.open').addClass('active');
                jQuery('.burger-menu').removeClass('active');
            } else {
                jQuery('.burger-icon.close, .burger-menu').addClass('active');
				jQuery('body').addClass('burger--active');
            }
            window.burger_active = !window.burger_active;
        }

        jQuery(document).on('click', '.burger-btn', function () {
            toggleBurger();
        })

    });
});
</script>
