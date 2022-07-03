<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirdropController extends Controller
{
    function showAirdropPage(Request $request){
        $currentUserAddress = $request->cookie('trackfi_wallet_address');

        return view('airdrop', ['address'=>$currentUserAddress]);
    }

    function saveAssetOptin(Request $request){
        $request->validate([
            "address" => ['required'],
            "handles" => ['required']
        ]);

        $address = $request->input("address");
        $handle = $request->input("handles");
        $tranxId = $request->input("transactionId");

        //insert into db
        \DB::table('airdrop')->upsert(['address'=>$address, 'handles'=>$handle, 'transactionId'=>$tranxId],
        ['address'],
        ['handles','transactionId']);
        
        
        $currentUserAddress = $request->cookie('trackfi_wallet_address');

        return view('airdrop', [
            'message'=>"You have optin to Trackfi and your details has been saved successfully",
            'address'=>$currentUserAddress
        ]);
    }

    function showAdminView(){
        $data = \DB::table("airdrop")->get();

        return view('admin.airdrops',['data'=>$data]);
    }

    function deleteAirdrop(Request $request){
        \DB::table("airdrop")->where('address',$request->input("address"))->delete();
        return view('admin.airdrops', ['message'=>"Deleted Successfully"]);
    }
}
