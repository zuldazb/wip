<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\MakloonController;
use App\Http\Controllers\SPKController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article:name}', [ArticleController::class, 'show']);

Route::get('/fabrics', [FabricController::class, 'index']);

Route::get('/forecasts', [ForecastController::class, 'index']);

Route::get('/makloons', [MakloonController::class, 'index']);

Route::get('/consumptions', [ConsumptionController::class, 'index']);

Route::get('/spk_s', [SPKController::class, 'index']);
Route::get('/spk_s/{spk:no_spk}', [SPKController::class, 'show']);

Route::get('/incomings', [IncomingController::class, 'index']);