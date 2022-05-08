<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdvertController extends Controller
{
    function createNewAdvert(Request $request){
        $org = $request->input('organization');
        $email = $request->input('email');
        $views = $request->input('views');
        $clicks = $request->input('clicks');
        //upload files
        $bigImage = $request->file('big_banner');
        $smallImage = $request->file('small_banner');

        //Save to filesystem
        $bigImageFileName = date('YmdHi').$org."big_image";
        $smallImageFileName = date('YmdHi').$org."small_image";
        $bigImage->move(public_path('public/images/ads'),$bigImageFileName);
        $smallImage->move(public_path('public/images/ads'),$smallImageFileName);
        
        //store to database
        $data = array(
            'organization'=>$org,
            'email'=>$email,
            'views'=>$views,
            'clicks'=>$clicks,
            'large_banner_url'=>$bigImageFileName,
            'small_banner_url'=>$smallImageFileName
        );

        DB::table('adverts')->insert($data);
        //return

        return view('admin.advert', ['insertionResponse' => "The ads was inserted successfully"]);
    }
}
