<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplateController extends Controller
{
    public function costComplate(Request $request)
    {
        $dpmj = $request['dpmj'];
        $zxfy = $request['zxfy'];
        $jdfz = $request['jdfz'];
        $sbfy= $request['sbfy'];
        $ldzj = $request['ldzj'];
        $rgkz = $request['rgkz'];
        $gssy = $request['gssy'];
        $sdfy = $request['sdfy'];
        $jmfy = $request['jmfy'];
        $sumcost=$request['zxfy']+$request['jdfz']+$request['zxfy']+$request['sbfy']+$request['ldzj']+$request['rgkz']+$request['gssy']+$request['sdfy']+$request['jmfy'];
        $alldata= ['dpmj'=>$dpmj,'zxfy'=>$zxfy,'jdfz'=>$jdfz,'sbfy'=>$sbfy,'ldzj'=>$ldzj,'rgkz'=>$rgkz,'gssy'=>$gssy,'sdfy'=>$sdfy,'jmfy'=>$jmfy,'sumcost'=>$sumcost];
        return $alldata;
    }
}
