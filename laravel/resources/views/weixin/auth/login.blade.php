<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>小卖铺登录</title>
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
	</style>
</head>
    <body >
        <section class="container">
                <div class="login-logo">
                    <img src="/weixin/images/logo.png">
                </div>
                <div class="login-box">					
                        <form action="javascript:;">
                          <div class="login-form">	
                            <input type="text"  placeholder="请输入您的手机号" style="font-size: 18px;background-color: transparent;">
                          </div>
                          <div class="login-form">		
                            <input type="password" placeholder="请填写您的密码" style="font-size: 18px;background-color: transparent;">
                          </div>
                          <input type="submit" class=" btn-login" value="登  录" style="font-size: 14px;">				 			  
                        </form>
                </div>
                <div class="login-foot">
                        <p><span><a href="findpwd.html">忘记密码？</a></span>  
                           <span class="fr"><a href="register.html">快速注册</a></span>
                        </p>				
                </div>
        </section>
    </body>
</html>
