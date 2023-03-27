<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', [UsuariosController::class, 'index']);                
Route::get('/usuarios/create', [UsuariosController::class, 'create']);
Route::post('/teste',[UsuariosController::class, 'store']);   
Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);          
Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);
Route::get('/usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/sorteio', [UsuariosController::class, 'sorteio'])->name('sorteio');
