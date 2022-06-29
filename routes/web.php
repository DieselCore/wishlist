<?php

use App\Http\Controllers\GameController;
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

Route::redirect('/', '/games');

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/create', [GameController::class, 'create']);
Route::post('/games/create', [GameController::class, 'store']);
Route::get('/games/{game}/delete', [GameController::class, 'destroy']);
Route::get('/games/{game}/edit', [GameController::class, 'edit']);
Route::match(['put', 'patch'], '/games/{game}/update', [GameController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/database', function() {
    $db = app()->make('db');
    if ($db->connection()->getDatabaseName()) {
        return 'Connected to ' . $db->connection()->getDatabaseName();
    } else {
        return 'Could not connect to database';
    }
});