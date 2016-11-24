<?php 

add_action( 'after_setup_theme', 'wp_broot_setup' );
add_theme_support( 'post-thumbnails' );
function wp_broot_setup() {
    add_theme_support( 'post-thumbnails' );
	add_image_size( 'category-120-120', 120, 120 );
	add_image_size( 'category-150-180', 150, 180 );
	add_image_size( 'category-45-45', 45, 45 );
	add_image_size( 'category-60-100', 60, 100 );
	
	add_image_size( 'front-news', 170, 80);
}
?>
<?php

add_action( 'after_setup_theme', 'meat_setup' );

function meat_setup() {
	add_theme_support( 'post-thumbnails' );
}

function meat_get_block_part($slug, $name) {
	get_template_part('blocks' . DIRECTORY_SEPARATOR . $slug, $name);
}
?>
