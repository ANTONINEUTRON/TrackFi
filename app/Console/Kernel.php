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
            $arrayOfTokens = array();
            $listOfTokens = $this->getTokensFromTinyChart();

            for($i = 0; $i < count($listOfTokens); $i++){
                //Add params to new inner array\
                $arr = array(
                    "token_id"=>$listOfTokens[$i]->id,
                    "name"=>$listOfTokens[$i]->name,
                    "ticker"=>$listOfTokens[$i]->ticker,
                    "price"=>$listOfTokens[$i]->price,
                    "price_change_24"=>$listOfTokens[$i]->change24h
                );
                //Add array to outer array
                array_push($arrayOfTokens, $arr);
            }
            //Add to Db
            DB::table('tokens')->insert($arrayOfTokens);
        })
        ->everyMinute();
    }

    private function getTokensFromTinyChart(){
        $url = "https://free-api.vestige.fi/assets/list";
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
