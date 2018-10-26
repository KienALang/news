<?php
Route::pattern('id', '([0-9]*)');
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

Route::get('/', function () {
    return view('news.index.index');
});

Route::get('/categories', function () {
    return view('news.categories.index');
});

Route::get('/cat.html', function () {
    return view('news.categories.detail');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'adminLogin'], function() {
    Route::get('/dashboard', function() {
      return view('admin.pages.home.index');
    })->name('dashboard');
    Route::resource('categories', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('users', 'UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Auth'], function() {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'News'], function() {
    Route::get('/news', 'NewsController@index')->name('news.index');
    Route::get('/news/search', 'NewsController@search')->name('news.search');
    Route::get('/list-news', 'CategoryController@getListNews')->name('category.news');
    Route::get('/news/{news}/detail', 'NewsController@show')->name('news.detail');
    Route::get('/list-news/{category}', 'CategoryController@getListNews')->name('category.news');
});
