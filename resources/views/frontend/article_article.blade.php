@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('headlibs')
    <meta name="Copyright" content="58零食网-{{env('APP_URL')}}"/>
    <meta name="author" content="58零食网" />
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('http://www.','http://m.',env('APP_URL'))}}{{Request::getrequesturi()}}" >
    <link rel="canonical" href="{{env('APP_URL')}}{{Request::getrequesturi()}}"/>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="{{$thisarticleinfos->created_at}}+08:00" /> <meta property="og:image" content="{{env('APP_URL')}}{{$thisarticleinfos->litpic}}"/>
    <meta property="article:author" content="58零食网" />
    <meta property="article:published_first" content="58零食网, {{env('APP_URL')}}{{Request::getrequesturi()}}" />
    <link rel="stylesheet" type="text/css" href="/reception/css/news.css"/>
@stop
@section('mainContent')
    <div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>
    <div class="news_box clearfix">
        <div class="w730">
            <div class="content_tit">
                <h1>{{$thisarticleinfos->title}}</h1>
                <div class="time_source">时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;|&nbsp;&nbsp;编辑：小燕&nbsp;&nbsp;|&nbsp;&nbsp;查看：{!! $thisarticleinfos->click !!}次</div>
            </div>
            <div class="zaiyao"><b>摘要：</b>{!! $thisarticleinfos->description !!}</div>

            <!--文章内容开始-->
            <div class="content clearfix ">

                {!! $thisarticleinfos->article->body !!} </div>
            <!--文章内容结束-->

            <div class="fenxiang">
                <div class="fenxiangdao">分享到：</div>
                <div class="bdsharebuttonbox" data-tag="share_1">
                    <a class="bds_tsina" data-cmd="tsina">新浪</a>
                    <a class="bds_qzone" data-cmd="qzone">QQ空间</a>
                    <a class="popup_weixin" data-cmd="weixin" onclick="return false;">微信</a>
                </div>
            </div>
            <script>
                window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
            </script>


            <div class="shangxiapian">
                <p>上一篇：@if(isset($prev_article)) <a href="/{{$prev_article->arctype->real_path}}/{{$prev_article->id}}.shtml" title="{{$prev_article->title}}">{{$prev_article->title}}</a> @else 没有了 @endif </p>
                <p >下一篇：@if(isset($next_article)) <a href="/{{$next_article->arctype->real_path}}/{{$next_article->id}}.shtml" title="{{$next_article->title}}">{{$next_article->title}}</a> @else 没有了 @endif </p>
            </div>


            <!--相关阅读开始-->
            <div class="content_related">
                <div class="common_bt">
                    <div class="tit">相关资讯</div>
                </div>
                <ul>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">干洗加盟店选址注意事项</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">想要开好干洗店必须知道的事</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">长假期间干洗加盟店要注意哪些事</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">开休闲干洗加盟店日常小道具</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">干洗加盟店选址注意事项</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">干洗加盟店选址注意事项</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">想要开好干洗店必须知道的事</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">长假期间干洗加盟店要注意哪些事</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">开休闲干洗加盟店日常小道具</a></li>
                    <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">干洗加盟店选址注意事项</a></li>
                </ul>
            </div>
            <!--相关阅读结束-->
        </div>
        <div class="w230">
            <!--右侧推荐文章开始-->
            <div class="side_recommend">
                <div class="common_bt">
                    <div class="tit"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                </div>
                <div class="common_list">
                    <ul>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">现在投资开一家干洗店可以赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">开休闲干洗加盟店日常小道具</a></li>
                    </ul>
                </div>
            </div>
            <!--右侧推荐文章结束-->

            <!--右侧推荐文章开始-->
            <div class="side_recommend">
                <div class="common_bt">
                    <div class="tit"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                </div>
                <div class="common_list">
                    <ul>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">现在投资开一家干洗店可以赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">在南京投资开一家干洗店赚钱吗</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">经营干洗店有哪些好的方法</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">秋季散装休闲干洗如何储存</a></li>
                        <li><a href="#" target="_blank" title="经营干洗店有哪些好的方法">开休闲干洗加盟店日常小道具</a></li>
                    </ul>
                </div>
            </div>
            <!--右侧推荐文章结束-->

        </div>
    </div>
@stop