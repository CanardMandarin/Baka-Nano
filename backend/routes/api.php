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

Route::get('/languages', 'GameController@getLanguages');
Route::get('/levels', 'GameController@getLevels');
Route::get('/kanji/{kanji}', 'GameController@getKanji');
Route::get('/sentence/play/{id}', 'GameController@playSentence');
Route::get('/sentences/{level}/{language}', 'GameController@getSentences');