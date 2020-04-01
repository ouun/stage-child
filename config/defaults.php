<?php
/**
 * This file contains the defaults used by Stage
 * Overwrite them here or via the Customizer settings
 */

use function Stage\stage_get_default;

return array(

	/*
	|--------------------------------------------------------------------------
	| The theme defaults
	|--------------------------------------------------------------------------
	|
	| Sets the defaults for all settings in the Customizer
	| Used throughout the whole theme by using stage_get_default()
	|
	*/

	/**
	 * Stage Features
	 */
	'features' => array(
		'lazy'     => array(
			'activate' => true,
		),
		'loader'   => array(
			'activate' => false,
		),
		'infinity' => array(
			'activate' => true,
		),
		'gallery'  => array(
			'activate' => true,
		),
	),

	/**
	 * Global style defaults
	 */
	'global'   => array(
		'body'   => array(
			'classes' => array(
				'h-full',
				'flex',
				'flex-col',
				'flex-no-wrap',
				'justify-start',
				'items-stretch',
			),
		),
		// All colors are registered as wp-blocks colors.
		'colors' => array(
			'main'     => array(
				'body'      => 'rgb(250, 250, 250)',
				'copy'      => 'rgb(0, 0, 0)',
				'heading'   => 'rgb(0, 0, 0)',
				'primary'   => 'rgb(43, 108, 176)',
				'secondary' => 'rgb(221, 107, 32)',
			),
			'links'    => array(
				'link'  => '',
				'hover' => '',
			),
			'copy'     => '#222',
			'gray-200' => 'var(--color-gray-200)',
			'gray-800' => 'var(--color-gray-800)',
		),

		// All font sizes are registered as wp-blocks font-sizes.
		'typo'   => array(
			'heading' => array(
				'fonts' => array(
					'font-family' => 'Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif',
					'font-weight' => 'regular',
				),
			),
			'copy'    => array(
				'fonts' => array(
					'font-family' => 'system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif',
					'font-weight' => 'regular',
				),
			),
			'choices' => array(
				'fonts' => array(
					'google'   => array( 'popularity', 100 ),
					'standard' => array(
						'Constantia, Lucida Bright, Lucidabright, Lucida Serif, Lucida, DejaVu Serif, Bitstream Vera Serif, Liberation Serif, Georgia, serif' => esc_html__( 'System Serif', 'stage' ),
						'system-ui, BlinkMacSystemFont, -apple-system, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif' => esc_html__( 'System Sans-Serif', 'stage' ),
					),
				),
			),
			'sizes'   => array(
				'xs'   => array(
					'value' => 'var(--font-size-xs)',
					'name'  => __( 'Extra Small', 'stage' ),
					'px'    => '12',
				),
				'sm'   => array(
					'value' => 'var(--font-size-sm)',
					'name'  => __( 'Small', 'stage' ),
					'px'    => '14',
				),
				'base' => array(
					'value' => 'var(--font-size-base)',
					'name'  => __( 'Normal', 'stage' ),
					'px'    => '16',
				),
				'lg'   => array(
					'value' => 'var(--font-size-lg)',
					'name'  => __( 'Large', 'stage' ),
					'px'    => '18',
				),
				'xl'   => array(
					'value' => 'var(--font-size-xl)',
					'name'  => __( 'Extra Large', 'stage' ),
					'px'    => '20',
				),
				'2xl'  => array(
					'value' => 'var(--font-size-2xl)',
					'name'  => __( 'XX Large', 'stage' ),
					'px'    => '24',
				),
				'3xl'  => array(
					'value' => 'var(--font-size-3xl)',
					'name'  => __( '3X Large', 'stage' ),
					'px'    => '30',
				),
				'4xl'  => array(
					'value' => 'var(--font-size-4xl)',
					'name'  => __( '4X Large', 'stage' ),
					'px'    => '36',
				),
				'5xl'  => array(
					'value' => 'var(--font-size-5xl)',
					'name'  => __( '5X Large', 'stage' ),
					'px'    => '48',
				),
			),
		),
	),

	/**
	 * Layout settings
	 */
	'header'   => array(
		'branding' => array(
			'show_tagline' => false,
		),
		'colors'   => array(
			'overwrite' => false,
		),
		'typo'     => array(
			'overwrite' => false,
		),
		'mobile'   => array(
			'position' => 'sticky',
			'layout'   => 'partials.header.off-canvas', // Template path.
		),
		'desktop'  => array(
			'position'  => 'sticky',
			'layout'    => 'partials.header.horizontal-left', // Template path.
			'align'     => 'alignscreen',
			'open'      => 'click-open', // click-open or hover-open sub-menu.
			'padding-x' => '0',
			'padding-y' => '0',
		),
		'search'   => array(
			'layout' => 'partials.header.search.below-header',
		),
	),

	/**
	 * Archives Settings
	 * Allows overwriting CPTs
	 */
	'archive'  => array(
		'post'     => array(
			'layout'  => 'partials.grids.modern',
			'display' => array(
				'sidebar'     => false,
				'thumbnail'   => true,
				'placeholder' => false,
				'headline'    => true,
				'meta'        => false,
				'excerpt'     => true,
				'tags'        => false,
			),
		),
		'fallback' => array(
			'layout'  => 'partials.grids.masonry',
			'display' => array(
				'sidebar'     => true,
				'thumbnail'   => true,
				'placeholder' => false,
				'headline'    => true,
				'meta'        => false,
				'excerpt'     => true,
				'tags'        => false,
			),
		),
	),

	/**
	 * Footer Settings
	 */
	'footer'   => array(
		'settings' => array(
			'copyright' => sprintf(
			/* translators: %1$s is replaced with the current year, %2$s with the site name */
				esc_html__( '&#169; Copyright %1$s, all rights reserved by %2$s.', 'stage' ),
				date( 'Y' ),
				get_bloginfo( 'name', 'display' )
			),
		),
		'desktop'  => array(
			'align' => 'alignscreen',
		),
	),
);
