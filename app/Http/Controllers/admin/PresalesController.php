<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PresalesController extends Controller
{
    function showPresales(Request $request){
        $data = DB::select('select * from presales');

        return view('admin.presale', ['data' => $data]);
    }
}
