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

Route::get('/','todoController@home')->name('todo.home');


Route::group(['middleware'=>'auth'],function(){

Route::get('/todo', 'todoController@index')->name('todo.index');

Route::get('/todo/create', 'todoController@create')->name('todo.create');

Route::get('/todo/choose', 'todoController@choose')->name('todo.choose');




//１日のタスクルーティング
Route::get('/todo/today', 'todoController@today')->name('todo.today');

Route::post('/todo/store', 'todoController@store')->name('todo.store');

Route::get('todo/{id}/show', 'todoController@show')->name('todo.show');

Route::get('todo/{id}/edit', 'todoController@edit')->name('todo.edit');

Route::post('todo/{id}', 'todoController@update')->name('todo.update');

Route::get('todo/{id}/check', 'todoController@check')->name('todo.check');

Route::post('todo/{id}/destroy', 'todoController@destroy')->name('todo.destroy');



//一週間のタスクのルーティング
Route::get('week', 'todoController@week')->name('todo.week');

Route::get('weekCreate', 'todoController@weekCreate')->name('todo.weekCreate');

Route::post('week/store', 'todoController@weekStore')->name('todo.weekStore');

Route::get('week/{id}', 'todoController@weekShow')->name('todo.weekShow');

Route::get('week/{id}/edit', 'todoController@weekEdit')->name('todo.weekEdit');

Route::post('week/{id}/update', 'todoController@weekUpdate')->name('week.update');

Route::get('week/{id}/check', 'todoController@weekCheck')->name('todo.checkWeek');

Route::post('week/{id}/destroy', 'todoController@weekDestroy')->name('week.destroy');




//いつかのタスクのルーティング
Route::get('someday', 'todoController@someday')->name('todo.someday');

Route::get('someday/Create', 'todoController@somedayCreate')->name('todo.somedayCreate');

Route::post('someday/store', 'todoController@somedayStore')->name('todo.somedayStore');

Route::get('someday/{id}', 'todoController@somedayShow')->name('todo.somedayShow');

Route::get('someday/{id}/edit' ,'todoController@somedayEdit')->name('todo.somedayEdit');

Route::post('someday/{id}/update', 'todoController@somedayUpdate')->name('todo.somedayUpdate');

Route::get('someday/{id}/check', 'todoController@somedayCheck')->name('todo.somedayCheck');

Route::post('someday/{id}/destroy', 'todoController@somedayDestroy')->name('todo.somedayDestroy');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('login/github', 'Auth\LoginController@redirectToGithub');
// Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback');
