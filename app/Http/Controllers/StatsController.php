<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatsController extends Controller
{
    public function showStats(Request $request){
        //Access Db and fetch stats
        $result = DB::select('select name, unit_name, CAST(price as DECIMAL(14,8)) as price, FLOOR(price_change_24) as price_change_24 from tokens order by price_change_24 desc');
        //pass to view
        // die(var_dump($result));
        return view('stats', ['result' => $result]);
    }
}
