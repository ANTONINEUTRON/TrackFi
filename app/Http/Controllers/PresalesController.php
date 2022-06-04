<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PresalesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use DB;

class PresalesController extends Controller
{
    private $receiving_address = "No receiving address yet";
        
    function showPresales(Request $request){
        $res = DB::select('select wallet_address from wallet limit 1');
        if(!empty($res)){
            $this->receiving_address = $res[0]->wallet_address;
        }

        return view('presale')->with('address',$this->receiving_address);
    }

    function acknowledgeTranx(Request $request){
        $transactionId = $request->input('transaction_id');
        $trackfiAmount = $request->input("tokenAmt");
        $algoAmount = $request->input("amount"); //Algos
    
        //save to database
        DB::insert('insert into presales values (?,?, ?)', [$transactionId,$algoAmount,$trackfiAmount]);

        //send message to the specified email address
        // Mail::to($email)->send(new PresalesMail($transactionId, $algoAmount, $trackfiAmount));
        
        return view('presale')->with('address',$this->receiving_address);
    }
}
?>