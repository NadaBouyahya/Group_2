<?php

use App\Http\Controllers\TutorsController;
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

Route::get('/tutors', [TutorsController::class, 'Get_all_tutors']);
Route::get('/tutors/{id}', [TutorsController::class, 'Get_tutor_byID']);

Route::post('/tutors', [TutorsController::class, 'insert_tutor']);

Route::put('/tutors', [TutorsController::class, 'edit_tutor']);
Route::delete('/tutors', [TutorsController::class, 'delete_tutor']);



