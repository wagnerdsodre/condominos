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

use \App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/inquilinos',[EventController::class, 'cadinquilino']);
Route::get('/inquilinoslist',[EventController::class, 'listinquilino']);
Route::get('/unidade',[EventController::class, 'cadunidades'] );
Route::get('/unidadeslist',[EventController::class, 'listunidades']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/inquilino?search', function () {
    $pesq = request('search');
    $title = 'Pesquisa';
    return view('inquilino', ['title' => $title, 'pesp' => $pesq]);
          
});

Route::get('/inquilino/{id?}', function ($id = null) {
    $title = 'Inquilinos por id';
    return view('inquilinos', ['title' => $title, 'id' => $id]);
          
});