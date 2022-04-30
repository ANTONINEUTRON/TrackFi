<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PresalesMail;
use Illuminate\Support\Facades\Mail;
use DB;

class PresalesController extends Controller
{
    function showPresales(Request $request){
        $receiving_address = "N3QCM6QCHNLCVR2VNJDBCY4RMK7RC7HRPHADTM42S7WQH3P2GR6CMUU57Q";
        return view('presale')->with('address',$receiving_address);
    }

    function acknowledgeTranx(Request $request){
        $transactionId = $request->input('transaction_id');
        $email = $request->input('email');
        $toolxAmount = $request->input("toolxAmount");
        $algoAmount = $request->input("amount"); //Algos
        
        echo "ID ".$transactionId."<br> Email ".$email."<br> Amount ".$algoAmount."<br> Toolx ".$toolxAmount."<br>";
        //save to database
        DB::insert('insert into presales values (?,?,?, ?)', [$transactionId,$email,$toolxAmount,$algoAmount]);

        //send message to the specified email address
        Mail::to($email)->send(new PresalesMail($transactionId, $algoAmount, $toolxAmount));
        
    }
}
?>