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
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>
			
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'black-digital' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
