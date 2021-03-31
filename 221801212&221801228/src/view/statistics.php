<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <script src="view/jquery/jquery.min.js"></script>
    <link href="view/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="view/bootstrap/bootstrap.min.js"></script>
    <title>统计</title>
    <link type="text/css" rel="stylesheet" href="view/css/statistics.css"/>
    <link type="text/css" rel="stylesheet" href="view/css/search.css"/>
    <script src="view/js/echarts.js"></script>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="nav nav-pills">
                <li>
                    <a href="index.php">搜索</a>
                </li>
                <li class="active">
                    <a href="?statistics=true">统计</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="main" style="width: 800px;height:600px;"></div>
<script type="text/javascript">

    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));
    // 指定图表的配置项和数据
    myChart.setOption({
        title: {
            text: '论文统计'
        },
        tooltip : {
            trigger: 'axis'

        },

        legend: {
            data:['AAA','BBB','CCC']

        },

        toolbox: {
            show : true,

            feature : {
                mark : {show:true},

                dataView : {show:true, readOnly: false},

                magicType : {show:true, type: ['line', 'bar', 'stack', 'tiled']},

                restore : {show:true},

                saveAsImage :{show: true}

            }

        },

        calculable : true,

        xAxis : [

            {
                type : 'category',

                boundaryGap :false,

                data : ['2017','2018','2019','2020','2021']

            }

        ],

        yAxis : [

            {
                type : 'value'

            }

        ],

        series : [

            {
                name:'AAA',

                type:'line',

                stack: '数量',

                data:[120, 132,101, 134, 90, 230, 210]

            },

            {
                name:'BBB',

                type:'line',

                stack: '数量',

                data:[220, 182,191, 234, 290, 330, 310]

            },

            {
                name:'CCC',

                type:'line',

                stack: '数量',

                data:[150, 232,201, 154, 190, 330, 410]

            }

        ]
    });
    // 异步加载数据
    /*  $.get('data.json').done(function (data) {
           // 填入数据
           myChart.setOption({ xAxis: { data: data.categories }, series: [{
                // 根据名字对应到相应的系列
                name: '销量',
                data: data.data
           }]
           });});*/
</script>

</body>

</html>
