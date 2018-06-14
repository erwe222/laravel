<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>重置密码-CMS管理系统</title>
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
                /*background: url(/ace-asstes/images/bg-img.jpg) #DFE0E2;*/
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
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                
                                <div id="signup-box" class="signup-box widget-box no-border visible">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="ace-icon glyphicon glyphicon-zoom-in blue"></i>
                                                重置密码
                                            </h4>
                                        @if($result == 1)
                                            <p>账户不存在.</p>
                                        @elseif($result == 2)
                                            <p>找回密码链接已失效.</p>
                                        @elseif($result == 3)
                                            <div class="space-6"></div>
                                                <p> 输入您的详细信息： </p>
                                                <form>
                                                    <fieldset>
                                                        <input type='hidden' value='{{$admin_info->id}}' id='reset-id' />
                                                        <input type='hidden' value='{{$admin_info->password_reset_token}}' id='reset-token' />
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="email" class="form-control" placeholder="邮箱" value='{{$admin_info->email}}' readonly  id='reset-email' />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>

                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="form-control" placeholder="密码" id='reset-pwd' />
                                                                <i class="ace-icon fa fa-lock"></i>
                                                            </span>
                                                        </label>

                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="password" class="form-control" placeholder="再次输入密码" id='reset-pwd2' />
                                                                <i class="ace-icon fa fa-retweet"></i>
                                                            </span>
                                                        </label>

                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right" style='display:block;height:21px;color:red;' id='tip-error'>
                                                                
                                                            </span>
                                                        </label>

                                                        <div class="clearfix">
                                                            <button type="reset" class="width-30 pull-left btn btn-sm">
                                                                <i class="ace-icon fa fa-refresh"></i>
                                                                <span class="bigger-110">重置</span>
                                                            </button>

                                                            <button type="button" class="width-65 pull-right btn btn-sm btn-success" id="reset-pwd-btn">
                                                                <span class="bigger-110">立即修改</span>
                                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                            </button>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>

                                            <div class="toolbar center">
                                                <a href="{{route('b_auth_tologin')}}" data-target="#login-box" class="back-to-login-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    返回登录
                                                </a>
                                            </div>
                                        @else
                                            <p>找回密码链接已失效.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{url('ace-asstes/js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{url('ace-asstes/layer/layer.js')}}"></script>
        <script src="{{url('ace-asstes/js/spin.js')}}"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#reset-pwd,#reset-pwd2').on('input',function(){
                     $('#tip-error').text('');
                });
                 
                $('#reset-pwd-btn').on('click',function(){
                    var id = $.trim($('#reset-id').val());
                    var pwd = $.trim($('#reset-pwd').val());
                    var pwd2 = $.trim($('#reset-pwd2').val());
                    var token = $.trim($('#reset-token').val());
                    
                    if(pwd == ''){
                        $('#tip-error').text('请输入您的密码');return false;
                    }

                    if(pwd2 == ''){
                        $('#tip-error').text('请再次输入您的密码');return false;
                    }

                    if(pwd != pwd2){
                        $('#tip-error').text('填写的密码不一致');return false;
                    }

                    $.ajax({
                        url:"{{route('b_auth_resetpwd')}}",
                        type:'post',
                        data:{id:id,password:pwd,password2:pwd2,retoken:token},
                        dataType:'json',
                        success:function(res){
                            if(res.code == 200){
                                layer.msg('密码重置成功');
                                setTimeout(function(){
                                    window.location.href = "{{route('b_auth_tologin')}}";
                                },1000);
                            }else{
                                layer.msg(res.message);
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
