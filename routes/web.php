<?php

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/doctocar', 'PagesController@doctocar');

Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');

Route::get('/', 'PagesController@index')->name('home');

Route::get('/laramap', 'PagesController@laramap');

Route::get('/login', function() {
	    return view('login.create');
    });
Route::get('/getMe', function() {
	if(Request::ajax()) {
		return 'helo world';
	}
});

Route::get('/{id}', 'SearchGirlsController@show');
//Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/reg', 'RegistrationController@store');

Route::get('/profile', 'PagesController@profile')->middleware('verified');

Route::get('/livesearchy', 'PagesController@dashboard');

Route::get('live_search/action', 'PagesController@action')->name('live_search.action');

Route::get('/users', 'PagesController@users');

Route::get('/logout', 'SessionsController@destroy')->name('logout');

Route::post('/profile', 'PagesController@uploadimg');

Route::get('auth/{provider}', 'SessionsController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SessionsController@handleProviderCallback');


