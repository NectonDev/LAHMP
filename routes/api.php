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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'players'], function () {
    Route::get('/', 'PlayerController@index');
    Route::get('/{id}', 'PlayerController@getByID');
    Route::get('/{id}/teams', 'PlayerController@getTeams');
    Route::get('/{id}/goals', 'PlayerController@getGoals');
    Route::post('/', 'PlayerController@savePlayer');
    Route::delete('/{id}', 'PlayerController@deletePlayer');
});

Route::group(['prefix' => 'matches'], function () {
    Route::get('/', 'MatchController@index');
    Route::get('/{id}', 'MatchController@getByID');
    Route::get('/{id}/teams', 'MatchController@getTeams');
    Route::get('/{id}/round', 'MatchController@getRound');
    Route::get('/{id}/goals', 'MatchController@getGoals');
    Route::get('/season/{season}', 'MatchController@getBySeason');
    Route::post('/', 'MatchController@saveMatch');
    Route::put('/{id}', 'MatchController@updateMatch');
    Route::delete('/{id}', 'MatchController@deleteMatch');
});

Route::group(['prefix' => 'teams'], function () {
    Route::get('/', 'TeamController@index');
    Route::get('/{id}', 'TeamController@getByID');
    Route::get('/season/{season}', 'TeamController@getBySeason');
    Route::get('/{id}/players', 'TeamController@getPlayers');
    Route::get('/{id}/goals', 'TeamController@getGoals');
    Route::post('/', 'TeamController@saveTeam');
    Route::delete('/{id}', 'TeamController@deleteTeam');
});

Route::group(['prefix' => 'rounds'], function () {
    Route::get('/', 'RoundController@index');
    Route::get('/{id}', 'RoundController@getByID');
    Route::get('/season/{season}', 'RoundController@getBySeason');
    Route::post('/', 'RoundController@saveRound');
    Route::delete('/{id}', 'RoundController@deleteRound');
});

Route::group(['prefix' => 'seasons'], function () {
    Route::get('/', 'SeasonController@index');
    Route::get('/{id}', 'SeasonController@getByID');
    Route::get('/{id}/rounds', 'SeasonController@getRounds');
    Route::get('/{id}/teams', 'SeasonController@getTeams');
    Route::post('/', 'SeasonController@saveSeason');
    Route::delete('/{id}', 'SeasonController@deleteSeason');
});

Route::group(['prefix' => 'goals'], function () {
    Route::get('/', 'GoalController@index');
    Route::get('/{id}', 'GoalController@getByID');
    Route::get('/{id}/team', 'GoalController@getTeam');
    Route::get('/{id}/player', 'GoalController@getPlayer');
    Route::get('/{id}/match', 'GoalController@getMatch');
    /*Route::post('/', 'GoalController@saveSeason');
    Route::delete('/{id}', 'SeasonController@deleteSeason');*/
});
