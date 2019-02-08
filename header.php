<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Template do cabeçalho das páginas
 * 
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="site-header">
		<?php
			if ( function_exists( 'the_custom_logo' ) ) {
				the_custom_logo();
			}
		?>

		<?php 
		if ( is_front_page() ) {
			get_template_part( 'template-parts/header/frontpage');
		}
		else {
			get_template_part( 'template-parts/header/notFrontpage', get_post_type() );

			if  ( is_singular() ) {
				get_template_part( 'template-parts/header/single', get_post_type() );
			}

			if ( is_archive() ) {
				get_template_part( 'template-parts/header/archive', get_post_type() );
			}
		}

		rewind_posts(); ?>
	</header><!-- .site-header -->

	<div id="content" class="site-content">