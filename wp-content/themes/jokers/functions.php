<?php
/**
 * jokers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jokers
 */

if ( ! function_exists( 'jokers_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jokers_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jokers, use a find and replace
		 * to change 'jokers' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jokers', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jokers' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jokers_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'jokers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jokers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jokers_content_width', 640 );
}
add_action( 'after_setup_theme', 'jokers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function jokers_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jokers' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jokers' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jokers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jokers_scripts() {

	wp_enqueue_style( 'jokers-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true);

	wp_enqueue_style('bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

	wp_enqueue_style( 'evenements', get_template_directory_uri() . '/layouts/evenements.css',false,'4.9.4','all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/layouts/responsive.css');
	wp_enqueue_style( 'header', get_template_directory_uri() . '/layouts/header.css',false,'4.9.4','all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'4.9.4','all');
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/layouts/footer.css',false,'4.9.4','all');
	wp_enqueue_style( 'fullPage-css', get_template_directory_uri() . '/layouts/jquery.fullPage.css',false,'4.9.4','all');

	wp_enqueue_script( 'jokers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', array(),'4.9.4', true );
	wp_enqueue_script( 'jokers-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'fullpage-js', get_template_directory_uri() . '/js/jquery.fullPage.js', array(), '4.9.4', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}



add_action( 'wp_enqueue_scripts', 'jokers_scripts' );

/**
 * Implement the custom templates
 */
get_template_part( 'template-parts/evenements.php', null );
get_template_part( 'template-parts/associations.php', null );
get_template_part( 'template-parts/contact.php', null );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
