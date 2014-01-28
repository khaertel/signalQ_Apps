<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/** ------------------------------------------
 *  Route model binding
 *  ------------------------------------------
 */
Route::model('user', 'User');
Route::model('role', 'Role');
Route::model('metric', 'Metric');
Route::model('widget', 'Widget');
Route::model('winstance', 'WidgetInstance');
Route::model('minstance', 'MetricInstance');

/** ------------------------------------------
 *  Route constraint patterns
 *  ------------------------------------------
 */
Route::pattern('user', '[0-9]+');
Route::pattern('role', '[0-9]+');
Route::pattern('metric', '[0-9]+');
Route::pattern('widget', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');
Route::pattern('winstance', '[0-9]+');

/** ------------------------------------------
 *  Admin Routes
 *  ------------------------------------------
 */

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
	Assets::add('admin_js');
	Assets::add('admin_css');

    # User Management
    Route::get('users/{user}/show', 'AdminUsersController@getShow');
    Route::get('users/{user}/edit', 'AdminUsersController@getEdit');
    Route::post('users/{user}/edit', 'AdminUsersController@postEdit');
    Route::get('users/{user}/delete', 'AdminUsersController@getDelete');
    Route::post('users/{user}/delete', 'AdminUsersController@postDelete');
    Route::controller('users', 'AdminUsersController');

    # User Role Management
    Route::get('roles/{role}/show', 'AdminRolesController@getShow');
    Route::get('roles/{role}/edit', 'AdminRolesController@getEdit');
    Route::post('roles/{role}/edit', 'AdminRolesController@postEdit');
    Route::get('roles/{role}/delete', 'AdminRolesController@getDelete');
    Route::post('roles/{role}/delete', 'AdminRolesController@postDelete');
    Route::controller('roles', 'AdminRolesController');

	# Metric Management
	Route::get('metrics/{metric}/show', 'AdminMetricsController@getShow');
	Route::get('metrics/{metric}/edit', 'AdminMetricsController@getEdit');
	Route::post('metrics/{metric}/edit', 'AdminMetricsController@postEdit');
	Route::get('metrics/{metric}/delete', 'AdminMetricsController@getDelete');
	Route::post('metrics/{metric}/delete', 'AdminMetricsController@postDelete');
	Route::controller('metrics', 'AdminMetricsController');

	# User Management
	Route::get('widgets/{widget}/show', 'AdminWidgetsController@getShow');
	Route::get('widgets/{widget}/edit', 'AdminWidgetsController@getEdit');
	Route::post('widgets/{widget}/edit', 'AdminWidgetsController@postEdit');
	Route::get('widgets/{widget}/delete', 'AdminWidgetsController@getDelete');
	Route::post('widgets/{widget}/delete', 'AdminWidgetsController@postDelete');
	Route::controller('widgets', 'AdminWidgetsController');

    # Admin Dashboard
    Route::controller('/', 'AdminDashboardController');
});

Route::group(array('before' => 'auth'), function()
{
	Assets::add('admin_js');
	Assets::add('admin_css');

	//Customer directory
	Route::get('directory', 'UserController@getDirectory'); 
	
	// Widget catalogue & selection
	Route::get('catalogue', 'WidgetController@getCatalogue');
	Route::post('catalogue', 'WidgetController@postActivate');
	
	// Widget dashboards
	Route::get('dashboard', 'WidgetController@getUserDashboard');
	Route::get('dashboard/widgets/{winstance}/edit', 'WidgetController@getEdit');
});

Route::group(array('prefix' => 'api'), function() 
{
	Route::any('config', 'APIController@getConfig');
	Route::any('customer/{user}/{updates}', 'APIController@getMetricInstances');	
});

/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

// User reset routes
Route::get('user/reset/{token}', 'UserController@getReset');
// User password reset
Route::post('user/reset/{token}', 'UserController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'UserController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'UserController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'UserController');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');
# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});



# Index Page - Last route, no matches
Route::get('/', array('before' => 'detectLang','uses' => 'UserController@getLogin'));

// DB logging
if (Config::get('database.log', false))
{           
    Event::listen('illuminate.query', function($query, $bindings, $time, $name)
    {
        $data = compact('bindings', 'time', 'name');

        // Format binding data for sql insertion
        foreach ($bindings as $i => $binding)
        {   
            if ($binding instanceof \DateTime)
            {   
                $bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
            }
            else if (is_string($binding))
            {   
                $bindings[$i] = "'$binding'";
            }   
        }       

        // Insert bindings into query
        $query = str_replace(array('%', '?'), array('%%', '%s'), $query);
        $query = vsprintf($query, $bindings); 

        Log::info($query, $data);
    });
}
