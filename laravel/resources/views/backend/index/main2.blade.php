<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>CMS管理系统</title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="/ace-asstes/layer/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
        <link rel="stylesheet" href="{{asset('css/nprogress.css')}}" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
        <script src="/ace-asstes/js/ace-extra.min.js"></script>
        <link rel="stylesheet" href="{{asset('ace-asstes/css/jquery.gritter.min.css')}}" />
        <style>
            li{list-style:none;}
            .breadcrumb>li+li:before {content: none;}
            .tab-nav-li{
                    border: 1px solid #ccc;
                    padding-top:2px !important;
                    padding-bottom: 2px !important;
                    padding-left: 2px !important;
                    padding-right:8px !important;
                    cursor: pointer;
                    color:#ccc !important;
            }
            .tab-nav-li:not(:first-child) {margin-left:3px}
            .tab-nav-li:hover:not(.tab-nav-active) {border: 1px solid #6FB3E0 !important;color: #6FB3E0 !important;}
            .tab-nav-active{border: 1px solid #6FB3E0 !important;color: #6FB3E0 !important;}
            .my-tab-nav-close{padding-left:2px;}
            #my-iframe-box{
                    min-height: 300px;position: relative;
                    top:2px;bottom:0;
                    left:0; right:0;
                    overflow:auto;width: 100%;
            }
            .show_iframe{ position:absolute; top:0; right:0; left:0; bottom:0;display: none;}
            .show_iframe iframe {position: absolute;bottom: 0;height: 100%;width: 100%;display:block;}
            .active-iframe{display: block !important;}
            .tab-select{
                    width:150px;
                    height:150px;
                    border:1px solid #ccc;
                    position:fixed;top:0px;
                    right:5px;
                    display:none;
                    z-index:1000;
                    background:#fff;
            }
            .tab-select ul{margin: 0;cursor: pointer;}
            #tab-nav-select{
                    height:200px;
                    overflow-y:auto;
                    overflow-x: none;
            }

            .tab-nav-select-active{background: rgb(135, 184, 127);color: #fff;}
            .tab-nav-select-li{
                    padding: 0;
                    margin: 0;
                    height:30px;
                    line-height:30px;
            }
            .tab-nav-select-li span{
                    color: #585858;
                    display: inline-block;
                    padding-left:10px;
                    font-weight: bold;
            }
            .tab-nav-select-li span i{color:rgb(111, 179, 224);}
            .tab-nav-select-li:hover{background: rgb(135, 184, 127);}
            .tab-nav-select-li:hover span,.tab-nav-select-li:hover span i{color: #fff;}
            .tab-nav-select-active span,.tab-nav-select-active span i{color: #fff !important;}
            .cus-click-url{cursor: pointer}
            
            div.dataTables_processing{
                z-index: 99999999 !important;
                background: red;
            }
        </style>
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">切换栏</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="javasceipt:void(0)" class="navbar-brand">
                        <small>CMS管理系统</small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i>
                                <span class="badge badge-grey">4</span>
                            </a>
                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-check"></i>
                                    4项任务
                                </li>
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">软件更新</span>
                                                    <span class="pull-right">65%</span>
                                                </div>

                                                <div class="progress progress-mini">
                                                    <div style="width:65%" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">查看任务详情<i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="purple dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span>
                            </a>
                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                    <li class="dropdown-header">
                                        <i class="ace-icon fa fa-exclamation-triangle"></i>8条通知
                                    </li>
                                    <li class="dropdown-content">
                                        <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <span class="pull-left">
                                                            <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>新评论
                                                        </span>
                                                        <span class="pull-right badge badge-info">+12</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                <li class="dropdown-footer">
                                    <a href="#">查看所有通知<i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="green dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="ace-icon fa fa-envelope icon-animated-vertical"></i><span class="badge badge-success">5</span>
                            </a>
                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header"><i class="ace-icon fa fa-envelope-o"></i>5条消息</li>
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/ace-asstes/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title"><span class="blue">小明:</span>这是一个不错的模板呦...</span>
                                                    <span class="msg-time"><i class="ace-icon fa fa-clock-o"></i><span>刚刚</span></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="inbox.html">查看所有消息<i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="/ace-asstes/images/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>欢迎,</small><?php echo $user_info->name?>
                                </span>
                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="javascript:voi(0)"><i class="ace-icon fa fa-cog"></i>设置</a>
                                </li>
                                <li>
                                    <a class="cus-open-tab" href="javascript:voi(0)"><i class="ace-icon fa fa-user"></i>个人信息</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:voi(0)" onclick="mainObj.signOut('{{route('b_auth_logout')}}')"><i class="ace-icon fa fa-power-off"></i>退出</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <div id="sidebar" class="sidebar responsive ace-save-state">
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success"><i class="ace-icon fa fa-signal"></i></button>
                        <button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>
                        <button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>
                        <button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>
                    </div>
                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div>

                <?php echo $menus;?>

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner" >
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs" >
                        <div id='tab-caozuo-select' class='tab-select'>
                            <ul>
                                <li data-action='refresh' class='tab-nav-select-li'>
                                    <span><i class="ace-icon fa fa-refresh"></i>&nbsp;刷新当前</span>
                                </li>
                                <li data-action='remove' class='tab-nav-select-li'>
                                    <span><i class="ace-icon glyphicon glyphicon-remove"></i>&nbsp;关闭当前</span>
                                </li>
                                <li data-action='removeOther' class='tab-nav-select-li'>
                                    <span><i class="ace-icon glyphicon glyphicon-remove"></i>&nbsp;关闭其它</span>
                                </li>
                                <li data-action='removeAll' class='tab-nav-select-li'>
                                    <span><i class="ace-icon glyphicon glyphicon-remove"></i>&nbsp;关闭全部</span>
                                </li>
                                <li data-action='refreshAll' class='tab-nav-select-li'>
                                    <span><i class="ace-icon fa fa-refresh" ></i>&nbsp;刷新外层框架</span>
                                </li>
                            </ul>
                        </div>

                        <div id='tab-nav-select' class='tab-select'><ul></ul></div>
                        
                        <div style='width: 100%;height:40px;position:relative;overflow:hidden;' id="my-tab-box">
                            <div style="height:40px;width:100000px;position:relative !important;left:15px" id='my-tab-nav-box'>
                                <ul class="breadcrumb" id='my-tab-nav-ul'></ul>
                            </div>
                            <div  id='left-slide' style="width: 25px;height: 30px;position: absolute;top:5px;text-align:right;background:#fff">
                                <div style="width: 20px;height: 30px;text-align:center;cursor: pointer;background-color:#E7E7E7!important;float:right;line-height:30px;">
                                        <i class="ace-icon fa fa-angle-double-left"></i>
                                </div>
                            </div>
                            <div id='right-slide' style="width: 20px;height: 30px;position: absolute;top:5px;right: 170px;line-height:30px;text-align:center;cursor: pointer;background-color:#E7E7E7!important;">
                                <i class="ace-icon fa fa-angle-double-right"></i>
                            </div>
                            <div id='tab-select-click' style="width: 170px;height: 30px;position: absolute;top:5px;right: 0px;line-height:30px;cursor: pointer;background:#fff;padding:0">
                                <button  id='tab-nav-select-btn'  class="btn btn-info btn-sm dropdown-toggle" style="border-top-width: 2px;border-bottom-width: 2px;top:-2px;">
                                    下拉菜单
                                    <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                </button>
                                <button id='tab-caozuo'  class="btn btn-success btn-sm" style="border-top-width: 2px;border-bottom-width: 2px;top:-2px;">
                                    操 作
                                    <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="my-iframe-box" ></div>
                </div>
            </div>
        </div>
        <script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="/ace-asstes/js/bootstrap.min.js"></script>
        <script src="/ace-asstes/js/jquery-ui.custom.min.js"></script>
        <script src="/ace-asstes/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/ace-asstes/js/jquery.easypiechart.min.js"></script>
        <script src="/ace-asstes/js/jquery.sparkline.index.min.js"></script>
        <script src="/ace-asstes/js/jquery.flot.min.js"></script>
        <script src="/ace-asstes/js/jquery.flot.pie.min.js"></script>
        <script src="/ace-asstes/js/jquery.flot.resize.min.js"></script>
        <script src="/ace-asstes/js/ace-elements.min.js"></script>
        <script src="/ace-asstes/js/ace.min.js"></script>
        <script src="{{asset('ace-asstes/layer/layer.js')}}"></script>
        <script src="{{asset('ace-asstes/js/jquery.gritter.min.js')}}"></script>
        <script src="{{asset('js/nprogress.js')}}"></script>
        <script src="/ace-asstes/js/my-tab.js"></script>
        <script>
            nprogress.start();
            $(function(){
                nprogress.done();
                
                //边缘弹出
                @if($is_expiry_time)
                    var expiry_time = '{{$user_info->expiry_time}}';
                    var editpwd_index = layer.open({
                        type: 1
                        ,btn: '立即修改'
                        ,title:'密码提示'
                        ,offset: 'rb' //具体配置参考：offset参数项
                        ,content: '<div style="padding:10px 10px 10px 10px">...，管理员您的密码于 <font color="red">'+expiry_time+'</font> 过期，为了不影响您的后续操作，请立即修改密码......</div>'
                        ,shade: 0 //不显示遮罩
                        ,yes: function(){
                            layer.close(editpwd_index);
                        }
                    });
                @endif
            });

            var mytab = new MyTab({
                href:"{{route('b_index_index')}}",
                title:'首 页',
                icon:'ace-icon fa fa-home home-icon',
                index:'首 页',
                lock:true,
            });
            mytab.init();

            $('.cus-click-url').on('click',function(){
                $('.cus-click-url').each(function(){
                    $(this).parent().removeClass('active');
                });
                $(this).parent().addClass('active');
                var obj = $(this).data('options');
                mytab.addTab(obj);
            }).on('tap',function(){
                $('.cus-click-url').each(function(){
                    $(this).parent().removeClass('active');
                });
                $(this).parent().addClass('active');
                var obj = $(this).data('options');
                mytab.addTab(obj);
            })

            /**
                * 主框架操作类
                * @type type 
                */
               var mainObj = {
                    gritterAdd:function(data){
                        $.gritter.add(data);
                    },
                    signOut:function(href){
                        layer.confirm('您确定要退出后台操作吗？', {
                            btn: ['确定','取消'] //按钮
                        }, function(){
                           layer.msg('退出中, 请稍等...', {icon: 16,shade: 0.01,time:0});
                           window.location.href = href;
                        });
                    }
               };
        </script>
    </body>
</html>
