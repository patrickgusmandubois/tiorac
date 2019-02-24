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
		
get_template_part( 'template-parts/content/archive', get_post_type());

get_footer();