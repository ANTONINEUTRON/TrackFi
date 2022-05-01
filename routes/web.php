<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresalesController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\StatsController;

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


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';