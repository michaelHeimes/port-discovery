<?php
/**
 * 3D Lacrosse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 3D_Lacrosse
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function port_discovery_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on 3D Lacrosse, use a find and replace
		* to change 'lacrosse-3d' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lacrosse-3d', get_template_directory() . '/languages' );

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
	
	// Default thumbnail size
	set_post_thumbnail_size(150, 150, true);

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'lacrosse-3d' ),
	// 	)
	// );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'port_discovery_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);
}
add_action( 'after_setup_theme', 'port_discovery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function port_discovery_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'port_discovery_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'port_discovery_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function port_discovery_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lacrosse-3d' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lacrosse-3d' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'lacrosse-3d'),
		'description' => __('The offcanvas sidebar.', 'lacrosse-3d'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	
}
add_action( 'widgets_init', 'port_discovery_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function port_discovery_scripts() {
	wp_enqueue_style( 'lacrosse-3d-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lacrosse-3d-style', 'rtl', 'replace' );
	
	// Adding Adobe Fonts
	wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/tfl5wzf.css', array(), time(), false );
	
	wp_enqueue_style( 'lacrosse-3d-style-min', get_template_directory_uri() . '/assets/styles/style.min.css', array(), _S_VERSION );
	
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/scripts/app.min.js', array('jquery'), _S_VERSION, true );
	
	//wp_enqueue_script( 'lacrosse-3d-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'port_discovery_scripts' );


// Disable Tabelpress Stylesheet
add_filter( 'tablepress_use_default_css', '__return_false' );


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



// Additional Custom Functions

// WP Head and other cleanup functions
require_once(get_template_directory().'/inc/cleanup.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/inc/menu.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/inc/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/inc/page-navi.php'); 

// Adds site styles to the WordPress editor
require_once(get_template_directory().'/inc/editor-styles.php'); 

// ACF Options
require_once(get_template_directory().'/inc/acf-json.php');

// ACF json
require_once(get_template_directory().'/inc/acf-options.php');

// ACF Block
//require_once(get_template_directory().'/inc/acf-blocks.php');

// Disable Gutenberg
require_once(get_template_directory().'/inc/disable-gutenberg.php'); 

// Add Page Slug to Body Class
// require_once(get_template_directory().'/inc/page-slug-body-class.php');

// Remove Emoji Support
// require_once(get_template_directory().'/inc/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/inc/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/inc/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/inc/login.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/inc/admin.php'); 

// Sitemap Removal
require_once(get_template_directory().'/inc/sitemap-removal.php');

// Slugify
require_once(get_template_directory().'/inc/slugify.php');

// Image Sizes
require_once(get_template_directory().'/inc/image-sizes.php');