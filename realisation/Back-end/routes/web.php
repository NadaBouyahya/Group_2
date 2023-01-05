<?php

use App\Http\Controllers\TutorsController;
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

Route::get('/tables', function () {
    return view('table');
});

// Route::get('/brief', function () {
//     return view('brief');
// })->name('brief');

Route::get('/tutor', function () {
    return view('tutor');
})->name('tutor');

Route::get('/tutors', [TutorsController::class, 'Get_all_tutors']);
Route::get('/tutor_byId/{id}', [TutorsController::class, 'Get_tutor_byID']);


Route::post('/insert_tutor', [TutorsController::class, 'insert_tutor']);
Route::post('/tutor/{id}', [TutorsController::class, 'edit_tutor']);
Route::get('/tutor/{id}', [TutorsController::class, 'delete_tutor']);


