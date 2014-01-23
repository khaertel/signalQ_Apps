<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Local assets directories
	|--------------------------------------------------------------------------
	|
	| Override defaul prefix folder for local assets. Don't use trailing slash!.
	| They are relative to your public folder.
	|
	| Default for CSS: 'css'
	| Default for JS: 'js'
	*/

	'css_dir' => 'css',
	'js_dir' => 'js',

	/*
	|--------------------------------------------------------------------------
	| Assets collections
	|--------------------------------------------------------------------------
	|
	| Collections allow you to have named groups of assets (CSS or JavaScript files).
	|
	| If an asset has been loaded already it won't be added again. Collections may be
	| nested but please be careful to avoid recursive loops.
	|
	| To avoid conflicts with the autodetection of asset types make sure your
	| collections names don't end with ".js" or ".css".
	|
	|
	| Example:
	|	'collections' => array(
	|
	|		// jQuery (CDN)
	|		'jquery-cdn' => [
	|			'//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js
	|		'],
	|
	|		// Twitter Bootstrap (CDN)
	|		'bootstrap-cdn' => [
	|			'jquery-cdn',
	|			'//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css',
	|			'//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css',
	|			'//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js'
	|		]
	|	),
	*/

	'collections' => array(
		'admin_css' => [
			\Config::get('app.url').'/assets/bootstrap/css/bootstrap.min.css',
			\Config::get('app.url').'/assets/bootstrap/css/wysihtml5/prettify.css',
			\Config::get('app.url').'/assets/bootstrap/css/wysihtml5/bootstrap-wysihtml5.css',
			\Config::get('app.url').'/assets/bootstrap/css/datatables-bootstrap.css',
			\Config::get('app.url').'/assets/bootstrap/css/colorbox.css',
		],
		'admin_js' => [
			\Config::get('app.url').'/assets/js/jquery-1.9.1.js',
			\Config::get('app.url').'/assets/bootstrap/js/bootstrap.min.js',
			\Config::get('app.url').'/assets/bootstrap/js/wysihtml5/wysihtml5-0.3.0.js',
			\Config::get('app.url').'/assets/bootstrap/js/wysihtml5/bootstrap-wysihtml5.js',
			'http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js',
			\Config::get('app.url').'/assets/bootstrap/js/datatables-bootstrap.js',
			\Config::get('app.url').'/assets/bootstrap/js/datatables.fnReloadAjax.js',
			\Config::get('app.url').'/assets/bootstrap/js/jquery.colorbox.js',
			\Config::get('app.url').'/assets/bootstrap/js/prettify.js',
		]
	
	),

	/*
	|--------------------------------------------------------------------------
	| Preload assets
	|--------------------------------------------------------------------------
	|
	| Here you may set which assets (CSS files, JavaScript files or collections)
	| should be loaded by default even if you don't explicitly add them.
	|
	*/

	'autoload' => array(),

	/*
	|--------------------------------------------------------------------------
	| Assets pipeline
	|--------------------------------------------------------------------------
	|
	| When enabled, all your assets will be concatenated and minified to a sigle
	| file, improving load speed and reducing the number of requests that the
	| browser makes to render a web page.
	|
	| It's a good practice to enable it only on production environment.
	|
	| Use an integer value greather than 1 to append a timestamp to the URL.
	|
	| Default: false
	*/

	'pipeline' => false,

	/*
	|--------------------------------------------------------------------------
	| Pipelined assets directories
	|--------------------------------------------------------------------------
	|
	| Override defaul folder for storing pipelined assets. Don't use trailing slash!.
	| Relative to your assets folder.
	|
	| Default: 'min'
	*/

	'pipeline_dir' => 'min',

	/*
	 | -------------------------------------------------------------------------
	 | Library Debug Mode
	 |--------------------------------------------------------------------------
	 |
	 | When debug mode is enabled information about the process of loading
	 | assets will be sent to the log.
	 |
	 | Default: false
	 */

	'debug' => false,
);
