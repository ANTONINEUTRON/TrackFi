<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresalesController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\GetPriceDetailsController;
use App\Http\Controllers\admin\AdminWalletController;
use App\Http\Controllers\admin\AdvertController;

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
Route::post('/set_currency_choice', function (Request $request) {
    $value = $request->input('test');
    $mltp = $request->input('multiplier');
    session([
        'selectedCurrency' => $value,
        'multiplier' => $mltp
    ]);
})->name('set_currency_choice');

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('wallet', [AdminWalletController::class,'display'])
->middleware(['auth'])->name('wallet');

Route::get('view_presale', [App\Http\Controllers\admin\PresalesController::class, 'showPresales'])
->middleware(['auth'])->name('view_presale');

Route::get('advert', [AdvertController::class, 'displayAdminAdsPanel'])->middleware(['auth'])->name('advert');

Route::get('tokens', function () {
    return view('admin.tokens');
})->middleware(['auth'])->name('tokens');

Route::post('set_wallet', [AdminWalletController::class,'setWallet'])
->middleware(['auth'])->name('set_wallet');


Route::post('/add_adverts', [AdvertController::class, 'createNewAdvert'])
->middleware(['auth'])->name("add.advert");

Route::post('/delete_advert', [AdvertController::class, 'deleteAdvert'])
->middleware(['auth'])->name("delete.ads");

require __DIR__.'/auth.php';