<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Página simples
 * 
 */

get_header();


/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/single', get_post_type() );

	/*the_posts_navigation(
		array(
			'prev_text' => 'Anterior',
			'next_text' => 'Próximo',
			'screen_reader_text' => ''
		));*/

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.

get_footer();