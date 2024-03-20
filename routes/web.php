<?php
use App\Http\Controllers\ArticuloController;
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
    return view('auth.login');
});
Route::get('/articulos/manuais', function (){
    return view('articulo.manuais');
});
Route::get('/articulos/atualizacoes', function (){
    return view('articulo.atualizacoes');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');

Route::get('/articulos/{id}/show', function (){
    return view('articulo.show');
});

Route::resource('empresas','App\Http\Controllers\EmpresaController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
