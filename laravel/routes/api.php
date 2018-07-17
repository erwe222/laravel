<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




//接口后台路由配置
// Route::group(['middleware' => ['Cors']], function()
// {

	Route::get('/test/test', function (Request $request) {

		dd(Auth::guard('api')->validate(['api_token'=>'dfasdfasdf']));
	    // dd(Auth::guard('api')->validate(['api_token' => '')]));
	});

	


// });