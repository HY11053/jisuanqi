<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Ask;
use App\AdminModel\flink;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function Index()
    {

        //友情链接
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('flinks'));
    }
    public function Cost()
    {
        return view('frontend.cost');
    }
    public function Profit()
    {
        return view('frontend.profit');
    }
}
