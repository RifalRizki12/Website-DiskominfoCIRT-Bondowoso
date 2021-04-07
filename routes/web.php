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

Route::get('/register','Auth\AuthController@register')->name('register');
Route::post('/postregister','Auth\AuthController@postregister')->name('postregister');
Route::get('/login','Auth\AuthController@login')->name('login');
Route::post('/postlogin', 'Auth\AuthController@postlogin')->name('postlogin');
Route::get('/logout','Auth\AuthController@logout')->name('logout');

Route::get('/','cAdmins\SiteController@blog')->name('/');
Route::get('home','Home\HomeController@index')->name('home');
Route::get('about','cAdmins\SiteController@about')->name('about');
Route::get('kontak','cAdmins\SiteController@kontak')->name('kontak');
Route::resource('tags', 'cAdmins\TagController');
Route::get('/tags/{id}/show','cAdmins\TagController@show')->name('tagShow');
Route::resource('category', 'cAdmins\CategoryController');
Route::get('/category/{id}/show','cAdmins\CategoryController@show')->name('categoryShow');
Route::get('blog','cAdmins\SiteController@blog')->name('blog');
Route::get('blogGird','cAdmins\SiteController@blogGird')->name('blogGird');
Route::get('vidio','cAdmins\SiteController@vidio')->name('vidio');
Route::post('search','cPengguna\SearchController@search')->name('search');

Route::group(['middleware' => ['auth','checkRole:client,admin,admin utama']], function () {
    Route::get('post','Home\HomeController@post')->name('post');
    Route::post('kirim','Home\HomeController@store')->name('kirim');

});

Route::group(['middleware' => ['auth','checkRole:admin,admin utama']], function () {
    
    Route::get('/dashboard','cAdmins\DashboardController@index')->name('dashboard');
    Route::get('/check','cAdmins\DashboardController@check')->name('check');

    Route::get('/dataAdmin','cAdmins\DataAdminController@index')->name('dataAdmin');
    Route::post('/addAdmin','cAdmins\DataAdminController@add')->name('addAdmin');
    Route::get('/admin/{id}/edit','cAdmins\DataAdminController@edit')->name('editAdmin');
    Route::post('/admin/{id}/update','cAdmins\DataAdminController@update')->name('updateAdmin');
    Route::get('/admin/{id}/delete','cAdmins\DataAdminController@delete')->name('deleteAdmin');
    Route::get('profilesaya','cAdmins\DataAdminController@profilesaya')->name('profilesaya');
    Route::get('/admin/{id}/profile','cAdmins\DataAdminController@profile')->name('profileadmin');

    Route::get('/dataClient','cAdmins\DataClientController@index')->name('dataClient');
    Route::post('/addClient','cAdmins\DataClientController@add')->name('addClient');
    Route::get('/client/{id}/edit','cAdmins\DataClientController@edit')->name('editClient');
    Route::post('/client/{id}/update','cAdmins\DataClientController@update')->name('updateClient');
    Route::get('/client/{id}/delete','cAdmins\DataClientController@delete')->name('deleteClient');

    Route::get('/posts','cAdmins\PostController@index')->name('posts');
    Route::get('/allPosts','cAdmins\PostController@allPosts')->name('allPosts');
    Route::get('/add','cAdmins\PostController@create')->name('add');
    Route::post('/up','cAdmins\PostController@up')->name('up');
    Route::get('/posts/{id}/edit','cAdmins\PostController@edit')->name('editPost');
    Route::post('/posts/{id}/update','cAdmins\PostController@update')->name('updatePost');
    Route::get('/posts/{id}/delete','cAdmins\PostController@delete')->name('deletePost');

    Route::get('/postsVidio','cAdmins\PostVidioController@index')->name('postsVidio');
    Route::get('/addVidio','cAdmins\PostVidioController@create')->name('addVidio');
    Route::post('/storePost','cAdmins\PostVidioController@store')->name('storePost');
    Route::get('/postsVidio/{id}/edit','cAdmins\PostVidioController@edit')->name('editPostVidio');
    Route::post('/postsVidio/{id}/update','cAdmins\PostVidioController@update')->name('updatePostVidio');
    Route::get('/postsVidio/{id}/delete','cAdmins\PostVidioController@delete')->name('deletePostVidio');

    Route::get('/category','cAdmins\CategoryController@index')->name('category');
    Route::get('/createCategory','cAdmins\CategoryController@create')->name('createCategory');
    Route::post('/storeCategory','cAdmins\CategoryController@store')->name('storeCategory');
    Route::get('/category/{id}/edit','cAdmins\CategoryController@edit')->name('editCategory');
    Route::post('/category/{id}/update','cAdmins\CategoryController@update')->name('updateCategory');
    Route::get('/category/{id}/delete','cAdmins\CategoryController@delete')->name('deleteCategory');

    Route::get('/tag','cAdmins\TagController@index')->name('Tag');
    Route::get('/createTag','cAdmins\TagController@create')->name('createTag');
    Route::post('/storeTag','cAdmins\TagController@store')->name('storeTag');
    Route::get('/tag/{id}/edit','cAdmins\TagController@edit')->name('editTag');
    Route::post('/tag/{id}/update','cAdmins\TagController@update')->name('updateTag');
    Route::get('/tag/{id}/delete','cAdmins\TagController@delete')->name('deleteTag');

    Route::get('postPengguna','cPengguna\PostPenggunaController@index')->name('postPengguna');
});


Route::get('/{slug}',[
    'uses' => 'cAdmins\SiteController@singlepost',
    'as' => 'site.single.post'
]);
