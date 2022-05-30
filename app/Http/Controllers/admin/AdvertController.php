<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\File;

class AdvertController extends Controller
{
    function createNewAdvert(Request $request){
        $url = $request->input('url');
        //upload files
        $bigImage = $request->file('big_banner');
        $smallImage1 = $request->file('small_banner1');
        $smallImage2 = $request->file('small_banner2');
        if(empty($bigImage) && empty($smallImage1) && empty($smallImage2)){
            return redirect()->route("advert")->with(['actionResponse' => "All 3 banners slot can't be empty"]);
        }

        //Save to filesystem
        $bigImageFileName = null;
        $smallImage1FileName = null;
        $smallImage2FileName = null;
        if(!empty($bigImage)){
            $bigImageFileName = time()."big_image";
            $bigImage->move(public_path('public/images/ads'),$bigImageFileName);
        }
        if(!empty($smallImage1)){
            $smallImage1FileName = time()."small_image1";
            $smallImage1->move(public_path('public/images/ads'),$smallImage1FileName);
        }
        if(!empty($smallImage2)){
            $smallImage2FileName = time()."small_image2";
            $smallImage2->move(public_path('public/images/ads'),$smallImage2FileName);
        }
        
        //store to database
        $data = array(
            'large_banner_url'=>$bigImageFileName,
            'small_banner1_url'=>$smallImage1FileName,
            'small_banner2_url'=>$smallImage2FileName,
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
        $smallFilePath1 = $request->input("small_filepath1");
        $smallFilePath2 = $request->input("small_filepath2");

        File::delete($bigFilePath, $smallFilePath1, $smallFilePath2);

        DB::delete('delete from adverts where id = ?', [$id]);
        
        return redirect()->route("advert")->with(['actionResponse' => "The advert was deleted successfully"]);
    }
}
