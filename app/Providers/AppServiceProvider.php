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

}
