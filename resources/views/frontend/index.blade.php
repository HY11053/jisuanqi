@extends('frontend.frontend')
@section('title') {{ config('app.webname', '干洗店加盟费用计算器') }}@stop
@section('keywords') {{ config('app.keywords', '零食加盟网') }}@stop
@section('description') {{ config('app.description', '零食加盟网') }}@stop
@section('mainContent')
    <div class="leftbk0225">
        <div class="leftbk0225a">
            <h1>干洗店加盟费用计算器</h1>
            <!--计算器分类 begin-->
            <div class="maintitle">
                <div class="tabmenu"><a href="/" style="cursor:pointer;">2017干洗店加盟费计算器</a></div>
                <div class="tabmenu"><a href="chengbenjisuanqi.html" style="cursor:pointer;">干洗店成本计算器</a></div>
                <div class="tabmenu"><a href="lirunjisuanqi.html" style="cursor:pointer;">干洗店利润计算器</a></div>
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
                    <button type="button"  id="sub_btn" class="btn btn-primary">费用计算</button>
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
                <div style="clear:both;"></div>
            </div>
            <!--计算一 end-->
            <!--说明一 begin-->
            <div style="clear:both;"></div>
            <div id="note01" class="mainbottom ">
                <ul>
                    <li class="STYLE2">房贷计算器最新2017：房贷利率已经更新至2017年4月1日</li>
                    <li><strong class="red">等额本息还款：</strong>把按揭贷款的本金总额与利息总额相加，然后平均分摊到还款期限的每个月中。作为还款人，每个月还给银行固定金额，但每月还款额中的本金比重逐月递增、利息比重逐月递减。</li>
                    <li><strong class="red">等额本金还款：</strong>将本金分摊到每个月内,同时付清上一交易日至本次还款日之间的利息。这种还款方式相对等额本息而言,总的利息支出较低,但是前期支付的本金和利息较多,还款负担逐月递减。</li>
                    <li> <strong class="red">2017年公积金贷款最高额度说明（具体规定参考地方房管局文件）</strong><br />
                        北京：市管公积金贷款最高120万元，国管公积金最高贷款120万元<br />
                        上海：个人公积金贷款最高60万元，家庭最高贷款120万元<br />
                        广州：个人公积金贷款最高60万元，夫妻双方最高贷款100万元<br />
                        成都：个人公积金贷款最高40万元，家庭公积金贷款最高70万元，成都公积金贷款额度为个人缴存余额20倍</li>
                </ul>
            </div>
            <!--说明一 end-->
        </div>
    </div>

    <!--推荐文章 开始-->
    <div class="w980">
        <div class="rec_news_wrap">
            <div class="rec_news">
                <div class="hd"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
                    </ul>
                </div>
            </div>

            <div class="rec_news">
                <div class="hd"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
                    </ul>
                </div>
            </div>

            <div class="rec_news">
                <div class="hd"><a href="#" target="_blank">干洗店加盟费用计算器</a></div>
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">2014提前还房贷攻略：两类人可提前还款</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷转按揭全过程解析 必看注意事项</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">房贷提前还款怎么办 各大银行违约金吓掉你</a></li>
                        <li><a href="#" target="_blank" title="2014提前还房贷攻略：两类人可提前还款">三种情况不合适提前还贷 看看你属于哪类</a></li>
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
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2017</a></li>
                <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
            </ul>
        </div>
    </div>
    <!--友情链接 结束-->
@stop