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

<div class="container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			the_content();
			?>
	</article><!-- #post-${ID} -->
</div>