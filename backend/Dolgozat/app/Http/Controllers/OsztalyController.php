<?php

namespace App\Http\Controllers;

use App\Models\Osztaly;
use DB;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    

    public function show($id){
        return Osztaly::find($id);
    }


    public function osztalyKeres($evfolyam){
        $osztaly = DB::table('osztalies')->select('osztaly_id')->where( 'hanyadik', '=', $evfolyam,)->get();
        return response()->json($osztaly);
    }

}
