<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard(Request $request){
        //Get address
        $address = $request->input('address');
        $currentUserAddress = $request->cookie('trackfi_wallet_address');
        // die($currentUserAddress);
        //Check address
        if(!empty($address)){
            return view('dashboard')->with('address',$address);
        }else if(!empty($currentUserAddress)){
            return view('dashboard')->with('address',$currentUserAddress);
        }else{
            //Return home view with session error that is alerted
            return view('index')->with('error',"Invalid Address! \\nEither you connect your wallet address or paste a wallet address");
        }
        //Returns dashboard view which has a js trigger for the address
    }
}