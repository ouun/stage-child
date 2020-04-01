<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_script( 'stage-child/vendor.js', asset( 'scripts/vendor.js' )->uri(), array( 'jquery' ), null, true );
		wp_enqueue_script(
			'stage-child/app.js',
			asset( 'scripts/app.js' )->uri(),
			array(
				'stage-child/vendor.js',
				'jquery',
			),
			null,
			true
		);

		wp_add_inline_script( 'stage-child/vendor.js', asset( 'scripts/manifest.js' )->contents(), 'before' );

		if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_style( 'stage-child/app.css', asset( 'styles/app.css' )->uri(), false, null );
	},
	100
);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action(
	'enqueue_block_editor_assets',
	function () {
		if ( $manifest = asset( 'scripts/manifest.asset.php' )->get() ) {
            wp_enqueue_script('stage-child/vendor.js', asset('scripts/vendor.js')->uri(), $manifest['dependencies'], null, true);
            wp_enqueue_script('stage-child/editor.js', asset('scripts/editor.js')->uri(), ['stage-child/vendor.js'], null, true);

            wp_add_inline_script('stage-child/vendor.js', asset('scripts/manifest.js')->contents(), 'before');
		}

		wp_enqueue_style( 'stage-child/editor.css', asset( 'styles/editor.css' )->uri(), false, null );
	},
	100
);

/**
 * Extend the Stage theme setup.
 *
 * @return void
 */
add_action(
	'after_setup_theme',
	function () {

		/**
		 * Translations: Register path within child theme
		 *
		 * @link: https://developer.wordpress.org/reference/functions/load_child_theme_textdomain/
		 */
		// load_child_theme_textdomain( 'stage', asset( 'languages' )->path() );

		/**
		 * Register additional navigation menus
		 *
		 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
		 */
		register_nav_menus(
			array(
			// 'secondary_navigation' => __('Primary Navigation', 'stage')
			)
		);

	},
	20
);

/**
 * Register additional theme sidebars.
 *
 * @return void
 */
/*
add_action(
	'widgets_init',
	function () {
		$config = array(
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		);

		register_sidebar(
			array(
				'name' => __( 'Secondary', 'stage' ),
				'id'   => 'sidebar-secondary',
			) + $config
		);
	}
);
*/
