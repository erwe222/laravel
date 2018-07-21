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
        
        .btn-login:active{
            background:#f18238;
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
                          <input type="text"  placeholder="请输入您的手机号" style="font-size: 18px;background-color: transparent;" id="fr-input-mobile" maxlength="11">
                      </div>
                      <div class="login-form">		
                        <input type="password" placeholder="请填写您的密码" style="font-size: 18px;background-color: transparent;">
                      </div>
                        <input type="submit" class="btn-login" value="登  录" style="font-size: 14px;" id="fr-btn-login">				 			  
                    </form>
                </div>
                <div class="login-foot">
                        <p><span><a href="findpwd.html">忘记密码？</a></span>  
                           <span class="fr"><a href="register.html">快速注册</a></span>
                        </p>				
                </div>
        </section>
        
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
    
    /**
      * 手机号格式化
      */
     function mobileFormater(val){
         var value = val.replace(/[^0-9]/g,"");
         var len = value.length;
         return value;
     }

    /**
     * 去除手机号中的空格
     */
    function mobileFormater2(val){
        return val.replace(/[^0-9]/g,"");
    }

    /**
     * 验证手机号格式
     */
    function checkMobile(val){
        var myreg = /^1(3|4|5|7|8)\d{9}$/; 
        return myreg.test(val);
    }

    /**
     * 密码格式验证
     */
    function checkPassWord(password) {
        var str = password;
        if (str == null || str.length < 8) {
            return false;
        }
        var reg = new RegExp(/^(?![^a-zA-Z]+$)(?!\D+$)/);
        if (reg.test(str))
            return true;
    };
    
    $('#fr-input-mobile').on('input',function(){
        $(this).val(mobileFormater($(this).val()))
    });
    
    $('#fr-btn-login').on('click',function(){
        $(this).val('登录中...');
        
        setTimeout(function(){
            $('#fr-btn-login').val('登  录');
        },2000);
    });
        
</script>
    </body>
</html>
