<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NoteController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/etudiant', 'App\Http\Controllers\EtudiantController@index');
Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
Route::get('/detail/{id}', [EtudiantController::class, 'details'])->name('detail');
Route::get('/index',[App\Http\Controllers\NoteController::class,'resultat'])->name('etudiant-index');
Route::get('/update/{id}',[App\Http\Controllers\EtudiantController::class,'update'])->name('update');
Route::get('view',[App\Http\Controllers\EtudiantController::class,'get_l1'])->name('get');
Route::get('/modules', [App\Http\Controllers\ModulesController::class, 'index']);
Route::get('/prof/{id}', [App\Http\Controllers\EtudiantController::class, 'all_etudiant'])->name('note.prof');