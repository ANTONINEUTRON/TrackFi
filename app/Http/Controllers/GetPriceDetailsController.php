<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GetPriceDetailsController extends Controller
{
    function getTokensDetails(Request $request){
        $data = $request->json()->all();//returned as a multidimensional array

        $test1 = $data[0]["amount"];
        $listOfAssetsId = [];
        $lisOfAssetsDetails = [];//an assoc. array that will help in search speed
        //Get list of assets id
        foreach ($data as $assetDetail) {
            $lisOfAssetsDetails[$assetDetail["asset-id"]] = $assetDetail;
            array_push($listOfAssetsId, $assetDetail["asset-id"]);
        }
        
        //Access Db and fetch
        $assetsDetails = DB::table('tokens')
                ->whereIn('id', $listOfAssetsId)
                ->get();

        //Append balance and value
        foreach ($assetsDetails as $item){
            $item->price = $item->price * session('multiplier',1);//moltiplier is defined in route file
            $balance = $lisOfAssetsDetails[$item->id]["amount"] /10**$item->decimals;//balance came in from the array received in the get request
            $item->value = $balance * $item->price;
            $item->balance = $balance;
            //edit circulating supply'
            $item->circulating_supply = $item->circulating_supply / 10**$item->decimals;
            $item->market_cap = $item->market_cap * session('multiplier',1);
        }

        $listOfNonTokensAssets = [];
        //Append id of assests that are not token
        foreach ($data as $item) {
            foreach ($assetsDetails as $aDetail){
                if($item["asset-id"] == $aDetail->id){
                    continue 2;
                }
            }
            //a non-token asset
            //insert the object into the response for frontend to filter
            // $assetsDetails[] = [];
            array_push($listOfNonTokensAssets, $item);
        }

        $returnableList = [
            "tokens" => $assetsDetails,
            "nonTokens" => $listOfNonTokensAssets
        ];
        
        //return to user  as json response
        return response()->json($returnableList);
    }
}
