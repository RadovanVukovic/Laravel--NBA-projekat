<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');


Route::group(['prefix' => '/players' ],

    function() {
        Route::get('/free', 'PlayerController@free');
        Route::get('/top-10', 'PlayerController@topTen');
        Route::get('/all-star', 'PlayerController@allStar');
        Route::get('/', 'PlayerController@index');
        Route::get('/{player}', 'PlayerController@show');
        Route::get('/{player}/edit', 'PlayerController@edit');
        Route::put('/{player}', 'PlayerController@update');
        Route::put('/{player}/fire', 'PlayerController@fire');
        Route::put('/{player}/add', 'PlayerController@add');
        Route::get('/transfers/{player}', 'PlayerController@transfers');
});


Route::group(['prefix' => '/teams' ],
    function() {
        Route::get('/', 'TeamController@index');
        Route::get('/{team}', 'TeamController@show');
    });

Route::get('/manager/{manager}', 'ManagerController@show');
Route::get('/schedule/{team}', 'ScheduleController@scheduleTeam');
Route::get('/schedule', 'ScheduleController@schedule');
Route::get('/standings', 'StandingsController@index');
Route::get('/transfers/{team}', 'TransferController@show');
Route::get('/games', 'GameController@index');
Route::get('/games/{game}', 'GameController@show');
Route::put('/games/play', 'GameController@play');



Auth::routes(['register' => false]);

