<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $listOfAds = $this->get3Ads();
        /**the array will contain:
         * a url to big banner, small banner 1 and small banner 2
         * an array of ids of size 3
         * an array of urls of size 3
         * **/
        if(!empty($listOfAds)){//if size == 2 it implies there is no ads in the DB

            View::share('bigBanner', $listOfAds["bigBanner"]);
            View::share('smallBanner1', $listOfAds["smallBanner1"]);
            View::share('smallBanner2', $listOfAds["smallBanner2"]);
        }
    }

    private function get3Ads(){
        $bigBannerQuery = DB::select('select id,large_banner_url as banner,url from adverts where large_banner_url is not null order by rand() limit 1');
        $smallBanner1Query = DB::select('select id,small_banner1_url as banner,url from adverts where small_banner1_url is not null order by rand() limit 1');
        $smallBanner2Query = DB::select('select id,small_banner2_url as banner,url from adverts where small_banner2_url is not null order by rand() limit 1');

        $listOf3Ads = [
            "bigBanner" => $bigBannerQuery,
            "smallBanner1" => $smallBanner1Query,
            "smallBanner2" => $smallBanner2Query
        ];

        return $listOf3Ads;
    }

    // private function get3RandomAds(){
    //     $listOf3Ads = DB::select('select * from adverts order by rand() limit 3');
    //     $listOfAdsToShow = array(
    //         "ids"=>array(),//0 for big while 1 and 2 are for small ones // serve for tracking viewed ads
    //         "urls"=>array()
    //     );
    //     if(!empty($listOf3Ads)){
    //         $listOfAdsToShow["large_banner_url"] = $listOf3Ads[0]->large_banner_url; //use the first ad as big banner
    //         array_push($listOfAdsToShow["ids"],$listOf3Ads[0]->id);//insert to the ids array
    //         array_push($listOfAdsToShow["urls"],$listOf3Ads[0]->url);//insert into the urls array

    //         //get 2 random small banner to add - take into cognizance ads might be less than 3
    //         $listOfSmallBanners = array();
    //         switch (count($listOf3Ads)) {
    //             case 1:
    //                 $listOfAdsToShow["small_banner_url1"] = $listOf3Ads[0]->small_banner_url;
    //                 $listOfAdsToShow["small_banner_url2"] = $listOf3Ads[0]->small_banner_url;
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[0]->id);
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[0]->id);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[0]->url);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[0]->url);
    //                 break;
    //             case 2:
    //                 $listOfAdsToShow["small_banner_url1"] = $listOf3Ads[0]->small_banner_url;
    //                 $listOfAdsToShow["small_banner_url2"] = $listOf3Ads[1]->small_banner_url;
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[0]->id);
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[1]->id);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[0]->url);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[1]->url);
    //                 break;
    //             case 3:
    //                 $listOfAdsToShow["small_banner_url1"] = $listOf3Ads[1]->small_banner_url;
    //                 $listOfAdsToShow["small_banner_url2"] = $listOf3Ads[2]->small_banner_url;
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[1]->id);
    //                 array_push($listOfAdsToShow["ids"],$listOf3Ads[2]->id);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[1]->url);
    //                 array_push($listOfAdsToShow["urls"],$listOf3Ads[2]->url);
    //                 break;
    //         }
    //     }

    //     return $listOfAdsToShow;
    // }
}
