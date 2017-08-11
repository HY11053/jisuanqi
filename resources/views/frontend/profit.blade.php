@extends('frontend.frontend')
@section('title') {{ config('app.webname', '干洗店加盟费用计算器') }}@stop
@section('keywords') {{ config('app.keywords', '零食加盟网') }}@stop
@section('description') {{ config('app.description', '零食加盟网') }}@stop
@section('mainContent')
        <div class="leftbk0225">
            <div class="leftbk0225a">
                <h1>干洗店利润计算器</h1>
                <!--计算器分类 begin-->
                <div class="maintitle">
                    <div class="tabmenu"><a href="/" style="cursor:pointer;">2017干洗店加盟费计算器</a></div>
                    <div class="tabmenu"><a href="/cost" style="cursor:pointer;">干洗店成本计算器</a></div>
                    <div class="tabmenu"><a href="/profit" style="cursor:pointer;">干洗店利润计算器</a></div>
                    <div class="clear"></div>
                </div>
                <!--计算器分类 end-->
                <!--计算一 begin-->
                <div id="calculate01" class="main"> <span class="section">请您输入对应信息</span> <span class="section" style="padding-left:35px;">干洗店利润计算分析</span>
                    <form class="form-horizontal col-md-6" onsubmit="return false;">
                        <div class="form-group">
                            <label class="sr-only" for="rjcj">日均成交</label>
                            <div class="input-group">
                                <div class="input-group-addon">日均成交$</div>
                                <input type="text" class="form-control" id="rjcj" name="rjcj" required="required" type="number" placeholder="日均成交">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="pjdj">平均单价</label>
                            <div class="input-group">
                                <div class="input-group-addon">平均单价$</div>
                                <input type="text" class="form-control" name="pjdj" id="pjdj" required="required" placeholder="平均单价">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="sdfy">水电费用</label>
                            <div class="input-group">
                                <div class="input-group-addon">水电费用$</div>
                                <input type="text" class="form-control" id="sdfy" name="sdfy" required="required" placeholder="水电费用/月">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="rygz">人员工资</label>
                            <div class="input-group">
                                <div class="input-group-addon">人员工资$</div>
                                <input type="text" class="form-control" id="rygz" name="rygz" required="required" placeholder="人员工资/月">
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
                            <label class="sr-only" for="zxkz">杂项开支</label>
                            <div class="input-group">
                                <div class="input-group-addon">杂项开支$</div>
                                <input type="text" class="form-control" id="zxkz" name="zxkz" required="required" placeholder="杂项开支/月">
                                <div class="input-group-addon">.00</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="gxhc">干洗耗材</label>
                            <div class="input-group">
                                <div class="input-group-addon">干洗耗材$</div>
                                <input type="text" class="form-control" id="gxhc" name="gxhc" required="required" placeholder="干洗耗材/月">
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
                        <button type="submit" class="btn btn-primary">利润计算</button>
                    </form>
                    <div class="col-md-6 col-sm-6 col-xs-12" >
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 class="text-center">干洗店利润计算 <small>饼状图</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" id="x_content">
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                        <hr/>
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 class="text-center">干洗店利润 <small>计算详情</small></h2>
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
                                                <th scope="row">日均成交</th>
                                                <td id="rjcjres"></td>
                                                <td ></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">平均单价</th>
                                                <td id="pjdjres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">日均收入</th>
                                                <td id="rjsyres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">日均成本</th>
                                                <td id="rjcbres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">日盈利</th>
                                                <td id="rylres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">月利润</th>
                                                <td id="monthres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">年利润</th>
                                                <td id="yearres"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">利润率</th>
                                                <td id="lrlv"></td>
                                                <td></td>
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

        <div class="f_link">
            <div class="hd">2017最新干洗店成本计算器资讯</div>
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
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                    <li><a href="#" target="_blank">房贷计算器最新2018</a></li>
                </ul>
            </div>
        </div>
@stop
@section('libs')
    <script src="/reception/js/profitTools.js"></script>
@stop