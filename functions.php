<?php 

function desingo_setup(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails',array('web-design', 'app-design', 'graphic-design' ));
  load_theme_textdomain('desingo', get_template_directory() . '/languages');
  add_theme_support( 'editor-styles' );
  //register menu
  register_nav_menus(array(
      'primary-menu' => __('Primary Menu','desingo')
  ));
}

add_action('after_setup_theme','desingo_setup');


function desingo_assets(){
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/8601036ebb.js', array(), null );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

  wp_enqueue_style( 'style-theme', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','desingo_assets');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> ' General Settings','desingo',
		'menu_title'	=> 'Desingo Settings','desingo',
		'menu_slug' 	=> 'desingo-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Desingo Header Settings','desingo',
		'menu_title'	=> 'Header','desingo',
		'parent_slug'	=> 'desingo-general-settings',
	));
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Desingo CTA Settings','desingo',
		'menu_title'	=> 'CTA','desingo',
		'parent_slug'	=> 'desingo-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Desingo Footer Settings','desingo',
		'menu_title'	=> 'Footer','desingo',
		'parent_slug'	=> 'desingo-general-settings',
	));
}

function desingo_custom_post_type() {
	register_post_type('web-design',
		array(
			'labels'      => array(
				'name'          => __('Web designs', 'desingo'),
				'singular_name' => __('Web design', 'desingo'),
			),
				'public'      => true,
				'has_archive' => true,
        'rewrite'     => array( 'slug' => 'web-design' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ) 
		)
	);
  register_post_type('app-design',
		array(
			'labels'      => array(
				'name'          => __('App design', 'desingo'),
				'singular_name' => __('App design', 'desingo'),
			),
				'public'      => true,
				'has_archive' => true,
        'rewrite'     => array( 'slug' => 'app-design' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ) 
		)
	);
  register_post_type('graphic-design',
		array(
			'labels'      => array(
				'name'          => __('graphic design', 'desingo'),
				'singular_name' => __('graphic design', 'desingo'),
			),
				'public'      => true,
				'has_archive' => true,
        'rewrite'     => array( 'slug' => 'graphic-design' ),
        'supports' => array( 'title', 'editor', 'thumbnail' ) 
		)
	);
}
add_action('init', 'desingo_custom_post_type');