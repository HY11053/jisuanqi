@extends('frontend.frontend')
@section('title') {{ config('app.webname', '干洗店加盟费用计算器') }}@stop
@section('keywords') {{ config('app.keywords', '干洗店加盟费用计算器') }}@stop
@section('description') {{ config('app.description', '干洗店加盟费用计算器') }}@stop
@section('mainContent')
    <div class="leftbk0225">
        <div class="leftbk0225a">
            <h1>干洗店加盟费用计算器</h1>
            <!--计算器分类 begin-->
            <div class="maintitle">
                <div class="tabmenu"><a href="/" style="cursor:pointer;">2017干洗店加盟费计算器</a></div>
                <div class="tabmenu"><a href="/cost" style="cursor:pointer;">干洗店成本计算器</a></div>
                <div class="tabmenu"><a href="/profit" style="cursor:pointer;">干洗店利润计算器</a></div>
                <div class="clear"></div>
            </div>
            <!--计算器分类 end-->
            <!--计算一 begin-->
            <div id="calculate01" class="main"> <span class="section">请您输入对应信息</span> <span class="section" style="padding-left:35px;">干洗店加盟费计算分析</span>
                <form class="form-horizontal col-md-6"  onsubmit="return false;">
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
                    <button type="submit"  id="sub_btn" class="btn btn-primary">费用计算</button>
                </form>
                <div class="col-md-6 col-sm-6 col-xs-12" >
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-center">干洗店加盟费用 <small>饼状图</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" id="x_content">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                    <hr/>
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-center">干洗店加盟费用 <small>计算详情</small></h2>
                            <div class="clearfix" style="margin-left:20px;">
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
                                            <td id="zxpay"> 7000</td>
                                            <td id="zxproportion"> 6%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">季度房租</th>
                                            <td id="jdpay"> 	10000</td>
                                            <td id="jdproportion"> 9%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">设备费用</th>
                                            <td id="sbpay"> 	50000</td>
                                            <td id="sbproportion"> 44%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">流动资金</th>
                                            <td id="ldpay"> 20000</td>
                                            <td id="ldproportion"> 18%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">人工开支</th>
                                            <td id="kzpay"> 2500</td>
                                            <td id="kzproportion"> 2%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">工商税务</th>
                                            <td id="gspay">1000</td>
                                            <td id="gsproportion"> 0.88%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">水电 / 月</th>
                                            <td id="sdpay"> 500</td>
                                            <td id="sdproportion"> 0.44%</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">加盟费用</th>
                                            <td id="jmpay"> 15000</td>
                                            <td id="jmproportion"> 13%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <!--计算一 end-->
            <!--说明一 begin-->
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
            <!--说明一 end-->
        </div>
    </div>

    <!--推荐文章 开始-->
    <div class="w980">
        <div class="rec_news_wrap">
            <div class="rec_news">
                <div class="hd">2017干洗店加盟费用计算器</div>
                <div class="bd">
                    <ul>
                        @foreach($articlefys as $articlefy)
                        <li><a href="{{$articlefy->arctype->real_path}}/{{$articlefy->id}}.shtml" target="_blank" title="{{$articlefy->title}}">{{$articlefy->title}}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>

            <div class="rec_news">
                <div class="hd"><a href="/cost" target="_blank">2017开干洗店成本计算器</a></div>
                <div class="bd">
                    <ul>
                        @foreach($articlecosts as $articlecost)
                        <li><a href="/{{$articlecost->arctype->real_path}}/{{ $articlecost->id}}.shtml" target="_blank" title="{{$articlecost->title}}">{{$articlecost->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="rec_news">
                <div class="hd"><a href="/profit" target="_blank">干洗店利润计算器</a></div>
                <div class="bd">
                    <ul>
                        @foreach($articleprofits as $articleprofit)
                        <li><a href="/{{$articleprofit->arctype->real_path}}/{{$articleprofit->id}}.shtml" target="_blank" title="{{$articleprofit->title}}">{{$articleprofit->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!--推荐文章 结束-->

    <!--友情链接 开始-->
    <div class="f_link">
        <div class="hd">友情链接</div>
        <div class="bd">
            <ul>
                @foreach($flinks as $flink)
                <li><a href="{{$flink->weburl}}" target="_blank">{{$flink->webname}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--友情链接 结束-->
@stop
@section('libs')
    <script src="/reception/js/chargeTools.js"></script>
@stop