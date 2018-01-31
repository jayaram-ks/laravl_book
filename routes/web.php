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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/home', function () {
//     return view('welcome');
// });
//;

// Route::post('/changelang','LanguageController@changeLang')->name('changelanguage');
// Route::get('/','HomeController@showHome')->name('user.home');
// Route::get('/tours','TourController@index')->name('user.tours');
// Route::get('/travels','TravelController@index')->name('user.travels');
$locales = [
    'en',
    'ar',
];
foreach ($locales as $locale) {
    Route::group(['prefix' => $locale], function() {
        Route::post('/changelang','LanguageController@changeLang')->name('changelanguage');
        Route::get('/','HomeController@showHome')->name('user.home');
        Route::get('/tours','TourController@index')->name('user.tours');
        Route::get('/travels','TravelController@index')->name('user.travels');
    });
}
