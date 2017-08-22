@extends('mobile.mobile')
@section('title') 干洗店成本计算器2017_2017最新开干洗店成本计算器@stop
@section('keywords') 干洗店成本,开干洗店成本,干洗店成本计算器,最新开干洗店成本计算器@stop
@section('description') 干洗店成本计算首选干洗店成本费用计算器，针对干洗的的各项成本投入，给出详细的成本汇总和图标计算方式。了解详细干洗店开店投入成本费用就用干洗店成本计算器@stop
@section('main_content')
    <div class="container nbgmain">
        <div class="row ">
            <form class="form-horizontal col-xs-10 col-xs-offset-1 "  onSubmit="return false;">
                <div class="form-group">
                    <label class="sr-only" for="dpmj">店铺面积</label>
                    <div class="input-group">
                        <div class="input-group-addon">店铺面积$</div>
                        <input type="text" class="form-control" id="dpmj" name="dpmj" required="required" type="number" placeholder="店铺面积">
                        <div class="input-group-addon">.㎡</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="zxfy">装修费用</label>
                    <div class="input-group">
                        <div class="input-group-addon">装修费用$</div>
                        <input type="text" class="form-control" name="zxfy" id="zxfy" required="required" placeholder="装修费用">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="jdfz">季度房租</label>
                    <div class="input-group">
                        <div class="input-group-addon">季度房租$</div>
                        <input type="text" class="form-control" id="jdfz" name="jdfz" required="required" placeholder="季度房租">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="sbfy">设备费用</label>
                    <div class="input-group">
                        <div class="input-group-addon">设备费用$</div>
                        <input type="text" class="form-control" id="sbfy" name="sbfy" required="required" placeholder="设备费用">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="ldzj">流动资金</label>
                    <div class="input-group">
                        <div class="input-group-addon">流动资金$</div>
                        <input type="text" class="form-control" id="ldzj" name="ldzj" required="required" placeholder="流动资金">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="rgkz">人工开支</label>
                    <div class="input-group">
                        <div class="input-group-addon">人工开支$</div>
                        <input type="text" class="form-control" id="rgkz" name="rgkz" required="required" placeholder="人工开支">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="gssy">工商税务</label>
                    <div class="input-group">
                        <div class="input-group-addon">工商税务$</div>
                        <input type="text" class="form-control" id="gssy" required="required" placeholder="工商税务">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="sdfy">水电 / 月</label>
                    <div class="input-group">
                        <div class="input-group-addon">水电 / 月$</div>
                        <input type="text" class="form-control" id="sdfy" name="sdfy" required="required" placeholder="水电 / 月">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="jmfy">加盟费用</label>
                    <div class="input-group">
                        <div class="input-group-addon">加盟费用$</div>
                        <input type="text" class="form-control" required="required" id="jmfy" name="jmfy" placeholder="加盟费用">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="phoneno">验证信息</label>
                    <div class="input-group">
                        <div class="input-group-addon">验证信息$</div>
                        <input type="phone"  id="phone" name="phone" required="required" class="form-control"  placeholder="请输入您的手机号码">
                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <button type="submit"  id="sub_btn" class="btn btn-primary" style="width:100%">费用计算</button>
            </form>
        </div>
    </div>
	
	<div class="container">
    <div class="col-xs-12 " >
        <div class="x_panel">
            <div class="x_title">
                <h2 class="text-left newfontSize">干洗店加盟费用 <small>饼状图</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" id="x_content">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
        <hr/>
        <div class="x_panel">
            <div class="x_title">
                <h2 class="text-left newfontSize">干洗店加盟费用 <small>计算详情</small></h2>
                <div class="clearfix" >
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>投资类目</th>
                                <th>金额</th>
                                <th>占比</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">装修费用</th>
                                <td id="zxpay"> 3000</td>
                                <td id="zxproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">季度房租</th>
                                <td id="jdpay"> 3000</td>
                                <td id="jdproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">设备费用</th>
                                <td id="sbpay"> 3000</td>
                                <td id="sbproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">流动资金</th>
                                <td id="ldpay"> 3000</td>
                                <td id="ldproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">人工开支</th>
                                <td id="kzpay"> 3000</td>
                                <td id="kzproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">工商税务</th>
                                <td id="gspay"> 3000</td>
                                <td id="gsproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">水电 / 月</th>
                                <td id="sdpay"> 3000</td>
                                <td id="sdproportion"> %10</td>
                            </tr>
                            <tr>
                                <th scope="row">加盟费用</th>
                                <td id="jmpay"> 3000</td>
                                <td id="jmproportion"> %10</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>

    <div class="container">
		<div class="col-xs-12" >
        <div style="clear:both;"></div>
        <div id="note01" class="mainbottom ">
            <ul>
                <li class="STYLE2"><strong>干洗店加盟成本最新2017：</strong>科学计算开一家干洗店成本多少钱</li>
                <li> 干洗店作为服务性行业的一种，店内的各项条件设施都需要以消费者的实际情况做配置依据。因为不同的店面情况，面对的消费者类型不同，承接的衣物干洗订单不同，对店面空间、设备配置、人员雇佣等情况的要求和标准都会有所不同。所以，想要做相关干洗店成本预算，投资者首先就要对自身店面情况，有一个准确的定位和把握。</li>
                <li> <strong class="red">主流干洗店规模大小对应干洗店成本</strong><br />
                    小型干洗店加盟方案：占地面积20㎡左右，全自动变频石油干洗机，全自动烘干机、自动吸风熨烫台、自动电热发生器、熨斗<br />
                    中型干洗店加盟方案：占地面积40㎡左右，全自动变频石油干洗机，全自动烘干机、自动吸风熨烫台、电脑语音消毒柜、自动电热发生器<br />
                    大型干洗店加盟方案：占地面积50㎡左右，全自动变频石油干洗机，立式变频洗脱两用机，全自动烘干机、成衣立体包装机，自动吸风熨烫台、电脑语音消毒柜、自动电热发生器<br />
                    旗舰干洗店投资方案： 占地面积120㎡左右，全自动变频石油干洗机，立式变频洗脱两用机，全自动烘干机、成衣立体包装机，去渍台，衣物输送线，人像机，电脑开票系统</li>
            </ul>
        </div>
        <div class="rec_news">
            <div class="hd">干洗店成本计算器最新资讯</div>
            <div class="bd">
                <ul>
                    @foreach($costArticles as $article)
                        <li><a href="/{{$article->arctype->real_path}}/{{$article->id}}.shtml">{{$article->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
		</div>
    </div>
@stop
@section('libs')
    <script src="/reception/js/chargeTools.js"></script>
@stop
