<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/todos', [TodosController::class, 'index']);
Route::get('/todos/{todos}', [TodosController::class, 'show']);
Route::patch('/todos/{todos}', [TodosController::class, 'update']);
Route::delete('/todos/{todos}', [TodosController::class, 'destroy']);


