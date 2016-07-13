<?php 
	show_admin_bar( 0 );

	add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    include('includes/enqueue.php');
	include('includes/navigation.php');
	include('includes/axel_widgets.php');



	add_action('wp_enqueue_scripts','blog_load_css');
	add_action('wp_enqueue_scripts','blog_load_scripts');

	add_action('init','blog_navigation_menu');



	if(! function_exists('blog_main_nav')):
		function blog_main_nav(){
			  
			register_sidebar(array(
				'name'          => 'main nav',
				'id'            => 'main-nav',
				'description'   => 'Main Nav',
				'class'         => 'nav',
				
			));
		}
	endif;
	add_action('widgets_init','blog_main_nav'); 

 ?>