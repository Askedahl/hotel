<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oak_theme
 */
?>
<!--

Author:: Oak Digital
hello@oakdigital.com

-->

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<meta name="msapplication-TileColor" content="#32348C">
	<meta name="theme-color" content="#32348C">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="text/javascript">
function defer(method) {
    if (window.jQuery) {
        method();
    } else {
        setTimeout(function() { defer(method) }, 50);
    }
}
</script>

<div id="page" class="site">

	<?php get_component('mobile-nav'); ?>

		<div class="block" style="position: relative; z-index: 99; margin: 0;">
			<div class="background__header"></div>
			<a href="<?= get_home_url() ?>">
			</a>
				<div class="container">
				<div class="header__branding">

					<a href="<?= get_home_url() ?>">
						<?= get_icon('Hotelmarina_2020_logo_messing') ?>
					</a>

				</div>
					<header id="header">
						<div class="row">
							<div class="col header__container">

								<div class="header__left-menu">
									<?php
									wp_nav_menu( array(
										'theme_location' => 'Desktop Main1',
										'menu_class'     => 'nav',
										'container'      => 'nav'
									) );
									?>
								</div>

								<div class="header__branding__white">

									<a href="<?= get_home_url() ?>">
										<?= get_icon('Hotelmarina_2020_logo_messing') ?>
									</a>

								</div>

								<div class="header__right-menu">
									<?php
									wp_nav_menu( array(
										'theme_location' => 'Desktop Main2',
										'menu_class'     => 'nav',
										'container'      => 'nav'
									) );
									?>
								</div>
							
							</div>
						</div>
					</header>
				</div>

		</div>

	
</div>



<script>

$(document).ready(function() {
  //change the integers below to match the height of your upper div, which I called
  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
  //to figure out what the scroll position is when exactly you want to fix the nav
  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
  //you know the position.
  $(window).scroll(function () { 


    if ($(window).scrollTop() > 150) {
	  $('#header').addClass('fixed');
	  $('.background__header').addClass('fixed2');
	  $('.header__branding__white').addClass('header__branding__white__small');
    }

    if ($(window).scrollTop() < 151) {
	  $('#header').removeClass('fixed');
	  $('.background__header').removeClass('fixed2');
	  $('.header__branding__white').removeClass('header__branding__white__small');
    }
  });
});




</script>
