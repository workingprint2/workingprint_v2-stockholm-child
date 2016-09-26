<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);


//


// Adds page name to body class
function body_class_names($classes) {
global $post;
$name = $post->post_name;
$classes[] = $name;
return $classes;
}

add_filter('body_class','body_class_names');

?>
