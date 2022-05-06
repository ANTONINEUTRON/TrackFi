<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresalesController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\GetPriceDetailsController;
use App\Http\Controllers\admin\AdminWalletController;

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
    return view('index');
});
Route::get('/wallet_dashboard',[DashboardController::class, 'showDashboard']);
Route::post('/wallet_dashboard', [DashboardController::class, 'showDashboard']);
Route::get('/nfts', function () {
    return view('nfts');
});
Route::get('/stats', [StatsController::class, 'showStats']);
Route::get('/presale', [PresalesController::class, 'showPresales']);
Route::post('/presale', [PresalesController::class, 'acknowledgeTranx']);
Route::get('/save_wallet/{address}', [WalletController::class, 'saveWallet']);
Route::get('/price/{assetid}',  [GetPriceDetailsController::class, 'getPrice']);


Route::get('dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('wallet', [AdminWalletController::class,'display'])
->middleware(['auth'])->name('wallet');

Route::get('view_presale', [App\Http\Controllers\admin\PresalesController::class, 'showPresales'])
->middleware(['auth'])->name('view_presale');

Route::get('advert', function () {
    return view('admin.advert');
})->middleware(['auth'])->name('advert');

Route::get('tokens', function () {
    return view('admin.tokens');
})->middleware(['auth'])->name('tokens');

Route::post('set_wallet', [AdminWalletController::class,'setWallet'])
->middleware(['auth'])->name('set_wallet');

require __DIR__.'/auth.php';