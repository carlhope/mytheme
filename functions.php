<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function add_bootstrap_CSS() {
   wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
   wp_enqueue_style( 'site-css', get_template_directory_uri() . '/style.css');
   wp_enqueue_script( 'bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js",array('jquery'));
   wp_enqueue_script( 'site-js', get_template_directory_uri() . '/js/site.js',array('jquery'));

   wp_register_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
   wp_register_style( 'site-css', get_template_directory_uri() . '/style.css');
   wp_register_script( 'bootstrap-js', "https://code.jquery.com/jquery-3.6.0.min.js",array('jquery'));
   wp_register_script( 'site-js', get_template_directory_uri() . '/js/site.js',array('jquery'));
   
}
add_action('wp_enqueue_scripts', 'add_bootstrap_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );
 
// Register navigation menus
 function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu-left',__( 'Footer Menu left' ));
    register_nav_menu('footer-menu-right',__( 'Footer Menu right' ));
    add_theme_support('menus');
  }
 
	
  
  
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );