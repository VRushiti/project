<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function (){

    Route::resource('/user', 'UserController');
    Route::resource('/post', 'AdminPostsController');

});
Route::get('/logout', 'Auth\LoginController@logout');


////////////

Route::get('/admin', function(){

    return view('admin.index');


});

Route::resource('admin/users', 'AdminUsersController',['names'=>[


    'index'=>'admin.users.index',
    'create'=>'admin.users.create',
    'store'=>'admin.users.store',
    'edit'=>'admin.users.edit'

]]);




Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'AdminPostsController@post']);

Route::resource('admin/posts', 'AdminPostsController',['names'=>[

    'index'=>'admin.posts.index',
    'create'=>'admin.posts.create',
    'store'=>'admin.posts.store',
    'edit'=>'admin.posts.edit',
    'search'=>'admin.posts.search'





]]);

Route::resource('admin/categories', 'AdminCategoriesController',['names'=>[


    'index'=>'admin.categories.index',
    'create'=>'admin.categories.create',
    'store'=>'admin.categories.store',
    'edit'=>'admin.categories.edit'


]]);

Route::resource('admin/media', 'AdminMediasController',['names'=>[

    'index'=>'admin.media.index',
    'create'=>'admin.media.create',
    'store'=>'admin.media.store',
    'edit'=>'admin.media.edit'


]]);


Route::resource('admin/comments', 'PostCommentsController',['names'=>[


    'index'=>'admin.comments.index',
    'create'=>'admin.comments.create',
    'store'=>'admin.comments.store',
    'edit'=>'admin.comments.edit',
    'show'=>'admin.comments.show'


]]);

//    Route::get('/admin/comments', 'PostCommentsController@index');


Route::resource('admin/comment/replies', 'CommentRepliesController',['names'=>[



    'index'=>'admin.replies.index',
    'create'=>'admin.replies.create',
    'store'=>'admin.replies.store',
    'edit'=>'admin.replies.edit',
    'show'=>'admin.replies.show'

]]);
//Route::resource('admin/about/aboutus', 'AdminAboutUsController',['names'=>[
//
//
//
//    'index'=>'admin.about.aboutus.index',
//    'create'=>'admin.about.aboutus.create',
//    'store'=>'admin.about.aboutus.store',
//    'edit'=>'admin.about.aboutus.edit',
//    'show'=>'admin.about.aboutus.show'
//
//]]);
Route::get('admin/about/aboutus', 'AdminAboutUsController@create');
Route::post('admin/about/aboutus', 'AdminAboutUsController@store');
Route::get('admin/about/index', 'AdminAboutUsController@index');

Route::get('/admin/search', 'SearchController@index');
Route::get('/admin/search/search', 'SearchController@search');

Route::get('/admin/search_posts', 'SearchPostsController@index');
Route::get('/admin/search_posts/search_posts', 'SearchPostsController@search_posts');


Route::resource('/events', 'EventsController@index');

Route::post('/events/store', 'EventsController@storeQuotes');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');




Route::get('admin/contact/index', 'AdminContactController@index');
Route::post('admin/contact/store', 'AdminContactController@store');
Route::get('admin/contact/create', 'AdminContactController@create');
Route::get('admin/contact/edit', 'AdminContactController@edit');



Route::get('/contact', 'ContactController@index');

Route::get('/aboutus', 'AboutUsController@index');

Route::get('admin/myprofile', 'UserProfileController@index');


Route::resource('admin/city', 'CityCategoriesController',['names'=>[


    'index'=>'admin.city.index',
    'create'=>'admin.city.create',
    'store'=>'admin.city.store',
    'edit'=>'admin.city.edit'


]]);


