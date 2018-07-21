<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--采用最新版本的IE文档模式渲染页面-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--移动设备优先，让viewport等于设备宽度，初始化缩放比例为1-->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>register</title>
    <!--<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" />-->
	<link rel="stylesheet" href="/weixin/css/login.css" />	
        <style>
	input[placeholder], [placeholder], *[placeholder] {
   			color:#ccc !important;font-size:14px;
		}
	    input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
	　　	color: #ccc;font-size:14px;
	　　}
	　　input:-moz-placeholder, textarea:-moz-placeholder {
	　　	color:#ccc;font-size:14px;
	　　}
	　　input::-moz-placeholder, textarea::-moz-placeholder {
	　　	color:#ccc;font-size:14px;
	　　}

	　　input:-ms-input-placeholder, textarea:-ms-input-placeholder {
	　　	color:#ccc;font-size:14px;
	　　}
	 	input::-webkit-input-placeholder{
            color:#ccc;
        }
        input::-moz-placeholder{   /* Mozilla Firefox 19+ */
            color:#ccc;
        }
        input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
            color:#ccc;
        }
        input:-ms-input-placeholder{  /* Internet Explorer 10-11 */ 
            color:#ccc;
        }
        
        .btn-login:active{
            background:#f18238;
        }
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
                    <input type="password" placeholder="请填写验证码" style="font-size: 18px;background-color: transparent;width: 50%;">	
                    <div style="width:90px;background:red;float:right;text-align: center;line-height:30px;border-radius:15px;color:#fff;background: #FFA366;padding-left: 5px;padding-right:5px;">发送短信(20s)</div>
                  </div>
                  <input type="submit" class=" btn-login" value="立即注册">				 			  
                </form>
            </div>
            <div class="login-foot">
                <p><span><a href="findpwd.html">忘记密码？</a></span>  
                   <span class="fr"><a href="{{route('w_auth_login')}}">立即登录</a></span>
                </p>				
            </div>
        </section>
    </body>
</html>
