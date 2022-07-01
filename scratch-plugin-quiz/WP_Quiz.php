<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package loveus
 */

class WP_Quiz {
 
	public $plugin_url;

	public function __construct() {

			$this->plugin_url = plugin_dir_url( __FILE__ );

			add_action( 'init', array( $this, 'wpq_add_custom_post_type' ) );
			add_action( 'init', array( $this,'wpq_create_taxonomies' ), 0 );

	}

	function wpq_create_taxonomies() {
 
    register_taxonomy(
        'quiz_categories',
        'wptuts_quiz',
        array(
            'labels' => array(
                'name' => 'Quiz Category',
                'add_new_item' => 'Add New Quiz Category',
                'new_item_name' => "New Quiz Category"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
 
}

	public function wpq_add_custom_post_type() {

			$labels = array(
					'name' => _x( 'Questions', 'wptuts_quiz' ),
					'menu_name' => _x( 'WPTuts Quiz', 'wptuts_quiz' ),
					'add_new' => _x( 'Add New ', 'wptuts_quiz' ),
					'add_new_item' => _x( 'Add New Question', 'wptuts_quiz' ),
					'new_item' => _x( 'New Question', 'wptuts_quiz' ),
					'all_items' => _x( 'All Questions', 'wptuts_quiz' ),
					'edit_item' => _x( 'Edit Question', 'wptuts_quiz' ),
					'view_item' => _x( 'View Question', 'wptuts_quiz' ),
					'search_items' => _x( 'Search Questions', 'wptuts_quiz' ),
					'not_found' => _x( 'No Questions Found', 'wptuts_quiz' ),
			);

			$args = array(
					'labels' => $labels,
					'hierarchical' => true,
					'description' => 'WP Tuts Quiz',
					'supports' => array( 'title', 'editor' ),
					'public' => true,
					'show_ui' => true,
					'show_in_menu' => true,
					'show_in_nav_menus' => true,
					'publicly_queryable' => true,
					'exclude_from_search' => false,
					'has_archive' => true,
					'query_var' => true,
					'can_export' => true,
					'rewrite' => true,
					'capability_type' => 'post'
			);

			register_post_type( 'wptuts_quiz', $args );
	}
}

</aside>