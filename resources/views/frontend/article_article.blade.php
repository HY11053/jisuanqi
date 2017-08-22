@extends('frontend.frontend')
@section('title') {{$thisarticleinfos->title}} @stop
@section('keywords') {{$thisarticleinfos->keywords}} @stop
@section('description')  {{$thisarticleinfos->description}} @stop
@section('mainContent')
    <div class="path">当前位置：<a href="/">首页</a> &gt; 内容资讯</div>
    <div class="news_box clearfix">
        <div class="w730">
            <div class="content_tit">
                <h1>{{$thisarticleinfos->title}}</h1>
                <div class="time_source">时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;|&nbsp&nbsp;&nbsp;|&nbsp;&nbsp;查看：{!! $thisarticleinfos->click !!}次</div>
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
                    @foreach($xgnews as $xgnew)
                    <li><a href="/{{$xgnew->arctype->real_path}}/{{$xgnew->id}}.shtml" target="_blank" title="{{$xgnew->title}}">{{$xgnew->title}}</a></li>
                   @endforeach

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
                        @foreach($costArticles as $costArticle)
                        <li><a href="/{{ $costArticle->arctype->real_path}}/{{$costArticle->id}}.shtml" target="_blank" title="{{$costArticle->title}}">{{$costArticle->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--右侧推荐文章结束-->

            <!--右侧推荐文章开始-->
            <div class="side_recommend">
                <div class="common_bt">
                    <div class="tit"><a href="#" target="_blank">干洗店加盟利润分析</a></div>
                </div>
                <div class="common_list">
                    <ul>
                        @foreach($profitArticles as $profitArticle)
                            <li><a href="/{{ $profitArticle->arctype->real_path}}/{{$profitArticle->id}}.shtml" target="_blank" title="{{$profitArticle->title}}">{{$profitArticle->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--右侧推荐文章结束-->

        </div>
    </div>
@stop