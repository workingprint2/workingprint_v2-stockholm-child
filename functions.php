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


// Adds div

/* function content_add() {
    echo ( '<div id="test"></div>' );
}
add_action('wp_footer', 'content_add');
*/

/* or add JS similar to:
/* Theme Settings > General > Custom JS
jQuery('.q_logo').before('<div id="test">Some text</div>');
*/

// Adds JS file from plugins folder'
function wpb_adding_scripts() {
      wp_register_script('my_addit_script', plugins_url('js/addit.js', FILE), array('jquery'),'1.1', true);
     wp_enqueue_script('my_addit_script');
 } 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

?>
