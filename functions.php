<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles', 11);

function enqueue_parent_styles() {
    $version = wp_get_theme()->get('Version');
	$uri = get_stylesheet_directory_uri();
	
	// wp_enqueue_style('woovina-niche', $uri."/assets/css/niche-01.css", false, $version);
	wp_enqueue_style('woovina-child-custom', $uri."/assets/css/custom.css", false, $version);
}
