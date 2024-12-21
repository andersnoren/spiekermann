<?php
/**
 * Spiekermann functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spiekermann
 * @since Spiekermann 1.0
 */


/**
 * Declare theme supports.
 *
 * @since Spiekermann 1.0
 * @return void
 */
function spiekermann_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'spiekermann_setup' );


/**
 * Enqueue stylesheets.
 *
 * @since Spiekermann 1.0
 * @return void
 */
function spiekermann_styles() {
	wp_enqueue_style( 'spiekermann-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'spiekermann' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'spiekermann_styles' );


/**
 * Enqueue scripts.
 *
 * @since Spiekermann 1.0
 * @return void
 */
function spiekermann_scripts() {
	wp_register_script( 'spiekermann-fitty', get_template_directory_uri() . '/assets/js/fitty/fitty.min.js', array(), '2.3.0' );

	wp_enqueue_script( 'spiekermann-index', get_template_directory_uri() . '/assets/js/index.js', array( 'spiekermann-fitty' ), wp_get_theme( 'spiekermann' )->get( 'Version' ), array( 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'spiekermann_scripts' );

/**
 * Register block styles.
 */
if ( ! function_exists( 'spiekermann_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Spiekermann 1.0
	 * @return void
	 */
	function spiekermann_block_styles() {

		register_block_style(
			'core/comment-edit-link',
			array(
				'name'	=> 'spiekermann-comment-edit-link',
				'label'	=> __( 'Button', 'spiekermann' )
			)
		);

		register_block_style(
			'core/comment-reply-link',
			array(
				'name'	=> 'spiekermann-comment-reply-link',
				'label'	=> __( 'Button', 'spiekermann' )
			)
		);

		register_block_style(
			'core/post-terms',
			array(
				'name'	=> 'spiekermann-post-terms-tag-icon',
				'label'	=> __( 'With tag icon', 'spiekermann' )
			)
		);

		register_block_style(
			'core/post-template',
			array(
				'name'	=> 'spiekermann-post-template-asymmetrical-grid',
				'label'	=> __( 'Asymmetrical grid', 'spiekermann' )
			)
		);

		register_block_style(
			'core/site-title',
			array(
				'name'	=> 'spiekermann-fitty',
				'label'	=> __( 'Resize text to fill available space', 'spiekermann' )
			)
		);
		
	}
endif;

add_action( 'init', 'spiekermann_block_styles' );


/**
 * Enqueue block stylesheets.
 */
if ( ! function_exists( 'spiekermann_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Spiekermann 1.0
	 * @return void
	 */
	function spiekermann_block_stylesheets() {

		/**
		 * Individual blocks.
		 */
		
		$spiekermann_styled_blocks = array(
			'core/button'        => 'button',
			'core/calendar'      => 'calendar',
			'core/comments'      => 'comments',
			'core/file'          => 'file',
			'core/footnotes'     => 'footnotes',
			'core/paragraph'     => 'paragraph',
			'core/post-template' => 'post-template',
			'core/post-terms'    => 'post-terms',
			'core/pullquote'     => 'pullquote',
			'core/search'        => 'search',
			'core/separator'     => 'separator',
			'core/table'         => 'table',
		);

		foreach ( $spiekermann_styled_blocks as $block_name_with_namespace => $block_name ) {
			wp_enqueue_block_style(
				$block_name_with_namespace,
				array(
					'handle' => 'spiekermann-' . $block_name,
					'src'    => get_template_directory_uri() . '/assets/css/blocks/' . $block_name . '.css',
					'path'   => get_template_directory() . '/assets/css/blocks/' . $block_name . '.css',
				)
			);
		}

		/**
		 * Pagination styles.
		 */

		$pagination_block_names = array(
			'core/comments-pagination',
			'core/post-navigation-link',
			'core/query-pagination',
		);

		foreach( $pagination_block_names as $block_name ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => 'spiekermann-pagination',
					'src'    => get_template_directory_uri() . '/assets/css/pagination.css',
					'path'   => get_template_directory() . '/assets/css/pagination.css',
				)
			);
		}

		wp_enqueue_block_style(
			'core/post-navigation-link',
			array(
				'handle' => 'spiekermann-pagination',
				'src'    => get_template_directory_uri() . '/assets/css/pagination.css',
				'path'   => get_template_directory() . '/assets/css/pagination.css',
			)
		);

	}
endif;

add_action( 'init', 'spiekermann_block_stylesheets' );


/**
 * Register pattern categories.
 */
if ( ! function_exists( 'spiekermann_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Spiekermann 1.0
	 * @return void
	 */
	function spiekermann_pattern_categories() {

		register_block_pattern_category(
			'spiekermann',
			array(
				'label'       => _x( 'Spiekermann', 'Block pattern category', 'spiekermann' ),
				'description' => __( 'Patterns included in the Spiekermann theme.', 'spiekermann' ),
			)
		);
	}
endif;

add_action( 'init', 'spiekermann_pattern_categories' );


/**
 * Register custom block bindings.
 */
if ( ! function_exists( 'spiekermann_register_block_bindings' ) ) :
	/**
	 * Register custom block bindings
	 *
	 * @since Spiekermann 1.0
	 * @return void
	 */
	function spiekermann_register_block_bindings() {

		/*
		 * Copyright character with current year.
		 */
		register_block_bindings_source( 
			'spiekermann/copyright-year', 
			array(
				'label'              => __( 'Copyright year', 'spiekermann' ),
				'get_value_callback' => 'spiekermann_block_binding_callback_copyright_year'
			)
		);
	}
endif;

add_action( 'init', 'spiekermann_register_block_bindings' );


/*
 * Block bindings callback:
 * Copyright character with current year.
 */
if ( ! function_exists( 'spiekermann_block_binding_callback_copyright_year' ) ) :
	/**
	 * Block bindings callback
	 * Copyright character with current year
	 *
	 * @since Spiekermann 1.0
	 * @return string
	 */
	function spiekermann_block_binding_callback_copyright_year() {
		return '&copy; ' . date( 'Y' );
	}
endif;
