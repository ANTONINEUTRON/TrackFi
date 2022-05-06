<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetPriceDetailsController extends Controller
{
    function getPrice(Request $request){
        $walletid = $request->route("assetid");
        //Access Db and fetch
        $result = DB::select('select price,price_change_24 from tokens where token_id = ?', [$walletid]);
        //convert to json response
        //return to user  as response
        return response()->json($result);
    }
}
