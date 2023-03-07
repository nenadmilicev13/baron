<?php
/*------------------------------------------------------------------------------------------
     # CUSTOM POST TYPE
 ------------------------------------------------------------------------------------------*/
function nmtheme_post_type_name() {
    $singular = 'Custom Post';
    $plural = 'Custom Posts';
    $slug = str_replace( ' ', '_', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'nmtheme' ),
        'singular_name' 	  => __( $singular, 'nmtheme' ),
        'add_new' 		      => _x( 'Add New', 'nmtheme', 'nmtheme' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'nmtheme' ),
        'edit'		          => __( 'Edit', 'nmtheme' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'nmtheme' ),
        'new_item'	          => __( 'New ' . $singular, 'nmtheme' ),
        'view' 			      => __( 'View ' . $singular, 'nmtheme' ),
        'view_item' 		  => __( 'View ' . $singular, 'nmtheme' ),
        'search_term'   	  => __( 'Search ' . $plural, 'nmtheme' ),
        'parent' 		      => __( 'Parent ' . $singular, 'nmtheme' ),
        'not_found'           => __( 'No ' . $plural .' found', 'nmtheme' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'nmtheme' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-admin-post',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'nmtheme_post_type_name' );


/*------------------------------------------------------------------------------------------
     # CUSTOM POST TYPE - Taxonomy
 ------------------------------------------------------------------------------------------*/
function nmtheme_tax_category() {
    $singular = 'Category';
    $plural = 'Categories';
    $slug = str_replace( ' ', '_', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
    );
    register_taxonomy( 'cpt_categories', 'post_type_name', $args );
}
add_action( 'init', 'nmtheme_tax_category', 0 );
