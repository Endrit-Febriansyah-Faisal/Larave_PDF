<?php

use App\Http\Controllers\SiswaController;
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


Route::get ('/siswa',[SiswaController::class,'index']);
Route::get ('/siswa/tambah',[SiswaController::class,'tambah']);
Route::post('/siswa/store',[SiswaController::class,'store']);
Route::get ('/siswa/edit/{id}',[SiswaController::class,'edit']);
Route::put ('/siswa/update/{id}',[SiswaController::class,'update']);
Route::get ('/siswa/hapus/{id}',[SiswaController::class,'delete']);





// route::get ('/siswa/export_excel',[SiswaController::class,'export_excel']);
route::get ('/siswa/siswa_pdf',[SiswaController::class,'cetak_pdf']);


// Route::get('/siswa', 'SiswaController@index');
