<?php


Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function(){
    Route::get('/dashboard', 'Admin\AdminDashboardController@index')->name('dashboard');
    Route::get('/blog', 'Admin\BlogController@index')->name('blog_show');
});

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/work', 'HomeController@work')->name('work');
