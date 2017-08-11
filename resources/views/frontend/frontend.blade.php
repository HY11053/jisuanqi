<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="applicable-device" content="pc" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <meta name="keywords" content=" @yield('keywords') "/>
    <meta name="description" content=" @yield('description') "/>
    <link href="/reception/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/reception/css/gxd.css" rel="stylesheet" type="text/css" />
    <meta name="Copyright" content=""/>
    <meta name="author" content="" />
    <meta http-equiv="mobile-agent" content="format=wml; url=" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url=" />
    <meta http-equiv="mobile-agent" content="format=html5; url=" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="" >
    <link rel="canonical" href=""/>
    <meta property="og:image" content=""/>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="header">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> <a class="navbar-brand" href="/"><img src="/reception/bgimages/f_logo.png"/></a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">干洗店加盟费计算器</a></li>
                    <li><a href="/cost">干洗店成本计算器</a></li>
                    <li><a href="/profit">干洗店利润计算器</a></li>
                    <li><a href="/profit">干洗技术资料</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
    @yield('mainContent')
    </div>
</div>
<div>
    <hr/>
    <p style="width:950px; margin:0 auto; text-align:center; padding-bottom:20px;">Copyright © 2017 www.58lingshi.com Corporation, All Rights Reserved 上海莫卡网络科技有限公司 版权所有</p>
</div>
<script src="/reception/js/jquery.min.js"></script>
<script src="/reception/js/bootstrap.min.js"></script>
<script src="/reception/js/validator.js"></script>
<script src="/reception/js/Chart.min.js"></script>
<script src="/reception/js/tools.js"></script>
@yield('libs')
</body>
</html>
