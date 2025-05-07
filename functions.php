<?php
function mytheme_enqueue_styles() {
	wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_register_menus() {
	register_nav_menus(array(
		'main_menu' => 'Main Menu',
	));
}
add_action('after_setup_theme', 'mytheme_register_menus');
require get_template_directory() . '/customizer.php';
