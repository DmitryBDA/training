<?php

use App\Http\Controllers\PatternsController;
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

Route::get('/patterns/containerProperty', [PatternsController::class, 'containerProperty']);
Route::get('/patterns/delegation', [PatternsController::class, 'delegation']);
Route::get('/patterns/eventChannel', [PatternsController::class, 'eventChannel']);
Route::get('/patterns/abstractFactory', [PatternsController::class, 'abstractFactory']);
Route::get('/patterns/factoryMethod', [PatternsController::class, 'factoryMethod']);
Route::get('/patterns/staticFactory', [PatternsController::class, 'staticFactory']);
Route::get('/patterns/simpleFactory', [PatternsController::class, 'simpleFactory']);
Route::get('/patterns/singleton', [PatternsController::class, 'singleton']);
Route::get('/patterns/multiton', [PatternsController::class, 'multiton']);
Route::get('/patterns/adapter', [PatternsController::class, 'adapter']);
