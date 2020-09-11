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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//movie
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}', ['as'=> 'movie/destroy', 'uses' => 'MovieController@destroy' ]);
Route::post('movie/show', ['as'=> 'movie/show', 'uses' => 'MovieController@show' ]);
Route::post('movie/update/{id}', ['as' => 'movie/update', 'uses' => 'MovieController@update' ]);
//rentals
Route::resource('rentals', 'RentalsController');
Route::get('rentals/destroy/{id}', ['as'=> 'rentals/destroy', 'uses' => 'RentalsController@destroy' ]);
Route::post('rentals/show', ['as'=> 'rentals/show', 'uses' => 'RentalsController@show' ]);
Route::post('rentals/update/{id}', ['as' => 'rentals/update', 'uses' => 'RentalsController@update' ]);
//roles
Route::resource('roles', 'RolesController');
Route::get('roles/destroy/{id}', ['as'=> 'roles/destroy', 'uses' => 'RolesController@destroy' ]);
Route::post('roles/show', ['as'=> 'roles/show', 'uses' => 'RolessController@show' ]);
Route::post('roles/update/{id}', ['as' => 'roles/update', 'uses' => 'RolesController@update' ]);
//statuses
Route::resource('statuses', 'StatusesController');
Route::get('statuses/destroy/{id}', ['as'=> 'statuses/destroy', 'uses' => 'StatusesController@destroy' ]);
Route::post('statuses/show', ['as'=> 'statuses/show', 'uses' => 'StatusesController@show' ]);
Route::post('statuses/update/{id}', ['as' => 'statuses/update', 'uses' => 'StatusesController@update' ]);
//type_statuses
Route::resource('type_statuses', 'Type_statusesController');
Route::get('type_statuses/destroy/{id}', ['as'=> 'type_statuses/destroy', 'uses' => 'Type_statusesController@destroy' ]);
Route::post('type_statuses/show', ['as'=> 'type_statuses/show', 'uses' => 'Type_statusesController@show' ]);
Route::post('type_statuses/update/{id}', ['as' => 'type_statuses/update', 'uses' => 'Type_statusesController@update' ]);
//users
Route::resource('users', 'UsersController');
Route::get('users/destroy/{id}', ['as'=> 'users/destroy', 'uses' => 'UsersController@destroy' ]);
Route::post('users/show', ['as'=> 'users/show', 'uses' => 'UsersController@show' ]);
Route::post('users/update/{id}', ['as' => 'users/update', 'uses' => 'UsersController@update' ]);
//movie_rental
Route::resource('movie_rental', 'Movie_rentalController');
Route::get('movie_rental/destroy/{id}', ['as'=> 'movie_rental/destroy', 'uses' => 'Movie_rentalController@destroy' ]);
Route::post('movie_rental/show', ['as'=> 'movie_rental/show', 'uses' => 'Movie_rentalController@show' ]);
Route::post('movie_rental/update/{id}', ['as' => 'movie_rental/update', 'uses' => 'Movie_rentalController@update' ]);
//category_movie
Route::resource('category_movie', 'Category_movieController');
Route::get('category_movie/destroy/{id}', ['as'=> 'category_movie/destroy', 'uses' => 'Category_movieController@destroy' ]);
Route::post('category_movie/show', ['as'=> 'category_movie/show', 'uses' => 'Category_movieController@show' ]);
Route::post('category_movie/update/{id}', ['as' => 'category_movie/update', 'uses' => 'Category_movieController@update' ]);
//categories
Route::resource('categories', 'CategoriesController');
Route::get('categories/destroy/{id}', ['as'=> 'categories/destroy', 'uses' => 'CategoriesController@destroy' ]);
Route::post('categories/show', ['as'=> 'categories/show', 'uses' => 'CategoriesController@show' ]);
Route::post('categories/update/{id}', ['as' => 'categories/update', 'uses' => 'CategoriesController@update' ]);

