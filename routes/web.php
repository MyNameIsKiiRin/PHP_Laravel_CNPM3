<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\ProductsAdminController;
use App\Http\Controllers\Admin\ImportController;
use App\Http\Controllers\Admin\RevenueController;
use App\Http\Controllers\Admin\PaymentController;

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
Route::get('/',[HomeController::class,'index']);
Route::get('product/{id}',[ProductsController::class,'index'])->name('detail.product');
Route::prefix('admin')->group(function () {
    Route::get('all-product',[ProductsAdminController::class,'index'])->name('allproduct');
    Route::get('create-product',[ProductsAdminController::class,'getCreate'])->name('getcreate');
    Route::post('create-product', [ProductsAdminController::class,'postCreate'])->name('post.product');

    Route::get('detail-product/{id}',[ProductsAdminController::class,'getUpdate'])->name('getupdate');
    Route::post('detail-product/{id', [ProductsAdminController::class,'postUpdate'])->name('postupdate');

    Route::get('import', [ImportController::class,'index'])->name('getimport');
    Route::post('import', [ImportController::class,'postImport'])->name('postimport');
    Route::get('thong-ke', [RevenueController::class,'index'])->name('getrevenue');

    Route::get('payment', [PaymentController::class,'index'])->name('indexpayment');
    Route::get('payment', [PaymentController::class,'getUnpaid'])->name('postunpaid');
});