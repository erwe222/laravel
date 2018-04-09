<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



#Route::get('/test/index', 'Test\TestController@index')->name('test.test.index');


Route::get('foo/bar', function(){
	return 'Hello World';
});
	


Route::get('user/{id}', function($id){

	return 'User '.$id;
});



Route::group(['namespace' => 'Test'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('test/index', 'TestController@index')->name('test.index');#  //echo route('test.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test/code', function(){
    $img_url = Captcha::src();
    return json_encode(['img_url'=>$img_url]);
});
