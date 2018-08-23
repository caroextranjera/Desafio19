<?php  

function register_enqueue_style(){
	$theme_data = wp_get_theme();


wp_register_style('mitemacss', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');
wp_register_style ('animatescss-css', get_theme_file_uri('css/animate.css'), null, $theme_data->get( 'Version' ), 'screen');

wp_register_style ('icomooncss-css', get_theme_file_uri('css/icomoon.css'), null,  $theme_data->get( 'Version' ), 'screen');

wp_register_style ('bootstrap-css', get_theme_file_uri('css/bootstrap.css'), null, $theme_data->get( 'Version' ), 'screen');

wp_register_style ('owl.carousel-css', get_theme_file_uri('css/owl.carousel.min.css'), null,  $theme_data->get( 'Version' ), 'screen');

wp_register_style ('owl.theme-css', get_theme_file_uri('css/owl.theme.default.min.css'), null,  $theme_data->get( 'Version' ), 'screen');

wp_register_style ('style-css', get_theme_file_uri('css/style.css'), null,  $theme_data->get( 'Version' ), 'screen');

wp_enqueue_style('mitemacss');
wp_enqueue_style('animatescss-css');
wp_enqueue_style('icomooncss-css');
wp_enqueue_style('bootstrap-css');
wp_enqueue_style('owl.carousel-css');
wp_enqueue_style('owl.theme-css');
wp_enqueue_style('style-css');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

wp_deregister_script( 'jquery' );
wp_deregister_script( 'jquery-migrate' );



wp_register_script('modernizr-2', get_parent_theme_file_uri('js/modernizr-2.6.2.min.js'), array('jQuery_migrate'), null, true);

//wp_register_script('respond', get_parent_theme_file_uri('js/respond.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('jquery3', get_parent_theme_file_uri('js/jquery.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('easingJquery', get_parent_theme_file_uri('js/jquery.easing.1.3.js'),  array('jQuery_migrate'), null, true);

wp_register_script('bootstrap', get_parent_theme_file_uri('js/bootstrap.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('waypoints', get_parent_theme_file_uri('js/jquery.waypoints.min.js'), array('jQuery_migrate'), null, true);

wp_register_script('carousel', get_parent_theme_file_uri('js/owl.carousel.min.js'), array('jQuery_migrate'), null,  true);

wp_register_script('main', get_parent_theme_file_uri('js/main.js'), array('jQuery_migrate'), null,  true);

wp_enqueue_script('modernizr-2');
//wp_enqueue_script('respond');
wp_enqueue_script('jquery3');
wp_enqueue_script('easingJquery');
wp_enqueue_script('bootstrap');
wp_enqueue_script('waypoints');
wp_enqueue_script('carousel');
wp_enqueue_script('main');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


if (function_exists('register_nav_menus')) {
	register_nav_menus (array('superior' => 'Menú principal superior'));
}


?>