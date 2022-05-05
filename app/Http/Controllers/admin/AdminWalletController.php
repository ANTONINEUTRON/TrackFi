<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminWalletController extends Controller
{
    private $KEY = "receiver";
    function setWallet(Request $request){
        $newAddress = $request->input('wallet');
        if(!empty($newAddress)){
            DB::insert('insert into wallet (id, wallet_address) values (?, ?) on duplicate key update wallet_address = ? ', [$this->KEY, $newAddress, $newAddress]);
        }

        return view('admin.wallet',[
            'message' => "The wallet has been set successfully",
            'wallet' => $newAddress
        ]);
    }

    function display(Request $request){
        $address = DB::select('select * from wallet where id = ?', [$this->KEY]);
        if(!empty($address)){
            $address = $address[0]->wallet_address;
        }else{
            $address = "Set wallet address";
        }

        return view('admin.wallet',[
            'wallet' => $address
        ]);
    }
}
