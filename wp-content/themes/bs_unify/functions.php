<?php

function bs_unify_theme_style(){
	wp_enqueue_style( 'global_css1', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'global_css2', get_template_directory_uri() . '/assets/css/style.css' );
	
	wp_enqueue_style( 'hf_css1', get_template_directory_uri() . '/assets/css/headers/header-default.css' );
	wp_enqueue_style( 'hf_css2', get_template_directory_uri() . '/assets/css/footers/footer-v1.css' );
	
	wp_enqueue_style( 'plugins_css1', get_template_directory_uri() . '/assets/plugins/animate.css' );
	wp_enqueue_style( 'plugins_css2', get_template_directory_uri() . '/assets/plugins/line-icons/line-icons.css' );
	wp_enqueue_style( 'plugins_css3', get_template_directory_uri() . '/assets/plugins/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_style( 'page_css', get_template_directory_uri() . '/assets/css/pages/blog.css' );
	
	wp_enqueue_style( 'theme_css1', get_template_directory_uri() . '/assets/css/theme-colors/default.css' );
	wp_enqueue_style( 'theme_css2', get_template_directory_uri() . '/assets/css/theme-skins/dark.css' );

	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/assets/css/custom.css' );
	
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}

add_action('wp_enqueue_scripts', 'bs_unify_theme_style');


function bs_unify_theme_js(){
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/plugins/jquery/jquery.min.js' );
	wp_enqueue_script( 'migrate_js', get_template_directory_uri() . '/assets/plugins/jquery/jquery-migrate.min.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js' );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js' );

}

add_action('wp_enqueue_scripts', 'bs_unify_theme_js');


?>