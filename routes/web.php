<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'Admin\AdminController@index')->name('dashboard_index');
    
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'Admin\AdminController@profile')->name('dashboard_student_course_profile');
    });

});

Route::get('/local-data-seed', function () {
    \Illuminate\Support\Facades\Artisan::call('db:seed LocalDataSeeder');
    // return redirect('/');
});

Route::get('/jayed-vai-seed', function () {
    \Illuminate\Support\Facades\Artisan::call('db:seed JayedDatabaseSeeder');
    // \Illuminate\Support\Facades\Artisan::call('db:seed CourseContentDaycareSeeder');
    return redirect()->back();
});


include_once('fontend.php');
include_once('backend.php');
