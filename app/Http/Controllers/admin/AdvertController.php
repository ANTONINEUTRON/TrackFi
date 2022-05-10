<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\File;

class AdvertController extends Controller
{
    function createNewAdvert(Request $request){
        $org = $request->input('organization');
        $email = $request->input('email');
        $url = $request->input('url');
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
            'large_banner_url'=>$bigImageFileName,
            'small_banner_url'=>$smallImageFileName,
            'url'=>$url
        );

        DB::table('adverts')->insert($data);
        //return

        return redirect()->route("advert")->with(['actionResponse' => "The advert was inserted successfully"]);
    }
    function displayAdminAdsPanel(Request $request){
        //fetch ads from db
        $data = DB::select('select * from adverts');

        //get actionresponse
        $res = $request->session()->get('actionResponse');
        //pass to view for display
        return view("admin.advert", ["data"=>$data, "actionResponse"=>$res]);
    }
    function deleteAdvert(Request $request){
        $id = $request->input("id");
        $bigFilePath = $request->input("big_filepath");
        $smallFilePath = $request->input("small_filepath");

        File::delete($bigFilePath, $smallFilePath);

        DB::delete('delete from adverts where id = ?', [$id]);
        
        return redirect()->route("advert")->with(['actionResponse' => "The advert was deleted successfully"]);
    }
}
