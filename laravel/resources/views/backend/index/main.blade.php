<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>后台管理系统</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="/ace-asstes/layer/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
    <link rel="stylesheet" href="{{asset('css/nprogress.css')}}" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('ace-asstes/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('ace-asstes/css/jquery.gritter.min.css')}}" />
    <link rel="stylesheet" href="{{asset('ace-asstes/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('ace-asstes/googlefonts/fonts.googleapis.com.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('ace-asstes/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{asset('ace-asstes/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('ace-asstes/css/ace-rtl.min.css')}}" />

    <style>
    .breadcrumb>li+li:before {
        font-family: FontAwesome;
        font-size: 14px;
        content: none;
        color: #B2B6BF;
        padding: 0;
        margin: 0 8px 0 0;
        position: relative;
        top: 1px;
    }

    .breadcrumb>li+li:before {
        content: none;
        padding: 0 5px;
        color: #ccc;
    }
    .my-breadcrumb{height:30px !important;overflow:hidden;width:100%;}
    .my-breadcrumb li{
        padding-left:10px;padding-right:10px;height:30px;line-height:30px;border:1px solid #ccc;
    }
    .my-breadcrumb li a{text-decoration:none;}
    .my-breadcrumb li a i{cursor:pointer}
    
    .cus-tab-caozuo ul li{cursor:pointer}
    
    .cus-tab-show {display: block;}
    .cus-tab-hide {display: none;}
    
    .dropdown-toggle,#my-tab-breadcrumb li{cursor:pointer;border-left:none;}
    .my-tab-breadcrumb-show{border-bottom:0px !important;}
    #my-tab-breadcrumb li:nth-child(2){
        margin-right:-4px !important;border-left:1px solid #ccc !important;
    }
    body{overflow-x:hidden;}
    </style>
    <!-- ace settings handler -->
    <script src="{{asset('ace-asstes/js/ace-extra.min.js')}}"></script>
