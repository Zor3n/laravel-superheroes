<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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

Route::get('/', [DataController::class, 'HeroesData']);

Route::group(['prefix' => '{locale?}'], function($locale = null){

    Route::get('/', [DataController::class, 'HeroesData'])->middleware('localization');
    // Route::get('/', [DataController::class, 'HeroesData']);

    Route::get('viewers', function($locale = 'en'){
        // App::setLocale($locale);
        return view('viewers');
    })->middleware('localization');
});

