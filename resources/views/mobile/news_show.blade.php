@extends('mobile.mobile')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('main_content')

    <div class="container">
		<div class="news_content">
			<div class="content_tit">
				<h1>{{$thisarticleinfos->title}}</h1>
				<div class="time_source">时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;|&nbsp;&nbsp;查看：{!! $thisarticleinfos->click !!}次</div>
			</div>
		</div>
		
		<!--文章内容开始-->
		<div class="content clearfix ">
            {!! $thisarticleinfos->article->body !!}
        </div>
		<!--文章内容结束-->

        <div class="shangxiapian">
            <p>上一篇：@if(isset($prev_article)) <a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{$prev_article->title}}</a> @else 没有了 @endif </p>
            <p >下一篇：@if(isset($next_article)) <a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{$next_article->title}}</a> @else 没有了 @endif </p>
        </div>
		
        <div class="rec_news">
            <div class="hd">干洗店成本计算器最新资讯</div>
            <div class="bd">
                <ul>
                    @foreach($costArticles as $costArticle)
                        <li><a href="/{{ $costArticle->arctype->real_path}}/{{$costArticle->id}}.shtml" title="{{$costArticle->title}}">{{$costArticle->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
@section('libs')
    <script src="/reception/js/chargeTools.js"></script>
@stop
