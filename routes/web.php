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
    return view('question1');
});
Route::post('/score', 'Q1@score');
Route::post('/judgment', 'Q1@judgment');
Route::get('/voicegift', function () {
    return view('question4');
});
Route::post('/voicegift','Q4@save');
Route::get('/test','Q4@test');
