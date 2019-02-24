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
		
			<?php get_template_part( 'template-parts/content/archive', get_post_type()); ?>
	
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();