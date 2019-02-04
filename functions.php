<?php
/**
 *
 * @link https://blackdigital.com.br
 *
 * @package BlackDigital
 * @subpackage BaseTheme
 */

 require_once get_template_directory() . '/admin/class-update-manager.php';
 require_once get_template_directory() . '/admin/class-managertheme.php';
//teste_n

if ( ! function_exists( 'blackdigital_setup' ) ) :

	function blackdigital_setup() {
		//Suporte a TAG Title no Head
		add_theme_support( 'title-tag' );

		//Suporte ao editor de logo pro tema
		/*add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);*/

		//Suporte a imagens wide do editor
		add_theme_support( 'align-wide' );

		//load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );
		//add_theme_support( 'automatic-feed-links' );
		
		//add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 1568, 9999 );
		/*register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);*/

		/*add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);*/
		

		//add_theme_support( 'customize-selective-refresh-widgets' );
		//add_theme_support( 'wp-block-styles' );
		//add_theme_support( 'editor-styles' );
		//add_editor_style( 'style-editor.css' );

		/*add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);*/

		/*add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'twentynineteen' ),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'twentynineteen' ),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'twentynineteen' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'twentynineteen' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'twentynineteen' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);*/

		//add_theme_support( 'responsive-embeds' );

		$updateManager = UpdateManager::get_instance();
		$updateManager->insertToUpdate("Black Digital", get_template_directory(), "origin", "master");

		$plugin = new ManagerTheme();
    	$plugin->init();
	}
endif;
add_action( 'after_setup_theme', 'blackdigital_setup' );

function blackdigital_widgets_init() {

	/*register_sidebar(
		array(
			'name'          => __( 'Footer', 'twentynineteen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);*/

}
add_action( 'widgets_init', 'blackdigital_widgets_init' );



function blackdigital_scripts() {
	wp_enqueue_style( 'blackdigital-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	//wp_style_add_data( 'twentynineteen-style', 'rtl', 'replace' );
	wp_enqueue_style( 'blackdigital-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}
add_action( 'wp_enqueue_scripts', 'blackdigital_scripts' );

/*
function twentynineteen_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix' );
*/

require_once get_template_directory() . '/classes/tgm-plugin-activation.php';