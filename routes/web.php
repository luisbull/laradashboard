<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
// Route::get('/', 'HomeController'); // PREVIOUS to laravel 8

/* Fot this to work in older version of Laravel 8.
        - open file app/Providers/RouteServiceProvider.php
        - need to add:
            protected $namespace = 'App\Http\Controllers';
        at the top inside class:
            class RouteServiceProvider {}
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
// // Route::get('cursos', 'CursoController@index'); PREVIOUS to larevel 8

// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// // Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

// // Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// // Route::put('cursos/{id}/update', [CursoController::class, 'update'])->name('cursos.update');
// Route::put('cursos/{curso}/update', [CursoController::class, 'update'])->name('cursos.update');

// // Route::delete('cursos/{id}', [CursoController::class, 'delete'])->name('cursos.delete');
// Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');



// Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'create'])->name('create');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact.store', [ContactController::class, 'store'])->name('contact.store');

Route::get('welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('home2', [HomeController::class, 'home2'])->name('home2');
Route::get('tailwind', [HomeController::class, 'tailwind'])->name('tailwind');