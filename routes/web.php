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
Route::get('/hello', function () {
   //return view('welcome');
    return '<h1>Hellooo newbs<h1>';
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' and your id is '.$id;
});


*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

//groups on post
Route::get('/postgroup/{postId}', ['as' => 'post_group', 'uses' => 'GroupsController@listgroup']);

//view created group
Route::get('/viewgroup/{groupId}', 'GroupsController@detailgroup' );

//create new group
Route::get('/postgroup/{postId}/create', 'GroupsController@creategroup');

//join group
Route::get('/home/join/{groupId}', 'GroupsController@join');

//exit group
Route::get('/home/exit', 'GroupsController@exit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/groups', 'GroupsController');


Route::get('/chat', 'ChatsController@index');       //single chat app
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');