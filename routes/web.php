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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('peaple', \App\Http\Controllers\PeapleController::class);

Route::resource('avtomobil', \App\Http\Controllers\AvtomobilistController::class);

Route::resource('gsm', \App\Http\Controllers\GsmController::class);

Route::resource('listExport', \App\Http\Controllers\LictochekController::class);

Route::resource('bild', \App\Http\Controllers\ListEditCreateController::class);

Route::get('gsm_ex/export/', [\App\Http\Controllers\GsmController::class, 'gsmExport']);

Route::get('gsm_ex/list/', [\App\Http\Controllers\GsmController::class, 'listExport']);

Route::get('gsm_ex/list2/', [\App\Http\Controllers\GsmController::class, 'listExport2']);

Route::get('gsm_ex/export/{id}', [\App\Http\Controllers\GsmController::class, 'listExport']);

Route::get('invoices/download', [\App\Http\Controllers\InvoiceController::class, 'download']);


Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');

Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');

Route::resource('carting', \App\Http\Controllers\CartingController::class);

Route::resource('dashbord', \App\Models\DashBord::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
