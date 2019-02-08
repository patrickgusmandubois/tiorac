<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Página base
 * 
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/archive' );
			}

			// Previous/next page navigation.
			the_posts_navigation(
				array(
					'prev_text' => 'Anterior',
					'next_text' => 'Próximo',
					'screen_reader_text' => ''
				));

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/archive', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
