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
Route::resource('covids','CovidController');
Route::resource('faqs','FaqController');
Route::resource('designs','DesignContoller');
Route::resource('news','NewsController');
Route::resource('maintenances','MaintenanceController');
Route::resource('repairs','RepairsController');

Route::get('/all_news','NewsController@all_news');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/vip', 'SiteController@vip')->name('vip');
Route::get('/single_news/{id}', 'SiteController@single_news')->name('single_news');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['show','create','store']]);


});
Route::group(
    ['middleware' => ['auth']],
    function () {

    }
);
Route::group(['middleware' => 'can:adman'], function() {
    Route::get('/home', 'HomeController@index')->name('admin/home');\
    Route::get('/all_maintenances','MaintenanceController@index1');
    Route::get('/all_designs','DesignContoller@index1');

});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['show','create','store']]);
    
});
Route::get('/', 'SiteController@index')->name('home');

Route::post('Design', [
    'uses' => 'EmailController@design',
    'as' => 'contact.store.main'
]);