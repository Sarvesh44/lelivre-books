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
/*
Route::get('/', function()
{
	$title = 'LiLevre Login Page';
	return View::make('home.index')
		->with('title', $title);
});

Route::get('/login', function()
{
	$title = 'LiLevre Login Page';
	return View::make('home.index')
		->with('title', $title);
});

Route::get('register', function()
{
	$title = 'LiLevre Registration Page';
	return View::make('home.register')
		->with('title', $title);
});
*/

Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeController@getLogin');
Route::get('/register', 'HomeController@getRegister');
Route::post('/register', 'HomeController@postRegister');
Route::post('/', 'HomeController@postLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@logout');
//Route::get('/welcome', 'HomeController@getWelcome');

Route::group(array('before' => 'auth'), function()
{
    Route::get('lelivre', 'LelivreController@getIndex');


});

/** Database Queries goes in here **/
/*
Route::get('/lelivre', function()
{
    $posts = DB::table('book')->get();
    dd($posts);
});
*/

Route::resource('book', 'BookController');
Route::resource('author', 'AuthorController');

// Confide RESTful route
Route::get('user/confirm/{code}', 'CustomerController@getConfirm');
Route::get('user/reset/{token}', 'CustomerController@getReset');
Route::controller( 'user', 'CustomerController');


/** ------------------------------------------
 *  Frontend Routes
 *  ------------------------------------------
 */

// User reset routes
Route::get('user/reset/{token}', 'CustomerController@getReset');
// User password reset
Route::post('user/reset/{token}', 'CustomerController@postReset');
//:: User Account Routes ::
Route::post('user/{user}/edit', 'CustomerController@postEdit');

//:: User Account Routes ::
Route::post('user/login', 'CustomerController@postLogin');

# User RESTful Routes (Login, Logout, Register, etc)
Route::controller('user', 'CustomerController');

//:: Application Routes ::

# Filter for detect language
Route::when('contact-us','detectLang');

# Contact Us Static Page
Route::get('contact-us', function()
{
    // Return about us page
    return View::make('site/contact-us');
});


Route::get('api/search', 'ApiSearchController@index');