<?php


Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function(){
    Route::get('/dashboard', 'Admin\AdminDashboardController@index')->name('dashboard');
    //Route::get('/blog', 'Admin\BlogController@index')->name('blog_show');
    Route::resources([
        'blog' => 'Admin\BlogController',
        'work' => 'Admin\WorkController',
    ]);
    Route::resource('contact', 'Admin\ContactController')->except('store');
});

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::post('/create', 'Admin\ContactController@store');
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/work', 'HomeController@work')->name('work');
Route::get('/more/{slug}', 'HomeController@more')->name('more');
Route::get('/chat', 'ChatController@chat')->name('chat');
Route::get('/messages', 'ChatController@fetchMessages');
Route::post('/messages', 'ChatController@sendMessage');
