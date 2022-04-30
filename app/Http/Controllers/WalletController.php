<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WalletController extends Controller
{
    public function saveWallet(Request $request){
        $address = $request->route("address");

        // $response = new Response("200");
        // $response->withCookie();

        return redirect('dashboard')->withCookie(cookie()->forever('trackfi_wallet_address', $address,null,null,null,false,false,null));
    }
}