</head>
<body class="no-skin" >
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">切换栏</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="/" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            后台管理系统
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i><span class="badge badge-grey">4</span>
                            </a>
                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header"><i class="ace-icon fa fa-check"></i>4项任务</li>
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
                                <li class="dropdown-footer"><a href="#">查看所有通知<i class="ace-icon fa fa-arrow-right"></i></a></li>
                            </ul>
                        </li>

                        <li class="green dropdown-modal">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span>
                            </a>

                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-envelope-o"></i>
                                    5条消息
                                </li>

                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/ace-asstes/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">小明:</span>
                                                        这是一个不错的模板呦...
                                                    </span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>刚刚</span>
                                                    </span>
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
                                    <a href="#"><i class="ace-icon fa fa-cog"></i>设置</a>
                                </li>
                                <li>
                                    <a class="cus-open-tab" data-options='{"url":"{{route('b_admin_profile')}}","icon":"icon-desktop","title":"个人信息","index":"admin-profile"}'><i class="ace-icon fa fa-user"></i>个人信息</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{route('b_auth_logout')}}"><i class="ace-icon fa fa-power-off"></i>退出</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">try{ace.settings.loadState('sidebar')}catch(e){}</script>
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success"  data-options='{"url":"index/test","icon":"fa fa-coffee","title":"菜单管理1","index":"test1"}'>
                            <i class="ace-icon fa fa-signal"></i>
                        </button>
                        <button class="btn btn-info" data-options='{"url":"index/test","icon":"icon-desktop","title":"菜单管理2","index":"test2"}'>
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>
                        <button class="btn btn-warning" data-options='{"url":"index/test","icon":"icon-desktop","title":"菜单管理3","index":"test3"}'>
                            <i class="ace-icon fa fa-users"></i>
                        </button>
                        <button class="btn btn-danger" data-options='{"url":"index/test","icon":"icon-desktop","title":"菜单管理4","index":"test4"}'>
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
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
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs" >
                        <ul class="breadcrumb my-breadcrumb" id="my-tab-breadcrumb">
                            <li style="display:none;">
                                <a><i class="ace-icon glyphicon glyphicon-fast-backward"></i></a> 
                            </li>
                        </ul>
                        
                        <div class="nav-search dropdown-modal cus-tab-caozuo" id="nav-search">
                            <div data-toggle="dropdown"  class="dropdown-toggle" style="cursor: pointer;width:100px;background: #31CB83;height: 30px;line-height: 30px;text-align:center;font-weight: bold;color: #FFF">
                                操 作
                                <i class="ace-icon fa fa-caret-down"></i>
                            </div>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li data-type="1">
                                    <a><i class="ace-icon fa fa-refresh"></i>刷新当前选项卡</a>
                                </li>
                                <li class="divider"></li>
                                <li data-type="2">
                                    <a><i class="ace-icon glyphicon glyphicon-remove"></i>关闭当前选项卡</a>
                                </li>
                                <li class="divider"></li>
                                <li data-type="3">
                                    <a><i class="ace-icon glyphicon glyphicon-remove"></i>关闭其它选项卡</a>
                                </li>
                                <li class="divider"></li>
                                <li data-type="4">
                                    <a><i class="ace-icon glyphicon glyphicon-remove"></i>关闭所有选项卡</a>
                                </li>
                                <li class="divider"></li>
                                <li data-type="5">
                                    <a><i class="ace-icon fa fa-refresh"></i>刷新外层框架</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                    <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>
                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                            </select>
                                        </div>
                                        <span>&nbsp; 选择皮肤</span>
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-navbar"> 固定导航</label>
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑导航</label>
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-rtl"> 切换到左边</label>
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-add-container">切换窄屏</label>
                                    </div>
                                </div>
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-hover"> 子菜单悬停</label>
                                    </div>

                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                        <label class="lbl" for="ace-settings-compact">紧凑侧边栏</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="page-content-panel"></div>
                    </div>
                </div>
            </div>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>

        <script src="{{asset('ace-asstes/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{asset('js/nprogress.js')}}"></script>
        
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="{{asset('ace-asstes/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('ace-asstes/js/jquery-ui.custom.min.js')}}"></script>
        <script src="{{asset('ace-asstes/js/jquery.ui.touch-punch.min.js')}}"></script>
        <script src="{{asset('ace-asstes/js/ace-elements.min.js')}}"></script>
        <script src="{{asset('ace-asstes/js/ace.min.js')}}"></script>
        <script src="{{asset('ace-asstes/layer/layer.js')}}"></script>
        <script src="{{asset('ace-asstes/js/jquery.gritter.min.js')}}"></script>
        <script type="text/javascript">
            nprogress.start();
            var w_height = window.innerHeight -  137;
            
            /**
             * 选项卡操作类
             * @type type
             */
            var objTab = {
                defaultInfo:{
                    url:"{{route('b_index_index')}}",
                    index:'iframe-index',
                    title:'首页',
                    icon:'glyphicon glyphicon-home',
                    close:false,
                },
                defaultPageIndex:'iframe-index',
                previousPageIndex:'iframe-index',
                currentPageIndex:'iframe-index',
                tabExists: function(index) {
                    return document.getElementById(index)?true:false;
                },
                tabDelete: function(o) {
                    var iframename = o.parent().parent().data('id');
                    o.parent().parent().remove();
                    $('#'+iframename).remove();
                    if(this.tabExists(this.previousPageIndex)){
                        this.tabChange(this.previousPageIndex);
                    }else{
                        this.tabChange(this.defaultPageIndex);
                    }
                    event.stopPropagation();
                },
                tabChange: function(index) {
                    $('.cus-tab-panel').each(function(){
                        $(this).removeClass('cus-tab-show').addClass('cus-tab-hide');
                    });
                    $('#my-tab-breadcrumb > li').each(function(){
                        if($(this).data('id') == index){
                            $(this).addClass('my-tab-breadcrumb-show');
                        }else{
                            $(this).removeClass('my-tab-breadcrumb-show');
                        }
                    });

                    $('#'+index).removeClass('cus-tab-hide').addClass('cus-tab-show');

                    if(index != this.currentPageIndex){
                        this.previousPageIndex = this.currentPageIndex;
                        this.currentPageIndex  = index;
                    }
                },
                tabAdd: function(data) {
                    if(!this.tabExists(data.index)){
                        //启动加载进度条
                        nprogress.start();
                        
                        var closeIcon = '<i class="ace-icon glyphicon glyphicon-remove my-tab-close" ></i>';
                        //判断选项卡否显示关闭按钮
                        if(data.hasOwnProperty('close') && data.close == false){
                            closeIcon = '';
                        }
                        
                        var that = this;
                        var iframename = data.index;
                        var html  = '<li data-id="'+iframename+'" onclick="objTab.tabChange(\''+iframename+'\')">';
                                html += '<a><i class="ace-icon '+data.icon+'"></i> '+data.title+' '+closeIcon+'</a>';
                            html += '</li>';
                        $('#my-tab-breadcrumb').append(html);

                        $('.my-tab-close').on('click',function(){
                            that.tabDelete($(this));
                        });

                        $('.cus-tab-panel').each(function(){
                            $(this).removeClass('cus-tab-show').addClass('cus-tab-hide');
                        });

                        var panel_html = '';
                        panel_html += '<div class="row cus-tab-hide cus-tab-panel" id="'+iframename+'">';
                        var iframename_rand = iframename+'--'+ this.randomStr(5);
                        panel_html += '<iframe   src="'+data.url+'" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="100%" height=100% id="'+iframename_rand+'" name="'+iframename_rand+'"  ></iframe>';
                        panel_html += '</div>';
                        $('#page-content-panel').append(panel_html);

                        $('#'+iframename_rand).on("load",function() {
                            nprogress.done();
                            var mainheight,pre_height;
                            var frame_content = $(this);
                            var timer = setInterval(function(){
                                mainheight = frame_content.contents().find("body").height();
                                if(w_height >= mainheight){
                                    mainheight = w_height;
                                }
                                if (mainheight != pre_height){
                                    pre_height = mainheight;
                                    frame_content.height(mainheight);
                                }
                            },250);//每0.25秒检查一次
                        })
                    }
                    this.tabChange(data.index);
                },
                refreshCurrentPage:function(){
                    var iframeObj = $('#page-content-panel .cus-tab-show iframe');
                    var src = iframeObj.attr('src');
                    var name = iframeObj.attr('name');
                    nprogress.start();
                    $('#'+name).attr('src',src).on("load",function() {
                        nprogress.done();
                    });
                },
                randomStr:function(len){
                    len = len || 1;
                    var $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    var maxPos = $chars.length;
                    var pwd = '';
                    for (i = 0; i < len; i++) {
                        pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
                    }
                    return pwd;
                }
            }
            
            objTab.tabAdd(objTab.defaultInfo);
            
            $('#sidebar-shortcuts-large > button').on('click',function(){
                var obj = $(this).data('options');
                var data = {url:obj.url,title:obj.title,icon:obj.icon,index:obj.index};
                objTab.tabAdd(data);
            });

            $('.cus-click-url').on('click',function(){
                $('.cus-click-url').each(function(){
                    $(this).parent().removeClass('active');
                });
                $(this).parent().addClass('active');
                var obj = $(this).data('options');
                var data = {url:obj.url,title:obj.title,icon:obj.icon,index:obj.index+'_index'};
                objTab.tabAdd(data);
            });
                
            $('.cus-tab-caozuo ul li').on('click',function(){
                var type = $(this).data('type');
                if(type == 1){
                    objTab.refreshCurrentPage();
                }else if(type == 2){
                    $('.my-tab-close').each(function(){
                        if($(this).parent().parent().data('id') == objTab.currentPageIndex){
                            objTab.tabDelete($(this));
                        }
                    });
                }else if(type == 3){
                    $('.my-tab-close').each(function(){
                        if($(this).parent().parent().data('id') != objTab.currentPageIndex){
                            objTab.tabDelete($(this));
                        }
                    });
                }else if(type == 4){
                    $('.my-tab-close').each(function(){
                        objTab.tabDelete($(this));
                    });
                    objTab.previousPageIndex = objTab.currentPageIndex = objTab.defaultPageIndex;
                    objTab.tabChange(objTab.defaultPageIndex);
                }else if(type == 5){
                    layer.confirm('您确定要刷新外层框架吗?', {
                        btn: ['确定','取消']
                      }, function(){
                          location.reload();
                      }, function(){
                        layer.msg('取消刷新');
                    });
                }
            });
            
            /**
             * 主框架操作类
             * @type type 
             */
            var mainObj = {
                gritterAdd:function(data){
                    $.gritter.add(data);
                }
            };

            $(function(){
                nprogress.done();
            });
            
            $('.cus-open-tab').on('click',function(){
                var obj = $(this).data('options');
                var data = {url:obj.url,title:obj.title,icon:obj.icon,index:obj.index};
                objTab.tabAdd(data);
            });
        </script>
    </body>
</html>
