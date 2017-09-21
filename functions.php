<?php
/**
 * convectium functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package convectium
 */

if ( ! function_exists( 'convectium_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function convectium_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on convectium, use a find and replace
		 * to change 'convectium' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'convectium', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'convectium' ),
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
		add_theme_support( 'custom-background', apply_filters( 'convectium_custom_background_args', array(
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
add_action( 'after_setup_theme', 'convectium_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function convectium_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'convectium_content_width', 640 );
}
add_action( 'after_setup_theme', 'convectium_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function convectium_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'convectium' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'convectium' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'convectium_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function convectium_scripts() {
/*wp_enqueue_style( 'convectium-style', get_stylesheet_uri() );*/


wp_register_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
wp_enqueue_style('Font_Awesome');

	wp_enqueue_script( 'convectium-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'convectium-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );



    wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.1.1.min.js', null, null, true );
    wp_enqueue_script('jQuery');

    wp_register_script( 'cloudFlare', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', null, null, true );
    wp_enqueue_script('cloudFlare');

    wp_register_script( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('bootstrapcdn');

    wp_enqueue_script( 'convectium-scroll-reveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array(), '', true );
    wp_enqueue_script( 'convectium-popper', get_template_directory_uri() . '/vendor/popper/popper.min.js', array(), '', true );
	wp_enqueue_script( 'convectium-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), '', true );

	wp_enqueue_script( 'convectium-magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), '', true );

	wp_enqueue_script( 'convectium-cretive', get_template_directory_uri() . '/js/creative.js', array(), '', true );





	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'convectium_scripts' );

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


//REMOVE HARDCODED IMAGE
/**
* This is a modification of image_downsize() function in wp-includes/media.php
* we will remove all the width and height references, therefore the img tag
* will not add width and height attributes to the image sent to the editor.
*
* @param bool false No height and width references.
* @param int $id Attachment ID for image.
* @param array|string $size Optional, default is 'medium'. Size of image, either array or string.
* @return bool|array False on failure, array on success.
*/
function myprefix_image_downsize( $value = false, $id, $size ) {
if ( !wp_attachment_is_image($id) )
return false;
$img_url = wp_get_attachment_url($id);
$is_intermediate = false;
$img_url_basename = wp_basename($img_url);
// try for a new style intermediate size
if ( $intermediate = image_get_intermediate_size($id, $size) ) {
$img_url = str_replace($img_url_basename, $intermediate['file'], $img_url);
$is_intermediate = true;
}
elseif ( $size == 'thumbnail' ) {
// Fall back to the old thumbnail
if ( ($thumb_file = wp_get_attachment_thumb_file($id)) && $info = getimagesize($thumb_file) ) {
$img_url = str_replace($img_url_basename, wp_basename($thumb_file), $img_url);
$is_intermediate = true;
}
}
// We have the actual image size, but might need to further constrain it if content_width is narrower
if ( $img_url) {
return array( $img_url, 0, 0, $is_intermediate );
}
return false;
}

/* Remove the height and width refernces from the image_downsize function.
* We have added a new param, so the priority is 1, as always, and the new
* params are 3.
*/
add_filter( 'image_downsize', 'myprefix_image_downsize', 1, 3 );



/* REMOVE duplicate DATES */
function jl_remove_post_dates() {
	add_filter('the_date', '__return_false');
	add_filter('the_time', '__return_false');
	/*add_filter('the_modified_date', '__return_false');*/
	add_filter('get_the_date', '__return_false');
	/*add_filter('get_the_time', '__return_true');*/
	/*add_filter('get_the_modified_date', '__return_false');*/
} add_action('loop_start', 'jl_remove_post_dates');




// Changing excerpt more
//THIS IS A CUSTOM FUNCTION THAT WORKS WITH get_excerpt() call
//THIS IS ON HOME PAGE
function get_excerpt($limit, $source = null){
    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 140, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'... <a class="btn btn-primary c-the-excerpt-button" href="'.get_permalink($post->ID).'">READ MORE</a>';
    return $excerpt;
}

//post feed excerpt
function wpse_280633_break_text( $content ) {
    if ( is_main_query() && ! is_singular() ) {
        $length = 1000;
        if(strlen($content)<$length+10) return $content;//don't cut if too short

        $break_pos = strpos($content, ' ', $length);//find next space after desired length
        $visible = substr($content, 0, $break_pos);
        $content = balanceTags($visible) . "... <a href='".get_permalink($post->ID)."'> READ MORE</a>";
    }

    return $content;
}
add_filter( 'the_content', 'wpse_280633_break_text' );

