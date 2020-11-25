<?php

use function Stage\stage_config;

return array(

	/*
	|--------------------------------------------------------------------------
	| View Storage Paths
	|--------------------------------------------------------------------------
	|
	| Most template systems load templates from disk. Here you may specify
	| an array of paths that should be checked for your views.
	|
	*/

	'paths'      => array(
		get_theme_file_path( '/resources/views' ),
		get_parent_theme_file_path( '/resources/views' ),
	),

	/*
	|--------------------------------------------------------------------------
	| Compiled View Path
	|--------------------------------------------------------------------------
	|
	| This option determines where all the compiled Blade templates will be
	| stored for your application. Typically, this is within the uploads
	| directory. However, as usual, you are free to change this value.
	|
	*/

	'compiled'   => get_theme_file_path( '/storage/framework/views' ),

	/*
	|--------------------------------------------------------------------------
	| View Debugger
	|--------------------------------------------------------------------------
	|
	| Enabling this option will display the current view name and data. Giving
	| it a value of 'view' will only display view names. Giving it a value of
	| 'data' will only display current data. Giving it any other truthy value
	| will display both.
	|
	*/

	'debug'      => false,

	/*
	|--------------------------------------------------------------------------
	| View Namespaces
	|--------------------------------------------------------------------------
	|
	| Blade has an underutilized feature that allows developers to add
	| supplemental view paths that may contain conflictingly named views.
	| These paths are prefixed with a namespace to get around the conflicts.
	| A use case might be including views from within a plugin folder.
	|
	*/

	'namespaces' => array(
		/*
		 | Given the below example, in your views use something like:
		 |     @include('Stage::some.view.or.partial.here')
		 */
		'Stage' => get_parent_theme_file_path( '/resources/views' ),
	),

	/*
	|--------------------------------------------------------------------------
	| View Directives
	|--------------------------------------------------------------------------
	|
	| The namespaces where view components reside. Components can be referenced
	| with camelCase & dot notation.
	|
	*/

	'directives' => array_merge(
		array(
			'asset' => Roots\Acorn\Assets\AssetDirective::class,
		),
		stage_config( 'view.directives' )
	),
);
