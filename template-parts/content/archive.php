<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Mostragem de um conteúdo
 * 
 */
?>

<?php if ( have_posts() ) {
			
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content/loop', get_post_type());
	}

	the_posts_navigation(
		array(
			'prev_text' => 'Anterior',
			'next_text' => 'Próximo',
			'screen_reader_text' => ''
		));
} else {
	get_template_part( 'template-parts/content/loop', 'none' );

} ?>