<?php

use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


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

Route::get('/', [HomeController::class, 'Home']);

Route:: prefix ('product')->group (function () {
    Route::get ('/category/food-beverage', [ProductController::class, 'food' ] ) ;
    Route::get ('/category/beauty-health', [ProductController::class, 'beauty' ] ) ;
    Route::get ('category/home-care ', [ProductController::class, 'home' ] ) ;
    Route::get ('category/baby-kid ', [ProductController::class, 'baby' ] ) ;
    });

Route::get ('/user/{name?}/id/{id}', function ($name='null', $id='null') {
    return 'Nama saya '. $name. ' ID saya :'. $id;
});

Route::get ("/sell", [SellController::class , 'penjualan']);