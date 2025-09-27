<?php
function mindset_enqueues() {
    // LOAD NORMALIZE.CSS (OR OTHER CSS FILES)
    wp_enqueue_style( 
        'mindset-normalize', 
        'https://unpkg.com/@csstools/normalize.css', 
        array(), 
        '12.1.0'
    );
    // LOAD STYLE.CSS ON FRONT-END
	wp_enqueue_style( 
		'mindset-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);
    // LOAD JAVASCRIPT
    wp_enqueue_script(
    'script-name', 
    get_theme_file_uri( 'assets/js/example.js' ), 
    array(), 
    wp_get_theme()->get( 'Version' ), 
    array( 'strategy' => 'defer' ) 
    );

    // LOAD SCROLL TO TOP JS: 
    wp_enqueue_script(
    'mindset-scroll-to-top', 
    get_theme_file_uri( 'assets/js/scroll-to-top.js' ), 
    array(), 
    wp_get_theme()->get( 'Version' ), 
    array( 'strategy' => 'defer' ) 
    );

    if ( is_page( 'contact' ) ) { 
        wp_enqueue_script(
            'mindset-scroll-to-top-color',
            get_theme_file_uri( 'assets/js/scroll-to-top-color.js' ),
            array( 'mindset-scroll-to-top' ), 
            wp_get_theme()->get( 'Version' ),
            array( 'strategy' => 'defer' )
    );

    // wp_dequeue_style( 'wp-block-navigation' );

    // wp_dequeue_style( 
    //     'mindset-navigation',
    //     get_theme_file_uri( 'assets/css/navigation.css' ),
    //     array(),
    //     '12.1.0' 
// );
}

}
add_action( 'wp_enqueue_scripts', 'mindset_enqueues' );


// LOAD STYLE.CSS ON BACK-END
function mindset_setup() {
	add_editor_style( get_stylesheet_uri() );

    // Crop images to 400px by 500px
    add_image_size( '400x500', 400, 500, true );

    // Crop images to 200px by 250px
    add_image_size( '200x250', 200, 250, true );

    
    add_image_size( '400x200', 400, 200, true );


    add_image_size( '800x400', 800, 400, true );
}
add_action( 'after_setup_theme', 'mindset_setup' );


function mindset_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
		'400x500' => __( '400x500', 'mindset-theme' ),
		'200x250' => __( '200x250', 'mindset-theme' ),
		'400x200' => __( '400x200', 'mindset-theme' ),
		'800x400' => __( '800x400', 'mindset-theme' ),
	);
	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'mindset_add_custom_image_sizes' );

// LOAD CUSTOM BLOCKS
require get_theme_file_path() . '/mindset-blocks/mindset-blocks.php';

// REGISTER POST TYPES AND TAXONOMIES
require get_theme_file_path() . '/inc/post-types-taxonomies.php';



?>