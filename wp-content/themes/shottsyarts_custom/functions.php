<?php
/***********************************************************************************/
/* Define Constants */
/***********************************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('SCRIPTS', get_stylesheet_directory_uri()) . "/js";
define('IMAGES', THEMEROOT . '/images');

/***********************************************************************************/
/* Menus */
/***********************************************************************************/

function register_my_menus() {
	register_nav_menus(array(
		'top-menu' => __('Top Menu', 'sb'),
		'footer-menu' => __('Footer Menu', 'sb')
	));
}
add_action('init', 'register_my_menus'); 

/***********************************************************************************/
/* Theme Supports */
/***********************************************************************************/

add_theme_support( 'post-thumbnails' ); 


/***********************************************************************************/
/* Register Sidebars */
/***********************************************************************************/

if(function_exists('register_sidebar')) {

	// Page Sidebar Left
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'sb'),
		'id' => 'blog-sidebar',
		'description' => __('Custom sidebar built for the blog', 'sb'),
		'before_widget' => '<ul class="sidebar-widget">',
		'after_widget' => '</ul> <!-- end sidebar widget -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

	// Page Sidebar Left
	register_sidebar(array(
		'name' => __('Page Sidebar 1', 'sb'),
		'id' => 'page-sidebar-1',
		'description' => __('Sidebar 1 for standard pages', 'sb'),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div> <!-- end sidebar widget -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	
	// Page Sidebar Right
	register_sidebar(array(
		'name' => __('Page Sidebar 2', 'sb'),
		'id' => 'page-sidebar-2',
		'description' => __('Sidebar 2 for standard pages', 'sb'),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget' => '</div> <!-- end sidebar widget -->',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	
	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'sb' ),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The first footer widget area', 'sb' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'sb' ),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The second footer widget area', 'sb' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'sb' ),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The third footer widget area', 'sb' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Fourth Footer Widget Area', 'sb' ),
		'id' => 'footer-widget-area-4',
		'description' => __( 'The Fourth footer widget area', 'sb' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	// Area 6, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Copyright Text', 'sb' ),
		'id' => 'copyright-widget',
		'description' => __( 'Copyright Text', 'sb' ),
		'before_widget' => '<span id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</span>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}

/***********************************************************************************/
/* Wordpress Filters - Read More */
/***********************************************************************************/

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<p class="read_more"><a class="button blue_button" href="'. get_permalink($post->ID) . '">Read More</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/***********************************************************************************/
/* Enqueue Styles */
/***********************************************************************************/

/*function wptuts_styles_with_the_lot()
{
    // Register the style like this for a plugin:
    wp_register_style( 'custom-style', plugins_url( '/css/custom-style.css', __FILE__ ), array(), '20120208', 'all' );
    // or
    // Register the style like this for a theme:
    wp_register_style( 'custom-style', get_template_directory_uri() . '/css/custom-style.css', array(), '20120208', 'all' );
 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'custom-style' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_styles_with_the_lot' );*/

/***********************************************************************************/
/* Enqueue Scripts */
/***********************************************************************************/

function wptuts_scripts_with_jquery()
{

	// Deregister the included library
    wp_deregister_script( 'jquery' );
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', '//code.jquery.com/jquery-1.11.1.min.js', array(), null, false );
    
    // Register the script like this for a theme:
    wp_register_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array( 'jquery' ) );
    
    wp_register_script( 'general', get_template_directory_uri() . '/js/general.js', array( 'jquery' ));
    
    wp_register_script( 'flexslider', get_template_directory_uri() . '/assets/flexslider/jquery.flexslider-min.js');
    
    wp_register_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js');
    
    wp_register_script( 'scrollToLocal', get_template_directory_uri() . '/js/jquery.localScroll.min.js');
 
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'general' );
    wp_enqueue_script( 'html5shiv' );
    wp_enqueue_script( 'flexslider' );
    wp_enqueue_script( 'scrollTo' );
    wp_enqueue_script( 'scrollToLocal' );
}

add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );

/***********************************************************************************/
/* Brian Dominey Image */
/***********************************************************************************/

function change_my_wp_login_image() {
echo "
<style>
body.login #login h1 a {
background: url('http://briandominey.com/images/bdd-wp.png') 0 0 no-repeat transparent;
height:76px;
width:325px;
position: relative;
left: 0px;
 }
</style>
";
}
add_action("login_head", "change_my_wp_login_image");

function my_login_logo_url() {
    return 'http://briandominey.com/contact';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Brian Dominey Design';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/***********************************************************************************/
/* Included Functions */
/***********************************************************************************/

require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/themes/shottsyarts_custom/functions/shortcodes.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/themes/shottsyarts_custom/functions/metaboxes.php");

/***********************************************************************************/
/* Woo Commerce */
/***********************************************************************************/

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section class="woocommerce"><div class="inside">';
}

function my_theme_wrapper_end() {
  echo '</div></section>';
}

add_theme_support( 'woocommerce' );

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Appartment'
	$defaults['home'] = 'Home';
	return $defaults;
}

add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
 
    if (is_shop()) {
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    }
 
}

?>