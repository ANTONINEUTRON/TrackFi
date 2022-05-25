<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PresalesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use DB;

class PresalesController extends Controller
{
    function showPresales(Request $request){
        $res = DB::select('select wallet_address from wallet limit 1');
        $receiving_address = "No receiving address yet";
        if(!empty($res)){
            $receiving_address = $res[0]->wallet_address;
        }

        return view('presale')->with('address',$receiving_address);
    }

    function acknowledgeTranx(Request $request){
        $transactionId = $request->input('transaction_id');
        $toolxAmount = $request->input("tokenAmt");
        $algoAmount = $request->input("amount"); //Algos
    
        //save to database
        DB::insert('insert into presales values (?,?, ?)', [$transactionId,$algoAmount,$toolxAmount]);

        //send message to the specified email address
        // Mail::to($email)->send(new PresalesMail($transactionId, $algoAmount, $toolxAmount));
        
        return view('presale')->with('address',$this->receiving_address);
    }
}
?>