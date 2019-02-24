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

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		if (is_archive()) {
			get_template_part( 'template-parts/content/loop', get_post_type()  );
		} else {
			get_template_part( 'template-parts/content/single' );
		}
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
	get_template_part( 'template-parts/content/loop', 'none' );

}
	
get_footer();
