<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BrandArticleController extends Controller
{
    /**
     * @param Request $request
     * @param $path
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticle(Request $request,$path,$id)
    {
        preg_match('/[a-zA-Z]+/',$request->path(),$matchs);
        if (Archive::findOrFail($id)->arctype->real_path!=$matchs[0])
        {
            abort(404);
        }else{

                $thisarticleinfos=Archive::findOrFail($id);
                $xgnews=Archive::where('title','like','%'.$thisarticleinfos->shorttitle.'%')->where('published_at','<=',Carbon::now())->orderBy('click','desc')->take(10)->get();
                $prev_article = Archive::latest('published_at')->published()->find($this->getPrevArticleId($thisarticleinfos->id));
                $next_article = Archive::latest('published_at')->published()->find($this->getNextArticleId($thisarticleinfos->id));
                $published=$thisarticleinfos['attributes']['published_at'];
                $costArticles=Archive::where('typeid','3')->latest()->take(30)->get();
                $profitArticles=Archive::where('typeid',2)->latest()->take(30)->get();
                DB::table('archives')->where('id',$id)->update(['click'=>$thisarticleinfos->click+1,'published_at'=>$published]);
                return view('frontend.article_article',compact('thisarticleinfos','prev_article','next_article','xgnews','costArticles','profitArticles'));
        }
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->max('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->min('id');
    }
}
