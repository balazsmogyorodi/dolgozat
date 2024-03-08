<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Bejegyzesek;
class BejegyzesekCokntroller extends Controller
{
    public function show($id){
        $osztaly = DB::table('bejegyzeseks')->select('*')->where( 'osztaly_id', '=', $id,)->get();
        return response()->json($osztaly);
    }

    public function index(){
        return response()->json(Bejegyzesek::all());
    }

    
    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->id = $request->id;
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }




}
