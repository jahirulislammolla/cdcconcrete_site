<?php

use Illuminate\Support\Facades\Route;
// Route::get("/login_check","Frontend\FrontendController@login")->name('login');
Route::get('/','Frontend\FrontendController@index')->name('frontend_home');
Route::get('/rmc-product','Frontend\FrontendController@rmc_product')->name('rmc_product');
Route::get('/concrete-block','Frontend\FrontendController@concrete_block')->name('concrete_block');
Route::get('/quality-control','Frontend\FrontendController@quality_control')->name('quality_control');
Route::get('/plants-equipments','Frontend\FrontendController@plants_equipments')->name('plants_equipments');
Route::get('/contact-us','Frontend\FrontendController@contact_us')->name('contact_us');
Route::get('/gallery','Frontend\FrontendController@gallery')->name('gallery');
Route::post('/any-question','Frontend\FrontendController@any_question')->name('any_question');
Route::post('/subscribe-email','Frontend\FrontendController@subscribe_email')->name('subscribe_email');

Route::get('/login','Frontend\FrontendController@login')->name('login');
Route::get('/register','Frontend\FrontendController@register')->name('register');
Route::get('/password/reset','Frontend\FrontendController@reset')->name('reset');
Route::get('/password/email','Frontend\FrontendController@email')->name('email');


