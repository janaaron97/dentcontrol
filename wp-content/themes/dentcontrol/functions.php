<?php 
function deepSpaceRobotsResources(){

wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "deepSpaceRobotsResources");

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

?>