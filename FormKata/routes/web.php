<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasosPruebasController;
use App\Http\Controllers\PdfController;
use App\Models\CasosPruebas;

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

Route::get('/observaCP/{idCP}', function ($idCP){

    CasosPruebas::where('id',$idCP)
        ->update([
            'aprobador' => 'observacion'
        ]);

    return redirect('/home');
})
    ->name('observaCP');

Route::get('/apruebaCP/{idCP}', function ($idCP){

    CasosPruebas::where('id',$idCP)
        ->update([
            'aprobador' => 'conforme'
        ]);

    return redirect('/home');
})
    ->name('apruebaCP');

Route::get('pdf/{id}', [PdfController::class, 'index'])->name('pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
