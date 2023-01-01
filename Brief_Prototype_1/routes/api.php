<?php

use App\Http\Controllers\BriefController;
use App\Http\Controllers\TachesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// briefs
Route::get('/briefs', [BriefController::class, 'Get_all_briefs']);
Route::get('/briefs/{id}', [BriefController::class, 'Get_brief_byID']);


Route::post('/briefs', [BriefController::class, 'insert_brief']);


// tasks
Route::get('/tasks', [TachesController::class, 'Get_all_tasks']);

Route::get('/tasks/{id}', [TachesController::class, 'Get_task_byID']);

