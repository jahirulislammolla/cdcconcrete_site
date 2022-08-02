<?php
use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', 'Admin\AdminController@index')->name('dashboard_index');
});
Route::group( ['prefix'=>'editor','middleware'=>['auth'], 'namespace' => 'Editor' ],function(){
    Route::get('/','EditorController@index')->name('editor_index');
    Route::get('/all-subscribe-info','EditorController@all_subscribe_info')->name('editor_all_subscribe_info');
    Route::get('/subscribe-delete/{id}','EditorController@subscribe_delete')->name('editor_subscribe_delete');
    Route::get('/all-any-question-info','EditorController@all_any_question_info')->name('editor_all_any_question_info');
    Route::get('/any-question-update','EditorController@any_question_update')->name('editor_any_question_update');
    Route::get('/any-question-delete/{id}','EditorController@any_question_delete')->name('editor_any_question_delete');

    Route::group( ['prefix'=>'/basic-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','BasicInformationController@index')->name('editor_basic_information_index');
        Route::post('/','BasicInformationController@update')->name('editor_basic_information_update');
    });
    Route::group( ['prefix'=>'/page-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','PageInformationController@index')->name('editor_page_information_index');
        Route::post('/','PageInformationController@update')->name('editor_page_information_update');
    });
    Route::group( ['prefix'=>'/page-information', 'namespace' => 'Management'  ],function(){
        Route::get('/image','PageInformationController@image_index')->name('editor_page_image_index');
        Route::post('/image','PageInformationController@image_update')->name('editor_page_image_update');
    });
    Route::group( ['prefix'=>'/sister-concern-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@sister_concern_index')->name('editor_sister_concern_information_index');
        Route::post('/create','AllInformationController@sister_concern_create')->name('editor_sister_concern_information_create');
        Route::post('/update','AllInformationController@sister_concern_update')->name('editor_sister_concern_information_update');
        Route::get('/delete/{id}','AllInformationController@sister_concern_delete')->name('editor_sister_concern_information_delete');
    });
    Route::group( ['prefix'=>'/client-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@client_index')->name('editor_client_information_index');
        Route::post('/create','AllInformationController@client_create')->name('editor_client_information_create');
        Route::post('/update','AllInformationController@client_update')->name('editor_client_information_update');
        Route::get('/delete/{id}','AllInformationController@client_delete')->name('editor_client_information_delete');
    });
    Route::group( ['prefix'=>'/product-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@product_index')->name('editor_product_information_index');
        Route::post('/create','AllInformationController@product_create')->name('editor_product_information_create');
        Route::post('/update','AllInformationController@product_update')->name('editor_product_information_update');
        Route::get('/delete/{id}','AllInformationController@product_delete')->name('editor_product_information_delete');
    });
    Route::group( ['prefix'=>'/equipment-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@equipment_index')->name('editor_equipment_information_index');
        Route::post('/create','AllInformationController@equipment_create')->name('editor_equipment_information_create');
        Route::post('/update','AllInformationController@equipment_update')->name('editor_equipment_information_update');
        Route::get('/delete/{id}','AllInformationController@equipment_delete')->name('editor_equipment_information_delete');
    });
    Route::group( ['prefix'=>'/product-order-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@product_order_index')->name('editor_product_order_information_index');
        Route::post('/create','AllInformationController@product_order_create')->name('editor_product_order_information_create');
        Route::post('/update','AllInformationController@product_order_update')->name('editor_product_order_information_update');
        Route::get('/delete/{id}','AllInformationController@product_order_delete')->name('editor_product_order_information_delete');
    });
    Route::group( ['prefix'=>'/gallery-image-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@gallery_image_index')->name('editor_gallery_image_information_index');
        Route::post('/create','AllInformationController@gallery_image_create')->name('editor_gallery_image_information_create');
        Route::post('/update','AllInformationController@gallery_image_update')->name('editor_gallery_image_information_update');
        Route::get('/delete/{id}','AllInformationController@gallery_image_delete')->name('editor_gallery_image_information_delete');
    });
    Route::group( ['prefix'=>'/gallery-video-information', 'namespace' => 'Management'  ],function(){
        Route::get('/','AllInformationController@gallery_video_index')->name('editor_gallery_video_information_index');
        Route::post('/create','AllInformationController@gallery_video_create')->name('editor_gallery_video_information_create');
        Route::post('/update','AllInformationController@gallery_video_update')->name('editor_gallery_video_information_update');
        Route::get('/delete/{id}','AllInformationController@gallery_video_delete')->name('editor_gallery_video_information_delete');
    });
});