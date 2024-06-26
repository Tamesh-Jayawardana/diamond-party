<?php

add_action( 'init', 'register_blocks');

function register_blocks() {
	$labels = array(
		'name'                => _x( 'Custom Blocks', 'Post Type General Name', 'rozer' ),
		'singular_name'       => _x( 'Custom Block', 'Post Type Singular Name', 'rozer' ),
		'menu_name'           => __( 'Custom Blocks', 'rozer' ),
		'parent_item_colon'   => __( 'Parent Item:', 'rozer' ),
		'all_items'           => __( 'All Items', 'rozer' ),
		'view_item'           => __( 'View Item', 'rozer' ),
		'add_new_item'        => __( 'Add New Item', 'rozer' ),
		'add_new'             => __( 'Add New', 'rozer' ),
		'edit_item'           => __( 'Edit Item', 'rozer' ),
		'update_item'         => __( 'Update Item', 'rozer' ),
		'search_items'        => __( 'Search Item', 'rozer' ),
		'not_found'           => __( 'Not found', 'rozer' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'rozer' ),
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 29,
		'exclude_from_search' => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'menu_icon'           => 'dashicons-editor-kitchensink',
		'supports'            => [ 'title', 'thumbnail', 'elementor' ],
	);

	register_post_type( 'rt_custom_block', $args );

}

function edit_custom_blocks_columns( $columns ) {
	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __( 'Title', 'rozer' ),
		'shortcode' => __( 'Shortcode', 'rozer' ),
		'date' => __( 'Date', 'rozer' ),
	);
	return $columns;
}
add_filter( 'manage_edit-rt_custom_block_columns', 'edit_custom_blocks_columns' ) ;

function manage_custom_block_columns($column, $post_id) {
	switch( $column ) {
		case 'shortcode' :
			echo '[rt_custom_block id="'.$post_id.'"]';
		break;
	}
}
add_action( 'manage_rt_custom_block_posts_custom_column', 'manage_custom_block_columns', 10, 2 );

if( ! function_exists( 'custom_block_shortcode' ) ) {
	function custom_block_shortcode($atts) {
		extract(shortcode_atts(array(
			'id' => 0
		), $atts));

		if ( empty( $id ) ) {
			return '';
		}
		$elementor_instance = \Elementor\Plugin::instance();

		if ( class_exists( '\Elementor\Core\Files\CSS\Post' ) ) {
			$css_file = new \Elementor\Core\Files\CSS\Post( $id );
		} elseif ( class_exists( '\Elementor\Post_CSS_File' ) ) {
			// Load elementor styles.
			$css_file = new \Elementor\Post_CSS_File( $id );
		}
			$css_file->enqueue();

		return $elementor_instance->frontend->get_builder_content_for_display( $id );

	}
	add_shortcode( 'rt_custom_block', 'custom_block_shortcode' );
}
add_filter( 'single_template', 'load_canvas_template' );
function load_canvas_template( $single_template ) {
	global $post;

	if ( 'rt_custom_block' == $post->post_type ) {
		return ELEMENTOR_PATH . 'modules/page-templates/templates/canvas.php';
	}

	return $single_template;
}

