<?php

use App\Http\Controllers\Respuesta;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tm57Controller;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\PromolifeController;
use App\Http\Controllers\PromoSaleController;
use App\Http\Controllers\EstadisticasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//bh
Route::get('/',[Respuesta::class,'index']);
Route::post('/bhsave',[Respuesta::class,'store'])->name('encuesta.save');

//fin encuesta
Route::get('/finish',[Respuesta::class,'finish'])->name('encuesta.fin');


//estadisticas
Route::get('/estadisticas',[EstadisticasController::class,'index'])->name('estadisticas');

//promolife
Route::get('/promolife',[PromolifeController::class,'index'])->name('promolife');
Route::post('/promolifesave',[PromolifeController::class,'store'])->name('promo.save');

//promosale
Route::get('/promosale',[PromoSaleController::class,'index'])->name('promosale');
Route::post('/promosalesave',[PromoSaleController::class,'store'])->name('promosale.save');
//TM
Route::get('/trademarket57',[Tm57Controller::class,'index'])->name('tm57');
Route::post('/trademarket57save',[Tm57Controller::class,'store'])->name('tm57.save');

//Reportes Excel
Route::get('/export',[ExportController::class,'export'])->name('export');
