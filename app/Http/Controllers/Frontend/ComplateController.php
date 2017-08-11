<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Phonemanage;
use App\Events\PhoneEvent;
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
        $phoneno=$request['phone'];
        $referer=is_array($request->session()->get('referer'))?$request->session()->get('referer')[0]:$request->input('host');
        if(empty(Phonemanage::where('phoneno',$phoneno)->value('phoneno')))
        {
            Phonemanage::create(['phoneno'=>$phoneno,'name'=>'计算器','ip'=>$request->getClientIp(),'note'=>'计算器提交','host'=>$request->input('host'),'referer'=>$referer]);
            event(new PhoneEvent(Phonemanage::latest() ->first()));
            //Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
        }
        return $alldata;
    }
    public function profitComplate(Request $request)
    {
        $rjcj=$request['rjcj'];
        $pjdj=$request['pjdj'];
        $sdfy=$request['sdfy'];
        $rygz=$request['rygz'];
        $gssy=$request['gssy'];
        $zxkz=$request['zxkz'];
        $gxhc=$request['gxhc'];
        $alldatas=["rjcj" =>$rjcj, "pjdj" => $pjdj,"sdfy" =>$sdfy, "rygz" => $rygz, "gssy" =>$gssy,"zxkz" => $zxkz, "gxhc" => $gxhc];
        $phoneno=$request['phone'];
        $referer=is_array($request->session()->get('referer'))?$request->session()->get('referer')[0]:$request->input('host');
        if(empty(Phonemanage::where('phoneno',$phoneno)->value('phoneno')))
        {
            Phonemanage::create(['phoneno'=>$phoneno,'name'=>'计算器','ip'=>$request->getClientIp(),'note'=>'计算器提交','host'=>$request->input('host'),'referer'=>$referer]);
            event(new PhoneEvent(Phonemanage::latest() ->first()));
            Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
        }
        return $alldatas;
    }
}
