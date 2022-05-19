<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NftsController extends Controller
{
    function show(Request $request) {
        $currentUserAddress = $request->cookie('trackfi_wallet_address');
        return view('nfts', ['address'=>$currentUserAddress]);
    }
}
