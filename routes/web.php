<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\CidadesController;

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


Route::prefix('/clubes')->name('clube.')->group( function(){
    Route::get('/', [ClubeController::class, 'index'])->name('index');
    Route::get('/create', [ClubeController::class, 'create'])->name('create');
    Route::post('/', [ClubeController::class, 'store'])->name('store');
    Route::put('/{id}', [ClubeController::class, 'update'])->name('update');
    Route::delete('/{id}', [ClubeController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [ClubeController::class, 'edit'])->name('edit');
});

Route::prefix('/cidades')->name('cidades.')->group( function(){
    Route::get('/', [CidadesController::class, 'index'])->name('index');
    Route::get('/create', [CidadesController::class, 'create'])->name('create');
    Route::post('/', [CidadesController::class, 'store'])->name('store');
    Route::put('/{id}', [CidadesController::class, 'update'])->name('update');
    Route::delete('/{id}', [CidadesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [CidadesController::class, 'edit'])->name('edit');
});
// 


Route::prefix('/torcedor')->name('torcedor.')->group( function(){
    Route::get('/', [CidadesController::class, 'index'])->name('index');
    Route::get('/create', [CidadesController::class, 'create'])->name('create');
    Route::post('/', [CidadesController::class, 'store'])->name('store');
    Route::put('/{id}', [CidadesController::class, 'update'])->name('update');
    Route::delete('/{id}', [CidadesController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [CidadesController::class, 'edit'])->name('edit');
});
// Route::get('/clubes', [ClubeController::class, 'index']);

// Route::get('/clubes/gremio',function(){
//     return view('clubes.gremio');
// })->name('gremio');