<?php

use App\Http\Controllers\PersonasController;
use app\Http\Controllers\TransporteController;
use app\Http\Controllers\CamionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/plantilla');
});
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

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'ToDoController@index');
    Route::post('/update', 'ToDoController@update')->name('update');

    Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
    Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
    Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
    Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
    Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
    Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
    Route::delete('/personas/{id}', [PersonasController::class, 'delete'])->name('personas.delete');

    Route::get('/indext', [\App\Http\Controllers\TransporteController::class, 'indext'])->name('transportes.indext');
    Route::get('/createt', [\App\Http\Controllers\TransporteController::class, 'createt'])->name('transportes.createt');
    Route::post('/storet', [\App\Http\Controllers\TransporteController::class, 'storet'])->name('transportes.storet');
    Route::get('/editt/{id}', [\App\Http\Controllers\TransporteController::class, 'editt'])->name('transportes.editt');
    Route::put('/updatet/{id}', [\App\Http\Controllers\TransporteController::class, 'updatet'])->name('transportes.updatet');
    Route::get('/showt/{id}', [\App\Http\Controllers\TransporteController::class, 'showt'])->name('transportes.showt');
    Route::delete('/destroyt/{id}', [\App\Http\Controllers\TransporteController::class, 'destroyt'])->name('transportes.destroyt');

    Route::get('/indexc', [\App\Http\Controllers\CamionController::class, 'indexc'])->name('camiones.indexc');
    Route::get('/createc', [\App\Http\Controllers\CamionController::class, 'createc'])->name('camiones.createc');
    Route::post('/storec', [\App\Http\Controllers\CamionController::class, 'storec'])->name('camiones.storec');
    Route::get('/editc/{id}', [\App\Http\Controllers\CamionController::class, 'editc'])->name('camiones.editc');
    Route::put('/updatec/{id}', [\App\Http\Controllers\CamionController::class, 'updatec'])->name('camiones.updatec');
    Route::get('/showc/{id}', [\App\Http\Controllers\CamionController::class, 'showc'])->name('camiones.showc');
    Route::delete('/camiones/{id}', [\App\Http\Controllers\CamionController::class, 'delete'])->name('camiones.delete');
    Route::post('/camiones/{id}', [CamionController::class, 'store'])->name('camiones.store');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
