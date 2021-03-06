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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('setLocale/{locale}', ['as' => 'language.change', 'uses' => 'LanguageController@setLocale']);

Route::get('/', 'HomeController@index')->name('home');

Route::get('explore', 'ExploreController@index')->name('explore');

Route::get('community', function() {
    return view('home');
})->name('community');

Route::get('help', 'HelpController@index')->name('help');

Route::middleware(['auth'])->group(function () {
    Route::get('writing', 'WritingController@index')->name('writing');
});