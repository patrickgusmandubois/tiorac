<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 * 
 * Rodapé do site
 * 
 */
?>

	</main><!-- #content -->

	<footer class="site-footer">
		<?php 
		rewind_posts();

		if ( is_front_page() ) {
			get_template_part( 'template-parts/footer/frontpage');
		}
		else {
			get_template_part( 'template-parts/footer/notFrontpage', get_post_type() );

			if  ( is_singular() ) {
				get_template_part( 'template-parts/footer/single', get_post_type() );
			}
			
			if ( is_archive() ) {
				get_template_part( 'template-parts/footer/archive', get_post_type() );
			}
		}
		?>
	</footer><!-- .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
