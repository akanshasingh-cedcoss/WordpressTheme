<?php
/**
 * abc-blog.php functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package abc-blog.php
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (! function_exists('abc_blog_php_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function abc_blog_php_setup()
	{
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on abc-blog.php, use a find and replace
	* to change 'abc-blog-php' to the name of your theme in all the template files.
	*/
		load_theme_textdomain('abc-blog-php', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
		add_theme_support('title-tag');
	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
		add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
			   'menu-1' => esc_html__('Primary', 'abc-blog-php'),
			)
		);

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
			  'script',)
		);

	// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'abc_blog_php_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

	// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
			)
		);
	}
endif;
add_action('after_setup_theme', 'abc_blog_php_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function abc_blog_php_content_width()
{
	$GLOBALS['content_width'] = apply_filters('abc_blog_php_content_width', 640);
}
add_action('after_setup_theme', 'abc_blog_php_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function abc_blog_php_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'abc-blog-php'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'abc-blog-php'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'abc_blog_php_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function abc_blog_php_scripts()
{
	wp_enqueue_style('abc-blog-php-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('abc-blog-php-style', 'rtl', 'replace');
	wp_enqueue_script('abc-blog-php-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_style('flex-slider', get_template_directory_uri() . '/css/flex-slider.css', false, '1.1', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.css', false, '1.1', 'all');
	wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.css', false, '1.1', 'all');
	wp_enqueue_style('templatemo-stand-blog', get_template_directory_uri() . '/css/templatemo-stand-blog.css', false, '1.1', 'all');
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');
	wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, '1.1', 'all');
	wp_enqueue_script('abc-blog-php-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-accordions', get_template_directory_uri() . '/js/accordions.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-customizer', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-isotope', get_template_directory_uri() . '/js/isotope.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-owl', get_template_directory_uri() . '/js/owl.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-slick', get_template_directory_uri() . '/js/slick.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('abc-blog-php-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'abc_blog_php_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_menuclass($ulclass)
{
	return preg_replace('/<a/', '<a class="nav-link"', $ulclass, -1);
}

add_filter('wp_nav_menu', 'add_menuclass');

function cq_pagination( $pages = '', $range = 4 )
	{
		$showitems = ($range * 2)+1;
		global $paged;
		if ( empty ( $paged )) $paged = 1;
			if( $pages == '' )
			{
				global $wp_query;
				$pages = $wp_query->max_num_pages;
				if (!$pages )
					{
						$pages = 1;
					}
			}
		if(1 != $pages)
		{
			echo "<nav aria-label='Page navigation example'>  <ul class='pagination'> <span>Page ".$paged." of ".$pages."</span>";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
			for ($i=1; $i <= $pages; $i++)
			{
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				{
					echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
				}
			}
			if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
			echo "</ul></nav>\n";
		}
  }