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

use App\Man;
use App\Passport;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/passport', function () {
    $user = User::find(1);
    /*return $pass_name;*/
    echo $user->passport;
    /*foreach ($user->passport as $name){
          echo $name->name;
    }*/

});

Route::get('/user', function () {
    $passport = Passport::find(1);
   echo $passport->user;

});


Route::get('/man', function () {
    $men=Man::find(1);

/*    echo $men->cars;*/
    foreach($men->cars as $cars){
        echo $cars->name;
    }

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


