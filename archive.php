<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Página de listagem
 * 
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/archive', get_post_type());

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_navigation(
				array(
					'prev_text' => 'Anterior',
					'next_text' => 'Próximo',
					'screen_reader_text' => ''
				));

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/archive', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();