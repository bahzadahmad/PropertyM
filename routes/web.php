<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Auth::routes();
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

 //Admin
Route::group(['middleware'=>['auth']],function(){
    //Dashboard
    Route::get('home', 'HomeController@index')->name('home');
    //Project Grid
    Route::get('project-grid.php', 'ProjectController@grid')->name('project');
    Route::get('add-project-form.php', 'ProjectController@index')->name('addProjectForm');
    Route::post('add-project.php', 'ProjectController@store')->name('addProject');
    //client Grid
    Route::get('client-grid.php', 'ClientController@grid')->name('client');
    Route::get('add-client-form.php', 'ClientController@index')->name('addClientForm');
    Route::post('add-client.php', 'ClientController@store')->name('addClient');
    //shareholder Grid
    Route::get('shareholder-grid.php', 'ShareholderController@grid')->name('shareholder');
    Route::get('add-shareholder-form.php', 'ShareholderController@index')->name('addShareholderForm');
    Route::post('add-shareholder.php', 'ShareholderController@store')->name('addShareholder');
    //Change Language
    Route::post('changeLanguage.php', 'ClientController@changeLanguage')->name('changeLanguage');
    Route::get('translation.php', 'TranslationController@index')->name('translation');
    
});