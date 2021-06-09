<?php

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/dashboard-teacher', [App\Http\Controllers\HomeController::class, 'dashboard_teacher'])->name('dashboard_teacher')->middleware('auth');
Route::get('/course/create', [App\Http\Controllers\HomeController::class, 'new_course'])->name('new_course')->middleware('auth');
Route::post('/course/create', [App\Http\Controllers\HomeController::class, 'create_course'])->name('create_course')->middleware('auth');
Route::get('/course/{id}', [App\Http\Controllers\HomeController::class, 'open_course'])->name('open_course')->middleware('auth');
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::get('/course/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_course'])->name('delete_course')->middleware('auth');
Route::get('/course/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit_course'])
    ->name('edit_course')
    ->middleware('auth');
Route::post('/course/update/{id}', [App\Http\Controllers\HomeController::class, 'update_course'])
    ->name('update_course')
    ->middleware('auth');
Route::get('/student/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_student'])
    ->name('delete_student')
    ->middleware('auth');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

















