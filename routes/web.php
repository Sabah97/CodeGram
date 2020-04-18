<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PagesController@index');

// Route::get('/users/{id}/{name}', function($id, $name){
//     return'This is user '. $name. ' with an Id of ' .$id;
// });

Auth::routes();

Route::get('/p/create' ,'PostsController@create');
Route::post('/p','PostsController@store');

 Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
 
