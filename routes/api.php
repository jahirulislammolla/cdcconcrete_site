<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/test_post',function(){
//     return Storage::put('test_upload',request()->file('file'));
// });
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => '/user', 'middleware' => ['guest:api']], function () {
        Route::post('/get-token','Auth\ApiLoginController@get_token');
        Route::post('/api-login','Auth\ApiLoginController@login');
    });

    Route::group(['prefix' => 'user', 'middleware' => ['auth:api']], function () {
        Route::post('/api-logout','Auth\ApiLoginController@logout');

        Route::post('/user_info', function () {
            $user = \App\Models\User::find(request()->id);
            // $token = $user->token()->revoke();
            // $user = new UserResource($user);
            // return Auth::user()->token()->revoke();
            return [auth()->user(), $user];
        });
    });

    // course content routes
    Route::group(['prefix' => 'course', 'middleware' => ['auth:api']], function () {
        Route::group( ['namespace'=>'Admin\Instructor' ],function(){
            Route::get('/get-course-related-contents','CourseContentController@course_related_contents');
            Route::post('/store-course-content','CourseContentController@store');
        });

        // course week routes
        Route::group(['prefix' => 'week', 'namespace' => 'Admin\Instructor'], function () {
            Route::post('/store', 'CourseWeekController@store');
        });
        // course week episode routes
        Route::group(['prefix' => 'week-episode', 'namespace' => 'Admin\Instructor'], function () {
            Route::post('/store', 'CourseWeekEpisodeController@store');
        });
    });
});
