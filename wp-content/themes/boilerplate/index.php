<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package oak_theme
 */

get_header(); ?>

	<main id="primary" class="site-main">

	<?php get_component('mobile-nav'); ?>

		<?php
		while ( have_posts() ) : the_post();
		
			the_content();
		
		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_footer();