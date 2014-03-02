<?php
function new_post_type($title,$slug,$post_type,$support){
	$labels = array(
    'name'               => $title,
    'singular_name'      => $title,
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New '.$title,
    'edit_item'          => 'Edit '.$title,
    'new_item'           => 'New '.$title,
    'all_items'          => 'All '.$title,
    'view_item'          => 'View '.$title,
    'search_items'       => 'Search '.$title,
    'not_found'          => 'No '.$title.' found',
    'not_found_in_trash' => 'No '.$title.' found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => $title
    );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => $slug ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => $support
    );

  register_post_type( $post_type, $args );
}