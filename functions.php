<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	// wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	// wp_enqueue_script('modernizr');

	if(is_production()){
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0');
		wp_enqueue_script('jquery');

		wp_register_script('global', get_bloginfo('template_url') . '/js/global.min.js', array('jquery'), false, true);
		wp_enqueue_script('global');
	}else{
		wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
		wp_enqueue_script('require');

		wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('require'), false, true);
		wp_enqueue_script('global');
	}

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');

	// wp_register_script('livereload', 'http://DEMO:35729/livereload.js?snipver=1', null, false, true);
	// wp_enqueue_script('livereload');
}

/**
 * Check if in production
 */
function is_production(){
  if(ENVIRONMENT == 'production'){
      return true;
  }else{
      return false;
  }
}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );

/******************************************************************************\
	Custom functions
\******************************************************************************/

/**
* Plugin 'Meta Box' van Rilwis
*
* URL: http://wordpress.org/plugins/meta-box/
*/
include 'metaboxes/metabox-DEMO-template.php';
