@extends('mobile.mobile')
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
            <button type="submit"  id="sub_btn" class="btn btn-primary" style="width:100%;">费用计算</button>
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
	<div class="col-xs-12">
        <div style="clear:both;"></div>
        <div id="note01" class="mainbottom ">
            <ul>
                <li class="STYLE2">干洗店加盟费用计算器最新2017：干洗店加盟费计算方式已更新至已经更新至2017年8月15日</li>
                <li><strong class="red">干洗店加盟费：</strong>干洗店加盟到开店的费用包括：设备费用、干洗店面的装修、房租、备用的流动资金、干洗店的人工开支、杂项的工商税务和水电费用。加盟费用一般不同的干洗品牌费用会有一些相差。也有一些免干洗店加盟费的大干洗品牌。可自行选择。</li>
                <li><strong class="red">干洗店的设备包括：</strong>石油干洗机、烘干机、熨烫台、自动电热发生器、熨斗、成衣立体包装机、消毒柜。按照型号类型，价格会有所变化。</li>
                <li> <strong class="red">2017各类城市干洗店面租金情况：</strong><br />
                    一线城市：房租店面30㎡在3000-7000元/月，靠近商业区的价格会相对更高。<br />
                    二线城市：30㎡~60㎡的房租价格2000~5000多，地铁周边商铺区价格要在一万以上。<br />
                    三线城市：30㎡~60平米左右的店面房租在2000~4000多左右，120㎡以上在5000~7000/月。<br />
                    乡镇街道：乡镇街道一般为自己的店面，其房租成本也较低。</li>
            </ul>
        </div>
        <!--推荐文章 开始-->
        <div class="w980">
            <div class="rec_news_wrap">
                <div class="rec_news">
                    <div class="hd"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                    <div class="bd">
                        <ul>
                            @foreach($articlefys as $articlefy)
                                <li><a href="{{$articlefy->arctype->real_path}}/{{$articlefy->id}}.shtml"  title="{{$articlefy->title}}">{{$articlefy->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="rec_news">
                    <div class="hd"><a href="#" target="_blank">干洗店加盟成本计算器</a></div>
                    <div class="bd">
                        <ul>
                            @foreach($articlecosts as $articlecost)
                                <li><a href="/{{$articlecost->arctype->real_path}}/{{ $articlecost->id}}.shtml"  title="{{$articlecost->title}}">{{$articlecost->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="rec_news">
                    <div class="hd"><a href="#" target="_blank">干洗店加盟利润计算器</a></div>
                    <div class="bd">
                        <ul>
                            @foreach($articleprofits as $articleprofit)
                                <li><a href="/{{$articleprofit->arctype->real_path}}/{{$articleprofit->id}}.shtml"  title="{{$articleprofit->title}}">{{$articleprofit->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!--推荐文章 结束-->
		</div>
    </div>

@stop
@section('libs')
    <script src="/reception/js/chargeTools.js"></script>
@stop