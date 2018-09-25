<?php
/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

// adding the thumbnail to the rest api 

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post', 'page', 'post_type'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}

/// Adding acf to theme. 

// 1. customize ACF path
add_filter('acf/settings/path', __NAMESPACE__. '\my_acf_settings_path');
function my_acf_settings_path( $path ) {
 // update path
 $path = get_stylesheet_directory() . '/mu-plugins/acf/';
 // return
 return $path; 
}
// 2. customize ACF dir
add_filter('acf/settings/dir', __NAMESPACE__ . '\my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 // update path
 $dir = get_stylesheet_directory_uri() . '/mu-plugins/acf/';
 // return
 return $dir; 
}
// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/mu-plugins/acf/acf.php' );

// Adding ACF to the rest API
include_once( get_stylesheet_directory() . '/mu-plugins/acf-rest/index.php' );

/////

function create_posttype() {
    
    /*register_post_type( 'cursos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cursos' ),
                'singular_name' => __( 'Curso' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cursos'),
        )
    );*/

    /*register_post_type( 'talleres',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Talleres' ),
                'singular_name' => __( 'Taller' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'talleres'),
        )
    );*/

    register_post_type( 'servicios',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'Servicio' )
            ),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'servicios'),
        )
    );

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

//options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page('opciones');
	
}
