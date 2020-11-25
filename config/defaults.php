<?php

/**
 * This file contains the defaults used by Stage
 * Overwrite them here or via the Customizer Settings
 * todo: Allow a fallback to Parent Stage Theme if a key & value is missing
 */

use function Stage\stage_get_fallback;

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
            'activate' => true,
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
        // Adjust also in tailwind config
        'screens' => array(
            'sm'  => '576px',
            'md'  => '768px',
            'lg'  => '992px',
            'xl'  => '1200px',
            'xxl' => '1600px',
        ),

        // All colors are registered as wp-blocks colors.
        'colors'  => array(
            'copy'      => '#333333',
            'heading'   => '#333333',
            'primary'   => '#2b6cb0',
            'secondary' => '#2aadaf',
            'body'      => '#fff',
            'link'  => '',
            'hover' => '',

            'palettes' => [
                'gray' => [
                    '100' => '#f7fafc',
                    '200' => '#edf2f7',
                    '300' => '#e2e8f0',
                    '400' => '#cbd5e0',
                    '500' => '#a0aec0',
                    '600' => '#718096',
                    '700' => '#4a5568',
                    '800' => '#2d3748',
                    '900' => '#1a202c',
                ],
                'red' => [
                    'light'   => '#feb2b2',
                    'default' => '#f56565',
                    'dark'    => '#c53030',
                ],
                'green' => [
                    'light'   => '#9ae6b4',
                    'default' => '#48bb78',
                    'dark'    => '#2f855a',
                ],
                'blue' => [
                    'light'   => '#90cdf4',
                    'default' => '#4299e1',
                    'dark'    => '#2b6cb0',
                ],
            ],
        ),

        // All font sizes are registered as wp-blocks font-sizes.
        'typo' => array(
            'heading' => array(
                'fonts' => array(
                    'font-family' =>
                        'Constantia,
						Lucida Bright,
						Lucidabright,
						Lucida Serif,
						Lucida,
						DejaVu Serif,
						Bitstream Vera Serif,
						Liberation Serif,
						Georgia,
						serif',
                    'font-weight' => 'regular',
                ),
            ),
            'copy' => array(
                'fonts' => array(
                    'font-family' =>
                        'system-ui,
	                    BlinkMacSystemFont,
	                    -apple-system,
	                    Segoe UI, Roboto,
	                    Oxygen, Ubuntu,
	                    Cantarell,
	                    Fira Sans,
	                    Droid Sans,
	                    Helvetica Neue,
	                    sans-serif',
                    'font-weight' => 'regular',
                ),
            ),
            'choices' => array(
                'fonts' => array(
                    'google' => array( 'popularity', 100 ),
                ),
            ),
            'sizes'   => array(
                'xs'   => array(
                    'value' => 'var(--font-size-xs)',
                    'name'  => __('Extra Small', 'stage'),
                    'px'    => '12',
                ),
                'sm'   => array(
                    'value' => 'var(--font-size-sm)',
                    'name'  => __('Small', 'stage'),
                    'px'    => '14',
                ),
                'base' => array(
                    'value' => 'var(--font-size-base)',
                    'name'  => __('Normal', 'stage'),
                    'px'    => '16',
                ),
                'lg'   => array(
                    'value' => 'var(--font-size-lg)',
                    'name'  => __('Large', 'stage'),
                    'px'    => '18',
                ),
                'xl'   => array(
                    'value' => 'var(--font-size-xl)',
                    'name'  => __('Extra Large', 'stage'),
                    'px'    => '20',
                ),
                '2-xl'  => array(
                    'value' => 'var(--font-size-2xl)',
                    'name'  => __('XX Large', 'stage'),
                    'px'    => '24',
                ),
                '3-xl'  => array(
                    'value' => 'var(--font-size-3xl)',
                    'name'  => __('3X Large', 'stage'),
                    'px'    => '30',
                ),
                '4-xl'  => array(
                    'value' => 'var(--font-size-4xl)',
                    'name'  => __('4X Large', 'stage'),
                    'px'    => '36',
                ),
                '5-xl'  => array(
                    'value' => 'var(--font-size-5xl)',
                    'name'  => __('5X Large', 'stage'),
                    'px'    => '48',
                ),
            ),
        ),
    ),

    /**
     * Body Settings
     */
    'body'     => array(
        'classes' => array(
            'app',
            'stage',
            'flex',
            'flex-col',
            'min-h-full',
            'antialiased',
            'bg-body',
            'font-copy',
            'text-copy',
        ),
    ),

    /**
     * Header Settings
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
            'align'     => 'alignscreen', // align, alignwide, alignscreen, alignfull
            'layout'    => 'partials.header.horizontal-left', // Template path.
            'open'      => 'click-open', // click-open or hover-open sub-menu.
            'padding-x' => '0',
            'padding-y' => '2',
        ),
        'search'   => array(
            'layout' => 'partials.header.search.fullscreen',
        ),
    ),

    /**
     * Archives Settings
     * Allows overwriting CPTs
     */
    'archive'  => array(
        'post'     => array(
            'layout'  => 'partials.archive.grids.modern',
            'display' => array(
                'sidebar'     => false,
                'thumbnail'   => true,
                'placeholder' => true,
                'headline'    => true,
                'meta'        => false,
                'excerpt'     => true,
                'tags'        => false,
            ),
        ),
        'product'  => array(
            'layout'  => 'partials.archive.grids.masonry',
            'display' => array(
                'sidebar'     => false,
                'thumbnail'   => true,
                'placeholder' => true,
                'headline'    => true,
                'meta'        => false,
                'excerpt'     => true,
                'tags'        => false,
            ),
        ),
        // Fallback defaults if non set for CPT
        'fallback' => array(
            'layout'  => 'partials.archive.grids.masonry',
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
                esc_html__('&#169; Copyright %1$s, all rights reserved by %2$s.', 'stage'),
                date('Y'),
                get_bloginfo('name', 'display')
            ),
        ),
        'desktop'  => array(
            'align' => stage_get_fallback('header.desktop.align', 'alignwide'),
        ),
    ),
);
