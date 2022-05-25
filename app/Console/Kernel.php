<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function(){
            DB::table('tokens')->truncate();
            $arrayOfTokens = array();//will be inserted into database
            $listOfTokensPriceDetails = $this->getTokensPriceDetails();
            $listOfTokensDetails = $this->getTokensDetails();

            foreach($listOfTokensPriceDetails as $item){
                //Add params to new inner array\
                $arr = array(
                    "id"=>$item->id,
                    "name"=>$item->name,
                    "unit_name"=>$item->ticker,
                    "price"=>$item->price,
                    "price_change_24"=>$item->change24h,
                    "market_cap"=>$item->market_cap,
                    "volume24h"=>$item->volume24h,
                    "totalSupply"=> "",//placeholders that will be updated in the next section
                    "url"=>"",
                    "decimals"=>0,
                    "circulating_supply"=>""
                );
                //Add array to main array
                array_push($arrayOfTokens, $arr);
            }
            //Add to Db
            DB::table('tokens')->insert($arrayOfTokens);

            //Update inserted records
            foreach ($listOfTokensDetails as $item) {
                DB::table('tokens')
                    ->where('id', $item->id)
                    ->update([
                        'totalSupply' => $item->supply,
                        "url" => $item->url,
                        "decimals" => $item->decimals,
                        "circulating_supply" => $item->circulating_supply
                    ]);
            }
        })
        ->everyMinute();//twiceDaily(1,19);// run at 1am and 7pm
    }

    private function getTokensPriceDetails(){
        $url = "https://free-api.vestige.fi/assets/list";
        $response = Http::get($url);
        return json_decode($response->body()); //Returns an array of token price details on the algorand network
    }
    private function getTokensDetails(){
        $url = "https://free-api.vestige.fi/assets";
        $response = Http::get($url);
        return json_decode($response->body()); //Returns an array of token details on the algorand network
    }
    
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
