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
        $articlefys=Archive::where('typeid',3)->latest()->take(8)->get();
        $articlecosts=Archive::where('typeid',2)->latest()->take(8)->get();
        $articleprofits=Archive::where('typeid',1)->latest()->take(8)->get();
        $flinks=flink::latest()->orderBy('created_at','desc')->take(30)->get();
        return view('frontend.index',compact('flinks','articlefys','articlecosts','articleprofits'));
    }
    public function Cost()
    {
        $costArticles=Archive::where('typeid','1')->latest()->take(30)->get();
        return view('frontend.cost',compact('costArticles'));
    }
    public function Profit()
    {
        $profitArticles=Archive::where('typeid',2)->latest()->take(30)->get();
        return view('frontend.profit',compact('profitArticles'));
    }
}
