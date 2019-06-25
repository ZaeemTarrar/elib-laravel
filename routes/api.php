<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Grade API
// List all grades
Route::get('grades','GradesController@index');
// List single Grades
Route::get('grade/{id}','GradesController@show');
//Create a grade
Route::post('grade','GradesController@store');
//update a grade
Route::put('grade','GradesController@store');
//Delete Grade
Route::delete('grade/{id}','GradesController@destroy');



//Language API
// List all languages
Route::get('languages','LanguagesController@index');
// List single languages
Route::get('language/{id}','LanguagesController@show');
//Create a languages
Route::post('language','LanguagesController@store');
//update a languages
Route::put('language','LanguagesController@store');
//Delete languages
Route::delete('language/{id}','LanguagesController@destroy');


//Category API
// List all Categories
Route::get('categories','CategoriesController@index');
// List single category
Route::get('category/{id}','CategoriesController@show');
//Create a category
Route::post('category','CategoriesController@store');
//update a category
Route::put('category','CategoriesController@store');
//Delete category
Route::delete('category/{id}','CategoriesController@destroy');


//Book API
// List all Books
Route::get('books','BooksController@index');
// List single book
Route::get('book/{id}','BooksController@show');
//Create a book
Route::post('book','BooksController@store');
//update a book
Route::put('book','BooksController@store');
//activation
Route::put('bookAct','BooksController@activation');
//Delete book
Route::delete('book/{id}','BooksController@destroy');

//user API
// List all Users
Route::get('users','UsersController@index');
// List single user
Route::get('user/{id}','UsersController@show');
//Create a user
Route::post('user','UsersController@store');
//update a user
Route::put('user','UsersController@store');
//avtivate
Route::put('userAct','UsersController@activation');
//Delete user
Route::delete('user/{id}','UsersController@destroy');


//Notification API
// List all Notifications
Route::get('notifications','NotificationsController@index');
// List single notification
Route::get('notification/{id}','NotificationsController@show');
//Create a notification
Route::post('notification','NotificationsController@store');
//update a notification
Route::put('notification','NotificationsController@store');
//Delete notification
Route::delete('notification/{id}','NotificationsController@destroy');


//views API >> Fetching views
// book_id search
Route::get('viewBook/{book}','ViewsController@showBook');
//user_id search
Route::get('viewUser/{user}' , 'ViewsController@showUser');
//for both
Route::get('view/{user}/{book}' , 'ViewsController@show');


//Favourite API  >> fetching favourites
//book_id search
Route::get('favBook/{book}','FavouritesController@showBook');
//user_id search
Route::get('favUser/{user}','FavouritesController@showUser');
//for both
Route::get('fav/{user}/{book}','FavouritesController@show');


//Rating API >> Fetching rating
//book_id search
Route::get('ratingBook/{book}','RatingsController@showBook');
//user_id search
Route::get('ratingUser/{user}','RatingsController@showUser');
//for both
Route::get('rating/{user}/{book}','RatingsController@show');


//Bookmark API >> Fetching Bookmark
//book_id search
Route::get('bmarkBook/{book}','BookmarksController@showBook');
//user_id search
Route::get('bmarkUser/{user}','BookmarksController@showUser');
// for both
Route::get('bmark/{user}/{book}','BookmarksController@show');
//insert >> Marking a bookmark
Route::post('bmark','BookmarksController@store');
