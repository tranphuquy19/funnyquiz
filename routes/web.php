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
	return redirect()->Route('home');
});
Route::get('/home', function () {
	return redirect()->Route('home');
});
Auth::routes();

Route::get('/home.html', 'quizController@showQuiz')->name('home');
Route::get('/quiz/{idQuiz}', 'quizController@showQuizid');
Route::get('/quiz', 'quizController@showMenuQuiz');
Route::get('/logout', 'HomeController@index');
Route::get('/abc',function(){
	echo 'a_h_i_h_i';
});
Route::get('/abcd',function(){
	echo 'a_h_i_h_i';
});
