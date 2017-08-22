@extends('mobile.mobile')
@section('title') 干洗店利润计算器_2017最新干洗店详细了利润计算器@stop
@section('keywords') 干洗店利润,干洗店利润计算,干洗店利润详细计算@stop
@section('description') 干洗店利润计算器详细计算每日成交量、成交金额及各种投入后的产出比，图表展示干洗利润率，明确各个利润点，解详细干洗店利润就用干洗店利润计算器@stop
@section('main_content')
    <div class="container nbgmain">
        <div class="row ">
            <form class="form-horizontal col-xs-10 col-xs-offset-1" onSubmit="return false;">
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
                <button type="submit" class="btn btn-primary" style="width:100%;">利润计算</button>
            </form>
			</div>
    </div>
			
			<div class="container">
            <div class=" col-xs-12" >
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="text-left newfontSize">干洗店利润计算 <small>饼状图</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" id="x_content">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
                <hr/>
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="text-left newfontSize">干洗店利润 <small>计算详情</small></h2>
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

        </div>



  <div style="clear:both;"></div>
    <div class="container">
		<div class="col-xs-12" >
        <div style="clear:both;"></div>
        <div id="note01" class="mainbottom ">
            <ul>
                <li class="STYLE2"><strong class="red">干洗店利润分析：</strong></li>
                <li>干洗店日常经营过程中，洗一件衣服收费6-15元,而所需要的洗衣原材料成本不足1元钱;在不变成本(房租及人员工资等，其中人员工资相对较低)不变的情况下，洗得多，赚得多。</li>
                <li><strong class="red"> 大中小城市投资回报比参考</strong><br />
                    每多洗一件衣服,几乎在支出上只增加少量的洗衣原材料成本，而收入却增加5-15元，这样的投资项目在服务行业已经很难找到了。
                    2017年国内干洗店利润统计平均数据(具体参考中国干洗行业协会统计文件)<br />
                    一线城市(北上广)：90㎡大小的品牌干洗店，月预估净利润3.64万元，预期投资回报周期8个月<br />
                    二线城市(省会)： 60㎡大小的品牌干洗店，月预估净利润2.32万元，预期投资回报周期8个月<br />
                    三线城市(地级市)：30㎡大小的品牌干洗店，月预估净利润1.56万元，预期投资回报周期8个月<br />
                    注：干洗行业有淡旺季之分，旺季干洗店利润翻番</li>
            </ul>
        </div>
        <div class="rec_news">
            <div class="hd">干洗店成本计算器最新资讯</div>
            <div class="bd">
                <ul>
                    @foreach($profitArticles as $article)
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
