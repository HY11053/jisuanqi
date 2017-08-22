<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')-计算器</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.url','http://www.ganxijsq.com').Request::getRequestUri()}}" >
    <link href="/reception/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/reception/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-header"> <a class="navbar-brand" href="#"><img src="/reception/bgimages/f_logo.png"/></a> </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">干洗店加盟费计算器 <span class="sr-only">(current)</span></a></li>
                <li><a href="/cost">干洗店成本计算器</a></li>
                <li><a href="/profit">干洗店利润计算器</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="viewport">
@yield('main_content')
</div>
<script src="/reception/js/jquery.min.js"></script>
<script src="/reception/js/bootstrap.min.js"></script>
<script src="/reception/js/validator.js"></script>
<script src="/reception/js/Chart.min.js"></script>
<script src="/reception/js/tools.js"></script>
<div class="footer">
    <p>Copyright © 2017 www.58lingshi.com Corporation, All Rights Reserved 上海莫卡网络科技有限公司 版权所有</p>
</div>
@yield('libs')
</body>
</html>
