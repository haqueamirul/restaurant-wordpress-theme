<?php
/**
 * The Custom Post
 *
 * @package softretaura
 *
	==========================================
	 Custom Post Type
	==========================================
*/

add_action('init','softrestaura_custom_post');

function softrestaura_custom_post (){
	
		$labels = array(
        'name'                => _x( 'Our Menu', 'Our Menu', 'softretaura' ),
        'singular_name'       => _x( 'Our Menu', 'Our Menu', 'medisoft-2' ),
        'menu_name'           => __( 'Menus', 'softretaura' ),
        'parent_item_colon'   => __( 'Parent Item:', 'softretaura' ),
        'all_items'           => __( 'All Items', 'softretaura' ),
        'view_item'           => __( 'View Item', 'softretaura' ),
        'add_new_item'        => __( 'Add New Item', 'softretaura' ),
        'add_new'             => __( 'Add New', 'softretaura' ),
        'edit_item'           => __( 'Edit Item', 'softretaura' ),
        'update_item'         => __( 'Update Item', 'softretaura' ),
        'search_items'        => __( 'Search Item', 'softretaura' ),
        'not_found'           => __( 'Not found', 'softretaura' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'softretaura' ),
    );
    $args = array(
        'label'               => __( 'Menus', 'softretaura' ),
        'description'         => __( 'Our Menu', 'softretaura' ),
        'labels'              => $labels,
        'supports'            => array( 'title' ),
        'taxonomies'          => array( 'menucategory', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-images-alt2',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'ourmenu', $args );
}


/*
	==========================================
	 Custom Texanomi
	==========================================
*/

add_action('init','softrestaura_custom_texanomi'); 

function softrestaura_custom_texanomi() {
	
	//add new taxonomy hierarchical
	$labels = array(
		'name' => 'Menu Category',
		'singular_name' => 'Menu Category',
		'search_items' => 'Search Menu Category',
		'all_items' => 'All Menu Category',
		'parent_item' => 'Parent Menu Category',
		'parent_item_colon' => 'Parent Menu Category:',
		'edit_item' => 'Edit Menu Category',
		'update_item' => 'Update Menu Category',
		'add_new_item' => 'Add New Work Menu Category',
		'new_item_name' => 'New Menu Category Name',
		'menu_name' => 'Menu Category'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'menucategory' )
	);
	
	register_taxonomy('menucategory', array('ourmenu'), $args);
}
	
