<?php
// update_option('siteurl','http://www.howsyourblood.com/');
// update_option('home','http://www.howsyourblood.com/');

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'fancybox-styles', get_stylesheet_directory_uri() . '/css/jquery.fancybox.css' );
    wp_enqueue_style( 'fullpage-style', get_stylesheet_directory_uri() . '/css/jquery.fullpage.css' );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'overflow-script', get_stylesheet_directory_uri() . '/js/scrolloverflow.min.js' );
    wp_enqueue_script( 'fullpage-script', get_stylesheet_directory_uri() . '/js/jquery.fullpage.js' );
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'fancybox-scripts', get_stylesheet_directory_uri() . '/js/jquery.fancybox.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array(), false);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_localize_script( 'main-script', 'ajax',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        )
    );
}

register_nav_menus( array(
    'hcp' => __( 'HCP Menu' ),
) );

register_nav_menus( array(
    'hecp' => __( 'HECP Menu' ),
) );

//ajax script

add_action("wp_ajax_track_quiz_results", "track_quiz_results");
add_action("wp_ajax_nopriv_track_quiz_results", "track_quiz_results");

function track_quiz_results() {
    //
}