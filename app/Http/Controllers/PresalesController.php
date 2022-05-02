<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PresalesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use DB;

class PresalesController extends Controller
{
    private $receiving_address = "N3QCM6QCHNLCVR2VNJDBCY4RMK7RC7HRPHADTM42S7WQH3P2GR6CMUU57Q";
    function showPresales(Request $request){
        return view('presale')->with('address',$this->receiving_address);
    }

    function acknowledgeTranx(Request $request){
        $transactionId = $request->input('transaction_id');
        $toolxAmount = $request->input("toolxAmount");
        $algoAmount = $request->input("amount"); //Algos
    
        //save to database
        DB::insert('insert into presales values (?,?, ?)', [$transactionId,$algoAmount],$toolxAmount);

        //send message to the specified email address
        // Mail::to($email)->send(new PresalesMail($transactionId, $algoAmount, $toolxAmount));
        
        return view('presale')->with('address',$this->receiving_address);
    }
}
?>