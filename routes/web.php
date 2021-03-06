<?php

// use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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
Auth::routes();
Route::get('/email', function(){
    return new NewUserWelcomeMail();
});
// Route::get('/','PagesController@index');

// Route::get('/users/{id}/{name}', function($id, $name){
//     return'This is user '. $name. ' with an Id of ' .$id;
// });


Route::post('follow/{user}', 'FollowsController@store');
Route::get('/feed','PostsController@index');
 Route::get('/','PagesController@index');


Route::get('/p/create' ,'PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/p/{post}' ,'PostsController@show');


 Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
 Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
 Route::put('/profile/{user}', 'ProfilesController@update')->name('profiles.update');
 
