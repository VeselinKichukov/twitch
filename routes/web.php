<?php

use App\Games\Controllers\GameController;
use App\Games\Controllers\IgdbGameController;
use App\Games\Controllers\RawgGameController;
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

Route::get('/', [GameController::class, 'index'])->name('index');
Route::post('/favourites', [GameController::class, 'addToFavourites'])->name('favourites');
Route::get('/our_choice', [GameController::class, 'ourChoice'])->name('our.choice');
Route::get('/my_games', [GameController::class, 'myGames'])->name('my.games');
Route::get('/rawg_games', [RawgGameController::class, 'search'])->name('rawg.search');
Route::get('/igdb_games', [IgdbGameController::class, 'search'])->name('igdb.search');
