/**
 * Created by liang on 2017/8/9.
 */
$('form').submit(function(e) {
    e.preventDefault();
    var submit = false;

    // evaluate the form using generic validaing
    if (!validator.checkAll($(this))) {
        submit = false;
    }else
    {
        $(function(){
            var rjcj=$("#rjcj").val();
            var pjdj=$("#pjdj").val();
            var sdfy=$("#sdfy").val();
            var rygz=$("#rygz").val();
            var gssy=$("#gssy").val();
            var zxkz=$("#zxkz").val();
            var gxhc=$("#gxhc").val();
            var phone=$("#phone").val();
            var host=window.location.href;
            if(phone  && /^1[3|4|5|8]\d{9}$/.test(phone ))
            {
                $.ajax({
                    type:"POST",
                    url:'/profitcomplate',
                    data:{"rjcj":rjcj,'pjdj':pjdj,'sdfy':sdfy,'rygz':rygz,'gssy':gssy,'zxkz':zxkz,'gxhc':gxhc,'phone':phone,'host':host},
                    success: function (response, stutas, xhr) {
                        newChart(response);
                        $('#rjcjres').text(response['rjcj']);
                        $('#pjdjres').text(response['pjdj']);
                        $('#rjsyres').text(response['rjcj']*response['pjdj']);
                        $('#rjcbres').text(((response['sdfy']/30)+(response['rygz']/30)+(response['gssy']/365)+(response['zxkz']/30)+((response['gxhc']/30))).toFixed(0));
                        $('#rylres').text(response['rjcj']*response['pjdj']-((response['sdfy']/30)+(response['rygz']/30)+(response['gssy']/365)+(response['zxkz']/30)+((response['gxhc']/30))).toFixed(0));
                        $('#monthres').text((response['rjcj']*response['pjdj']-((response['sdfy']/30)+(response['rygz']/30)+(response['gssy']/365)+(response['zxkz']/30)+((response['gxhc']/30))).toFixed(0))*30);
                        $('#yearres').text((response['rjcj']*response['pjdj']-((response['sdfy']/30)+(response['rygz']/30)+(response['gssy']/365)+(response['zxkz']/30)+((response['gxhc']/30))).toFixed(0))*365);
                        $('#lrlv').text(((response['rjcj']*response['pjdj'])/((response['sdfy']/30)+(response['rygz']/30)+(response['gssy']/365)+(response['zxkz']/30)+((response['gxhc']/30)))*100).toFixed(0)+'%');
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
            data: [datas['sdfy'], datas['rygz'], datas['gssy'], datas['zxkz'], datas['gxhc']],
            backgroundColor: [
                "#455C73",
                "#9B59B6",
                "#BDC3C7",
                "#26B99A",
                "#3531ec"
            ],
            label: 'My dataset' // for legend
        }],
        labels: [
            "水电费用",
            "人员工资",
            "工商税务",
            "杂项开支",
            "干洗耗材"
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
        data: [1000, 3000, 1000, 1000, 2000],
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
        "水电费用",
        "人员工资",
        "工商税务",
        "杂项开支",
        "干洗耗材"
    ]
};

var pieChart = new Chart(ctx, {
    data: data,
    type: 'pie',
    otpions: {
        legend: false
    }
});