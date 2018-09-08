@extends('layouts.body')
@section('content')
    <div class="page-header">
        <h1>主页<small><i class="ace-icon fa fa-angle-double-right"></i>概述和统计数据</small></h1>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="space-6"></div>
                <div class="col-sm-7 infobox-container" id="app">
                    <div class="infobox infobox-green">
                        <div class="infobox-icon">
                            <i class="ace-icon glyphicon glyphicon-user"></i>
                        </div>
                        <div class="infobox-data">
                            <span class="infobox-data-number">@{{statistics.users.total}}</span>
                            <div class="infobox-content">会员数</div>
                        </div>
                        <div class="stat stat-success">@{{statistics.users.increase}}%</div>
                    </div>
                    <div class="infobox infobox-pink">
                        <div class="infobox-icon">
                            <i class="ace-icon glyphicon glyphicon-user"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">@{{statistics.login.total}}</span>
                            <div class="infobox-content">登录量</div>
                        </div>
                        <div class="stat stat-important">@{{statistics.login.increase}}%</div>
                    </div>
                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-flask"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">7</span>
                            <div class="infobox-content">调查</div>
                        </div>
                    </div>
                    <div class="infobox infobox-orange2">
                        <div class="infobox-chart">
                            <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">6,251</span>
                            <div class="infobox-content">首页访问量</div>
                        </div>

                        <div class="badge badge-success">
                            7.2%
                            <i class="ace-icon fa fa-arrow-up"></i>
                        </div>
                    </div>
                    <div class="infobox infobox-blue2">
                        <div class="infobox-progress">
                            <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                <span class="percent">42</span>%
                            </div>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-text">已用流量</span>
                            <div class="infobox-content">
                                <span class="bigger-110">~</span>
                                剩余58GB
                            </div>
                        </div>
                    </div>

                    


                    <div class="space-6"></div>
                    <div class="infobox infobox-green infobox-small infobox-dark">
                        <div class="infobox-progress">
                            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                    <span class="percent">61</span>%
                            </div>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">任务</div>
                            <div class="infobox-content">完成</div>
                        </div>
                    </div>
                    <div class="infobox infobox-blue infobox-small infobox-dark">
                        <div class="infobox-chart">
                            <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">收益</div>
                            <div class="infobox-content">32,000元</div>
                        </div>
                    </div>
                    <div class="infobox infobox-grey infobox-small infobox-dark">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-download"></i>
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">下载</div>
                            <div class="infobox-content">1,205次</div>
                        </div>
                    </div>
                </div>

                <div class="vspace-12-sm"></div>

                <div class="col-sm-5">
                    <div class="widget-box">
                        <div class="widget-header widget-header-flat widget-header-small">
                            <h5 class="widget-title">
                                <i class="ace-icon fa fa-signal"></i>流量来源
                            </h5>
                            <div class="widget-toolbar no-border">
                                <div class="inline dropdown-hover">
                                    <button class="btn btn-minier btn-primary">
                                        本周<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                        <li class="active">
                                            <a  class="blue"><i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>本周</a>
                                        </li>
                                        <li>
                                            <a ><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>上周</a>
                                        </li>
                                        <li>
                                            <a ><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>本月</a>
                                        </li>
                                        <li>
                                            <a ><i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>上月</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main">
                                <div id="piechart-placeholder"></div>
                                <div class="hr hr8 hr-double"></div>
                                <div class="clearfix">
                                    <div class="grid3">
                                        <span class="grey"><i class="ace-icon fa fa-qq fa-2x blue"></i>&nbsp; QQ</span>
                                        <h4 class="bigger pull-right">1,255</h4>
                                    </div>
                                    <div class="grid3">
                                        <span class="grey"><i class="ace-icon fa fa-weixin fa-2x purple"></i>&nbsp; 微信</span>
                                        <h4 class="bigger pull-right">941</h4>
                                    </div>
                                    <div class="grid3">
                                        <span class="grey"><i class="ace-icon fa fa-weibo fa-2x red"></i>&nbsp; 微博</span>
                                        <h4 class="bigger pull-right">1,050</h4>
                                    </div>
                                </div>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="hr hr32 hr-dotted"></div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
                                <i class="ace-icon fa fa-star orange"></i>热门订单
                            </h4>
                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                            </div>
                        </div>

                        <div class="widget-body">
                                <div class="widget-main no-padding">
                                        <table class="table table-bordered table-striped">
                                            <thead class="thin-border-bottom">
                                                <tr>
                                                    <th><i class="ace-icon fa fa-caret-right blue"></i>名称</th>
                                                    <th><i class="ace-icon fa fa-caret-right blue"></i>价格</th>
                                                    <th class="hidden-480"><i class="ace-icon fa fa-caret-right blue"></i>状态</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>pydyun.com</td>
                                                    <td><small><s class="red">$29.99</s></small><b class="green">$19.99</b></td>
                                                    <td class="hidden-480"><span class="label label-info arrowed-right arrowed-in">销售中</span></td>
                                                </tr>
                                                <tr>
                                                    <td>online.com</td>
                                                    <td><b class="blue">$16.45</b></td>
                                                    <td class="hidden-480"><span class="label label-success arrowed-in arrowed-in-right">已核准</span></td>
                                                </tr>
                                                <tr>
                                                    <td>newnet.com</td>
                                                    <td><b class="blue">$15.00</b></td>
                                                    <td class="hidden-480"><span class="label label-danger arrowed">待定</span></td>
                                                </tr>
                                                <tr>
                                                    <td>web.com</td>
                                                    <td><small><s class="red">$24.99</s></small><b class="green">$19.95</b></td>
                                                    <td class="hidden-480"><span class="label arrowed"><s>无货</s></span></td>
                                                </tr>
                                                <tr>
                                                    <td>domain.com</td>
                                                    <td><b class="blue">$12.00</b></td>
                                                    <td class="hidden-480"><span class="label label-warning arrowed arrowed-right">已出售</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div><!-- /.col -->

                <div class="col-sm-7">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
                                <i class="ace-icon fa fa-signal"></i>销售统计
                            </h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="widget-main padding-4"><div id="sales-charts"></div></div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.col -->
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="/ace-asstes/js/jquery.easypiechart.min.js"></script>
<script src="/ace-asstes/js/jquery.sparkline.index.min.js"></script>
<script src="/ace-asstes/js/jquery.flot.min.js"></script>
<script src="/ace-asstes/js/jquery.flot.pie.min.js"></script>
<script src="/ace-asstes/js/jquery.flot.resize.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('.easy-pie-chart.percentage').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate: ace.vars['old_ie'] ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html',{
                tagValuesAttribute:'data-values',
                type: 'bar',
                barColor: barColor ,
                chartRangeMin:$(this).data('min') || 0
            });
        });


        //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
        //but sometimes it brings up errors with normal resize event handlers
        $.resize.throttleWindow = false;

        var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
        var data = [
              { label: "社交网络",  data: 38.7, color: "#68BC31"},
              { label: "搜索引擎",  data: 24.5, color: "#2091CF"},
              { label: "广告活动",  data: 8.2, color: "#AF4E96"},
              { label: "直接流量",  data: 18.6, color: "#DA5430"},
              { label: "其他",  data: 10, color: "#FEE074"}
        ]
        function drawPieChart(placeholder, data, position) {
                $.plot(placeholder, data, {
                      series: {
                              pie: {
                                      show: true,
                                      tilt:0.8,
                                      highlight: {
                                              opacity: 0.25
                                      },
                                      stroke: {
                                              color: '#fff',
                                              width: 2
                                      },
                                      startAngle: 2
                              }
                      },
                      legend: {
                              show: true,
                              position: position || "ne", 
                              labelBoxBorderColor: null,
                              margin:[-30,15]
                      }
                      ,
                      grid: {
                              hoverable: true,
                              clickable: true
                      }
               })
       }
        drawPieChart(placeholder, data);

        /**
        we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
        so that's not needed actually.
        */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);


        //pie chart tooltip example
        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
          if(item) {
              if (previousPoint != item.seriesIndex) {
                  previousPoint = item.seriesIndex;
                  var tip = item.series['label'] + " : " + item.series['percent']+'%';
                  $tooltip.show().children(0).text(tip);
              }
              $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
          } else {
              $tooltip.hide();
              previousPoint = null;
          }
       });

        /////////////////////////////////////
        $(document).one('ajaxloadstart.page', function(e) {
            $tooltip.remove();
        });

        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }

        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "域名", data: d1 },
            { label: "主机", data: d2 },
            { label: "服务", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }

        $('.dialogs,.comments').ace_scroll({size: 300});

        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if(ace.vars['touch'] && ace.vars['android']) {
          $('#tasks').on('touchstart', function(e){
                var li = $(e.target).closest('#tasks li');
                if(li.length == 0)return;
                var label = li.find('label.inline').get(0);
                if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
          });
        }

        $('#tasks').sortable({
            opacity:0.8,
            revert:true,
            forceHelperSize:true,
            placeholder: 'draggable-placeholder',
            forcePlaceholderSize:true,
            tolerance:'pointer',
            stop: function( event, ui ) {
                //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                $(ui.item).css('z-index', 'auto');
            }
        });
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
            if(this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });


        //show the dropdowns on top or bottom depending on window height and menu position
        $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
            var offset = $(this).offset();
            var $w = $(window)
            if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
                    $(this).addClass('dropup');
            else $(this).removeClass('dropup');
        });
})

</script>

<script type="text/javascript">
var app = new Vue({
  el: '#app',
  data: {
    statistics:{
        users:{
            total:'-',increase:'-',
        },
        login:{
            total:'-',increase:'-',
        },
    },

  },
  created:function(){
     //实例化是加载数据
     // this.total = 30;
  }
})
</script>
@endpush
