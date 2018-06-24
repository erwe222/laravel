<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>登录--后台管理系统</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="/ace-asstes/layer/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
        <link rel="stylesheet" href="{{asset('ace-asstes/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/googlefonts/fonts.googleapis.com.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/css/ace.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace-asstes/css/ace-rtl.min.css')}}" />
        <style>
            .cus-label-img img {float:right;margin-left:2px;height: 34px;cursor: pointer;}
            .light-login {
                background: url(/ace-asstes/images/bg-img.jpg) #DFE0E2;
            }
        </style>
    </head>
    <body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Ace</span>
                                    <span class="red" id="id-text2">CMS管理系统</span>
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
                                                            <input type="email" class="form-control" placeholder="登录名" name="username" id="cus-username-input"/>
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="密码" name="pasword" id="cus-password-input" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right cus-label-img">
                                                            <input type="text" class="form-control" placeholder="验证码" style="width:60%;float:left;" name="code" id="cus-code-input" maxlength="5">
                                                            <?php  echo captcha_img();?>
                                                        </span>
                                                    </label>
                                                    
                                                    <div class="space"></div>
                                                    <div class="clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" id="cus-checkbox"  />
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
                                        </div>

                                        <div class="toolbar clearfix">
                                            <div>
                                                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    忘记密码？
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
                                                            <input type="email" class="form-control" placeholder="电子邮箱" id="send-email-text"/>
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="ace-icon fa fa-lightbulb-o"></i>
                                                            <span class="bigger-110" id="send-email">发送</span>
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
                            </div><!-- /.position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <script src="{{url('ace-asstes/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{url('ace-asstes/layer/layer.js')}}"></script>
        <script src="{{url('ace-asstes/js/spin.js')}}"></script>
        <script type="text/javascript">
                $(function($) {
                    $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                    });
                    
                    $(document).on('click', '.toolbar a[data-target]', function(e) {
                        e.preventDefault();
                        var target = $(this).data('target');
                        $('.widget-box.visible').removeClass('visible');//hide others
                        $(target).addClass('visible');//show target
                    });
                });

                var Obj = {
                    sendEmailProgress:false,
                    loginProgress:false,
                };

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
                    var rememberme = $('#cus-checkbox').is(':checked')?true:false;
                    var username = $.trim($('#cus-username-input').val());
                    var pwd = $.trim($('#cus-password-input').val());
                    var code = $.trim($('#cus-code-input').val());

                    if(username == ''){
                        layer.msg('请输入登录名');
                        return false;
                    }

                    if(pwd == ''){
                        layer.msg('请输入登录密码');
                        return false;
                    }

                    if(pwd == ''){
                        layer.msg('请输入验证码');
                        return false;
                    }
                    
                    if(Obj.loginProgress == false){
                        var loading_index = layer.msg('登录中, 请稍等...', {icon: 16,shade: 0.01,time:0});
                        Obj.loginProgress == true;
                        $.ajax({
                            url:"{{route('b_auth_ptlogin')}}",
                            type:'post',
                            data:{email:username,password:pwd,remember:rememberme,code:code},
                            dataType:'json',
                            complete:function(){
                                Obj.loginProgress = false;
                                layer.close(loading_index);
                            },
                            success:function(res){
                                if(res.result){
                                    layer.msg('登录成功');
                                    setTimeout(function(){
                                        window.location.href = "{{route('b_index_main')}}";
                                    },1000);
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
                            },
                            error:function(){
                                layer.msg('网络异常，请稍后重试...', {icon: 5,time:6000});
                            }
                        });
                    }
                });
                
                $('.cus-label-img img').on('click',function(){
                    var _that = $(this);
                    $.ajax({
                        url:"{{route('b_auth_code')}}",
                        type:'get',
                        dataType:'json',
                        success:function(res){
                            _that.attr('src',res.img_url); 
                        }
                    });
                });
                
                $('#send-email').on('click',function(){
                    var _that = $(this);
                    var email = $.trim($('#send-email-text').val());

                    if(email == ''){
                        layer.msg('请填写正确的邮箱地址');return false;
                    }

                    if(Obj.sendEmailProgress == false){
                        Obj.sendEmailProgress = true;
                        var loading_index = layer.msg('登录中, 请稍等...', {icon: 16,shade: 0.01,time:0});
                        $.ajax({
                            url:"{{route('b_auth_sendemail')}}",
                            type:'post',
                            data:{email:email},
                            dataType:'json',
                            complete:function(){
                                Obj.sendEmailProgress = false;
                                layer.close(loading_index);
                            },
                            success:function(res){
                                layer.msg(res.message);
                                Obj.sendEmailProgress = false;
                            },
                            error:function(){
                                Obj.sendEmailProgress = false;
                            }
                        });
                    }
                });
        </script>
    </body>
</html>