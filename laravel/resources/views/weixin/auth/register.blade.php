<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>小卖铺免费注册</title>
    <link rel="stylesheet" href="/weixin/css/login.css" />	
    <style>
	input[placeholder], [placeholder], *[placeholder] {color:#ccc !important;font-size:14px;}
        input::-webkit-input-placeholder{color:#ccc;font-size:14px;}
        input::-moz-placeholder{color:#ccc;font-size:14px;}
        input:-moz-placeholder{color:#ccc;font-size:14px;}
        input:-ms-input-placeholder{color:#ccc;font-size:14px;}
        .btn-login:active{background:#f18238;}
    </style>
</head>
    <body>
        <section class="container">
            <div class="login-logo">
                <img src="/weixin/images/logo.png">					
            </div>
            <div class="login-box">					
                <form action="javascript:;">
                  <div class="login-form">	
                    <input type="tel"  placeholder="请输入手机" style="font-size: 18px;background-color: transparent;">
                  </div>
                  <div class="login-form">		
                    <input type="password" placeholder="请设置登录密码" style="font-size: 18px;background-color: transparent;">				    
                  </div>
                  <div class="login-form">		
                      <input type="text" maxlength="6" placeholder="请填写验证码" style="font-size: 18px;background-color: transparent;width: 50%;">	
                    <div style="width:90px;background:red;float:right;text-align: center;line-height:30px;border-radius:15px;color:#fff;background: #FFA366;padding-left: 5px;padding-right:5px;margin-top:-5px;">发送短信(20s)</div>
                  </div>
                  <input type="submit" class=" btn-login" value="立即注册" style="font-size: 14px;font-weight: blod;">				 			  
                </form>
            </div>
            <div class="login-foot">
                <p>
                   <span><a href="#" style="color:#afa3a3;">忘记密码？</a></span>  
                   <span class="fr"><a href="{{route('w_auth_login')}}">立即登录</a></span>
                </p>				
            </div>
        </section>
    </body>
</html>
