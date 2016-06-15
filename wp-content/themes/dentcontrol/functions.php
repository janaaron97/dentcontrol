<?php 
function deepSpaceRobotsResources(){

wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "deepSpaceRobotsResources");

require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dentcontrol' ),
) );

/*
add_action('init','register_team_post_type');
function register_team_post_type()
{
	//Custom Post Type Lables
	$labels = array(
	  'name' => _x('Team', 'post type general name','dentcontrol'),
	  'singular_name' => _x('Team', 'post type singular name','dentcontrol'),
	  'add_new' => _x('Add New', 'Team Member','dentcontrol'),
	  'add_new_item' => __('Add New Team Member','dentcontrol'),
	  'edit_item' => __('Edit Team Member','dentcontrol'),
	  'new_item' => __('New Team Member','dentcontrol'),
	  'view_item' => __('View Team','dentcontrol'),
	  'search_items' => __('Search Team Members','dentcontrol'),
	  'not_found' =>  __('Nothing found','dentcontrol'),
	  'not_found_in_trash' => __('Nothing found in Trash','dentcontrol'),
	  'parent_item_colon' => ''
	 );

	//Custom Post Type Arguments
	 $args = array(
	  'labels' => $labels,
	  'public' => true,
	  'has_archive' => true,
	  'publicly_queryable' => true,
	  'show_ui' => true,
	  'query_var' => true,
	  'rewrite' => true,
	  'capability_type' => 'post',
	  'hierarchical' => true,
	  'menu_position' => null,
	  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields'  )
	   );

	//Register Custom Post Type.
	 register_post_type( 'team' , $args );
}

*/
?>