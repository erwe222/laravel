<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>登录和注册-ACE后台管理系统</title>
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="http://www.lar.test.com/ace-asstes/layer/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
        <link rel="stylesheet" href="{{asset('ace-asstes/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/googlefonts/fonts.googleapis.com.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/css/ace.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/css/ace-rtl.min.css')}}" />
    </head>
    <body class="login-layout">
        <?php // echo captcha_img();?>
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Ace</span>
                                    <span class="white" id="id-text2">后台管理系统</span>
                                </h1>
                                <h4>  </h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-coffee green"></i>请输入您的信息
                                            </h4>

                                            <div class="space-6"></div>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="用户名" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="密码" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
                                                    <div class="space"></div>
                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" id="cus-checkbox" />
                                                            <span class="lbl">记住我</span>
                                                        </label>
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-primary" id="cus-login-but">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span class="bigger-110">登录</span>
                                                        </button>
                                                    </div>
                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>

                                            <div class="social-or-login center">
                                                <span class="bigger-110">其他登录方式</span>
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="social-login center">
                                                <a class="btn btn-primary">
                                                    <i class="ace-icon fa fa-qq"></i>
                                                </a>

                                                <a class="btn btn-success">
                                                    <i class="ace-icon fa fa-weixin"></i>
                                                </a>

                                                <a class="btn btn-danger">
                                                    <i class="ace-icon fa fa-weibo"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="toolbar clearfix">
                                            <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    忘记密码？
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#" data-target="#signup-box" class="user-signup-link">
                                                    注册帐号
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="ace-icon fa fa-key"></i>找回密码
                                            </h4>

                                            <div class="space-6"></div>
                                            <p>输入您的电子邮件</p>
                                             <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="电子邮箱" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110">发送</span>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                返回登录
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="ace-icon fa fa-users blue"></i>
                                                新用户注册
                                            </h4>

                                            <div class="space-6"></div>
                                            <p> 输入您的详细信息： </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                                <input type="email" class="form-control" placeholder="邮箱" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                                <input type="text" class="form-control" placeholder="用户名" />
                                                                <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="密码" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="再次输入密码" />
                                                            <i class="ace-icon fa fa-retweet"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">
                                                            我接受
                                                            <a href="#">用户注册协议</a>
                                                        </span>
                                                    </label>

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="ace-icon fa fa-refresh"></i>
                                                            <span class="bigger-110">重置</span>
                                                        </button>

                                                        <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                            <span class="bigger-110">注册</span>
                                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar center">
                                            <a href="#" data-target="#login-box" class="back-to-login-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                返回登录
                                            </a>
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.signup-box -->
                            </div><!-- /.position-relative -->

                            <div class="navbar-fixed-top align-right">
                                <br />&nbsp;
                                <a id="btn-login-dark" href="#">黑色</a>
                                &nbsp;<span class="blue">/</span>&nbsp;
                                <a id="btn-login-blur" href="#">滤镜</a>
                                &nbsp;<span class="blue">/</span>&nbsp;
                                <a id="btn-login-light" href="#">亮色</a>
                                &nbsp; &nbsp; &nbsp;
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <script src="{{url('ace-asstes/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{url('ace-asstes/layer/layer.js')}}"></script>
        <script src="{{url('ace-asstes/js/spin.js')}}"></script>
        <script type="text/javascript">
//                if('ontouchstart' in document.documentElement) document.write("<script src='"{{asset('ace-asstes/js/jquery.mobile.custom.min.js')}"'>"+"<"+"/script>");
        </script>
        <script type="text/javascript">
            jQuery(function($) {
                
                $(document).on('click', '.toolbar a[data-target]', function(e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });

            jQuery(function($) {
                 $('#btn-login-dark').on('click', function(e) {
                        $('body').attr('class', 'login-layout');
                        $('#id-text2').attr('class', 'white');
                        $('#id-company-text').attr('class', 'blue');

                        e.preventDefault();
                 });
                 $('#btn-login-light').on('click', function(e) {
                        $('body').attr('class', 'login-layout light-login');
                        $('#id-text2').attr('class', 'grey');
                        $('#id-company-text').attr('class', 'blue');

                        e.preventDefault();
                 });
                 $('#btn-login-blur').on('click', function(e) {
                        $('body').attr('class', 'login-layout blur-login');
                        $('#id-text2').attr('class', 'white');
                        $('#id-company-text').attr('class', 'light-blue');

                        e.preventDefault();
                 });
                 
                $('#cus-login-but').on('click',function(){
                    
                    
                    var rememberme = $('#cus-check').hasClass('layui-form-checked') ?'yes':'no';
                    var username = $.trim($('#cus-username-input').val());
                    var pwd = $.trim($('#cus-pwd-input').val());
                    var code = $.trim($('#cus-code-input').val());
                    $.ajax({
                        url:'/login/post-login',
                        type:'post',
                        data:{username:username,password:pwd,rememberme:rememberme,code:code},
                        dataType:'json',
                        success:function(res){
                            layer.close(loadIndex);
                            console.log(res);
                            if(res.code == 200){
                                window.location.href = '/';
                                return false;
                            }else if(res.code == 302){
                                layer.msg('用户不存在');
                            }else if(res.code == 303){
                                layer.msg('密码输入错误');
                            }else if(res.code == 304){
                                layer.msg('用户已被锁定...');
                            }else if(res.code == 403){
                                layer.msg('验证码输入错误');
                            }
                        }
                    });
                });
                
                $('#cus-register-but').on('click',function(){
                    
                });
            });
        </script>
    </body>
</html>
