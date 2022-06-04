<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresalesController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\NftsController;
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
})->name('/');

Route::get('/wallet_dashboard',[DashboardController::class, 'showDashboard']);

Route::get('/nfts',[NftsController::class, 'show']);

Route::get('/stats', [StatsController::class, 'showStats']);

Route::get('/presale', [PresalesController::class, 'showPresales']);

Route::post('/presale', [PresalesController::class, 'acknowledgeTranx']);

Route::get('/save_wallet/{address}', [WalletController::class, 'saveWallet']);

Route::post('/get_tokens_details',  [GetPriceDetailsController::class, 'getTokensDetails']);

Route::get('remove-wallet', function(){
    $cookie = \Cookie::forget('trackfi_wallet_address');
    // $response = new Response;
    // $response->withCookie($cookie);

    return response("deleted")->cookie($cookie);
});

Route::post('/set_currency_choice', function (Request $request) {
    $mltp = $request->input('multiplier');
    $value = $request->input('test');
    if($mltp == 1 && $value != "Algo"){
        $url = "https://algocharts.net/apiv2/?asset_in=0&asset_out=0";
        $response = Http::get($url);
        $data = json_decode($response->body());
        if(is_numeric($data->data[3])){
            $mltp = $data->data[3];
        }
    }
    //var_dump();//
    // die($mltp);
    
    session([
        'selectedCurrency' => $value,
        'multiplier' => $mltp
    ]);
    return redirect()->back();
})->name('set_currency_choice');

Route::get('banner-ads', function(){
    return view('banner_ads');
})->name("banner-ads");

Route::get('borrow-platform', function(){
    return view('borrow_platform');
})->name("borrow-platform");

Route::get('unverified-ads', function(){
    return view('unverified_ads');
})->name("unverified-ads");

Route::get('verified-ads', function(){
    return view('verified_ads');
})->name("verified-ads");


// Route::get('dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

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