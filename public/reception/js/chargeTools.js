/**
 * Created by liang on 2017/8/9.
 */
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
});

// initialize the validator function
validator.message.date = 'not a real date';

// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
$('form')
    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
    .on('change', 'select.required', validator.checkField)
    .on('keypress', 'input[required][pattern]', validator.keypress);

$('.multi.required').on('keyup blur', 'input', function() {
    validator.checkField.apply($(this).siblings().last()[0]);
});

Chart.defaults.global.legend = {
    enabled: false
};
var ctx = document.getElementById("pieChart");
var data = {
    datasets: [{
        data: [7000, 5000, 3000, 3000, 500],
        backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
        ],
        label: 'My dataset' // for legend
    }],
    labels: [
        "装修费用",
        "季度房租",
        "设备费用",
        "工商税务",
        "水电/月",
        "人工开支"
    ]
};

var pieChart = new Chart(ctx, {
    data: data,
    type: 'pie',
    otpions: {
        legend: false
    }
});



$('form').submit(function(e) {
    e.preventDefault();
    var submit = false;

    // evaluate the form using generic validaing
    if (!validator.checkAll($(this))) {
        submit = false;
    }else
    {
        $(function(){

            var dpmj=$("#dpmj").val();
            var zxfy=$("#zxfy").val();
            var jdfz=$("#jdfz").val();
            var sbfy=$("#sbfy").val();
            var ldzj=$("#ldzj").val();
            var rgkz=$("#rgkz").val();
            var gssy=$("#gssy").val();
            var sdfy=$("#sdfy").val();
            var jmfy=$("#jmfy").val();
            var phone=$("#phone").val();
            var host=window.location.href;
            if(phone  && /^1[3|4|5|8]\d{9}$/.test(phone ))
            {
                $.ajax({
                    type:"POST",
                    url:'/costcomplate',
                    data:{"dpmj":dpmj,"zxfy":zxfy,"jdfz":jdfz,'sbfy':sbfy,'ldzj':ldzj,'rgkz':rgkz,'gssy':gssy,'sdfy':sdfy,'jmfy':jmfy,'phone':phone,"host":host},
                    success: function (response, stutas, xhr) {
                        newChart(response);
                        $('#zxpay').text(response['zxfy']);
                        $('#zxproportion').text((response['zxfy']/response['sumcost']).toFixed(2)*100+'%');
                        $('#jdpay').text(response['jdfz']);
                        $('#jdproportion').text((response['jdfz']/response['sumcost']).toFixed(2)*100+'%');
                        $('#jmpay').text(response['jmfy']);
                        $('#jmproportion').text((response['jmfy']/response['sumcost']).toFixed(2)*100+'%');
                        $('#sbpay').text(response['sbfy']);
                        $('#sbproportion').text((response['sbfy']/response['sumcost']).toFixed(2)*100+'%');
                        $('#ldpay').text(response['ldzj']);
                        $('#ldproportion').text((response['ldzj']/response['sumcost']).toFixed(2)*100+'%');
                        $('#gspay').text(response['gssy']);
                        $('#gsproportion').text((response['gssy']/response['sumcost']).toFixed(4)*100+'%');
                        $('#kzpay').text(response['rgkz']);
                        $('#kzproportion').text((response['rgkz']/response['sumcost']).toFixed(2)*100+'%');
                        $('#sdpay').text(response['sdfy']);
                        $('#sdproportion').text((response['sdfy']/response['sumcost']).toFixed(4)*100+'%');
                    }
                });
            }else{
                alert('电话号码不存在或格式不正确！');
            }

        });
    }


    //return false;
});

function newChart(datas)
{
    $("#pieChart").remove();
    $("#x_content").append('<canvas id="pieChart"></canvas>');
    Chart.defaults.global.legend = {
        enabled: false
    };
    var ctx = document.getElementById("pieChart");
    var data = {
        datasets: [{

            //data: [datas['zxfy'], datas['jdfz'], datas['sbfy'], datas['ldzj'], datas['gssy'],datas['sdfy'],datas['jmfy'],datas['rgkz']],
            data: [datas['zxfy'], datas['jdfz'], datas['sbfy'], datas['ldzj'], datas['gssy'],datas['sdfy'],datas['jmfy'],datas['rgkz']],
            backgroundColor: [
                "#455C73",
                "#9B59B6",
                "#BDC3C7",
                "#26B99A",
                "#3531ec",
                "#bed415",
                "#16d415",
                "#3498DB"
            ],
            label: 'My dataset' // for legend
        }],
        labels: [
            "装修费用",
            "季度房租",
            "设备费用",
            "流动资金",
            "工商税务",
            "水电 / 月",
            "加盟费用",
            "人工开支"
        ]
    };

    var pieChart = new Chart(ctx, {
        data: data,
        type: 'pie',
        otpions: {
            legend: false
        }
    });
}