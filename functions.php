<?php
/**
 * bildit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bildit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bildit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bildit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bildit, use a find and replace
		 * to change 'bildit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bildit', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'bildit' ),
				'footer' => esc_html__( 'Footer', 'bildit' ),
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
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bildit_custom_background_args',
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
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bildit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bildit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bildit_content_width', 640 );
}
add_action( 'after_setup_theme', 'bildit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bildit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bildit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bildit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bildit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bildit_scripts() {
	wp_enqueue_style( 'bildit-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bildit-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bildit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bildit_scripts' );

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
/**ACF Sub options**/
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Header');
  acf_add_options_sub_page('Footer');
}

if (function_exists('acf_set_options_page_menu')){
  acf_set_options_page_menu('Global Options');
}

/**CPT Careers **/
if ( ! function_exists('Career') ) {

// Register Custom Post Type
function Career() {

	$labels = array(
		'name'                  => _x( 'Careers', 'Post Type General Name', '_scorch' ),
		'singular_name'         => _x( 'Career', 'Post Type Singular Name', '_scorch' ),
		'menu_name'             => __( 'Careers', '_scorch' ),
		'name_admin_bar'        => __( 'Careers', '_scorch' ),
		'archives'              => __( 'Career Archives', '_scorch' ),
		'parent_item_colon'     => __( 'Parent Career:', '_scorch' ),
		'all_items'             => __( 'All Careers', '_scorch' ),
		'add_new_item'          => __( 'Add New Career', '_scorch' ),
		'add_new'               => __( 'Add New', '_scorch' ),
		'new_item'              => __( 'New Career', '_scorch' ),
		'edit_item'             => __( 'Edit Career', '_scorch' ),
		'update_item'           => __( 'Update Career', '_scorch' ),
		'view_item'             => __( 'View Career', '_scorch' ),
		'search_items'          => __( 'Search Career', '_scorch' ),
		'not_found'             => __( 'Not found', '_scorch' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '_scorch' ),
		'featured_image'        => __( 'Featured Image', '_scorch' ),
		'set_featured_image'    => __( 'Set featured image', '_scorch' ),
		'remove_featured_image' => __( 'Remove featured image', '_scorch' ),
		'use_featured_image'    => __( 'Use as featured image', '_scorch' ),
		'insert_into_item'      => __( 'Insert into Career', '_scorch' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Career', '_scorch' ),
		'items_list'            => __( 'Careers list', '_scorch' ),
		'items_list_navigation' => __( 'Careers list navigation', '_scorch' ),
		'filter_items_list'     => __( 'Filter Careers list', '_scorch' ),
	);
	$args = array(
		'label'                 => __( 'Career', '_scorch' ),
		'description'           => __( 'Create a Career Listing', '_scorch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( '', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'Careers',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
         
        
	);
	register_post_type( 'Career', $args );

}
add_action( 'init', 'Career', 0 );

}
function wpdocs_create_book_tax() {
    register_taxonomy( 'career_category', 'career', array(
        'label'        => __( 'career categories', 'textdomain' ),
        'rewrite'      => array( 'slug' => 'career_category' ),
        'hierarchical' => true,
    ) );
}
add_action( 'init', 'wpdocs_create_book_tax', 0 );
/**SVG Upload**/
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

remove_filter('the_content', 'wpautop');
?>
<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>
<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );
?>
<?php
add_filter( 'the_category_list', static function( $categories ){
    // Loop through all the categories that are found
    foreach ( $categories as $index => $category ) {
        // if the category object slug equals "uncategorized"
        if ( $category->slug === 'uncategorized' ) :
            // remove it from the list of categories
            unset($categories[$index]);
        endif;
    }
    // return the categories
    return $categories;
});