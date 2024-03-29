<?php

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
Route::resource('news','NewsController');
Route::resource('news_rus','Blog_rusController');
Route::resource('faqs','FaqController');

Route::get('/', function () {
    return redirect(app()->getLocale());
});

 Route::get('/setLocaleRout/{lang}', function ($lang) {
    App::setlocale($lang);
    return redirect(app()->getLocale());
            })->name('setLocaleRout');

 Route::prefix('{lang?}')->middleware('setlocale')->group(function() {
  
        Route::resource('designs','DesignContoller');
        Route::resource('maintenances','MaintenanceController');
        Route::resource('repairs','RepairsController');

        Route::get('/all_news/{id}','NewsController@all_news');
        Route::get('/about', 'SiteController@about')->name('about');
        Route::get('/vip', 'SiteController@vip')->name('vip');
        Route::get('/single_news/{id}', 'SiteController@single_news')->name('single_news');


        Route::get('/home', 'HomeController@index')->name('home');
        

        Route::get('/', 'SiteController@index')->name('home');

        Route::post('Inquiry', [
            'uses' => 'EmailController@exc',
            'as' => 'contact.store.main'
        ]);
        Route::get('/summernote-image','NewsController@image');

});
    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
        Route::resource('/users','UsersController',['except' => ['show','create','store']]);


    });
    Route::post('summernote-image',array('as'=>'summernote.image.upload','uses'=>'NewsController@uploada'));

    Route::group(['middleware' => 'can:adman'], function() {
        Route::get('/home', 'HomeController@index')->name('admin/home');
        Route::get('/all_maintenances','MaintenanceController@index1');
        Route::get('/all_designs','DesignContoller@index1');

    });

    Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
        Route::resource('/users','UsersController',['except' => ['show','create','store']]);

    });
