<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>小卖铺登录</title>
    <link rel="stylesheet" href="/weixin/css/login.css" />
    <link rel="stylesheet" href="/weixin/layer_mobile/need/layer.css" />
    <style>
	input[placeholder], [placeholder], *[placeholder] {color:#ccc !important;font-size:14px;}
        input::-webkit-input-placeholder{color:#ccc;font-size:14px;}
        input::-moz-placeholder{color:#ccc;font-size:14px;}
        input:-moz-placeholder{color:#ccc;font-size:14px;}
        input:-ms-input-placeholder{color:#ccc;font-size:14px;}
        .btn-login:active{background:#f18238;}
    </style>
</head>
<body >
    <section class="container">
        <div class="login-logo"><img src="/weixin/images/logo.png"></div>
        <div class="login-box">					
            <form action="javascript:;">
                <div class="login-form">	
                    <input type="text"  placeholder="请输入您的手机号" style="font-size: 18px;background-color: transparent;" id="fr-input-mobile" maxlength="11">
                </div>
                
                <div class="login-form">		
                  <input type="password" placeholder="请填写您的密码" style="font-size: 18px;background-color: transparent;" maxlength="16" id="fr-input-pwd">
                </div>
                
                <input type="submit" class="btn-login" value="登  录" style="font-size: 14px;font-weight: blod;" id="fr-btn-login">				 			  
            </form>
        </div>
        
        <div class="login-foot">
            <p>
               <span><a href="#" style="color:#afa3a3;">忘记密码？</a></span>  
               <span class="fr"><a href="{{route('w_auth_register')}}">快速注册</a></span>
            </p>				
        </div>
    </section>

<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="/weixin/layer_mobile/layer.js"></script>
<script>
    
    var obj = {
        loginLoading:false,
        numberFormater:function(val){
            //去除手机号中的空格
            return val.replace(/[^0-9]/g,"");
        },
        checkMobile:function(val){
            //验证手机号格式
            var myreg = /^1(3|4|5|7|8)\d{9}$/; 
            return myreg.test(val);
        },
        checkPassWord:function(){
            //密码格式验证
            var str = password;
            if (str == null || str.length < 8) {
                return false;
            }
            
            var reg = new RegExp(/^(?![^a-zA-Z]+$)(?!\D+$)/);
            return reg.test(val);
        },
        login:function(){
            var mobile = $('#fr-input-mobile').val();
            var pwd    = $('#fr-input-pwd').val();
            if(mobile == ''){
                layer.open({content: '手机号不能为空',skin: 'msg',time: 2});
                return false;
            }
            
            if(!this.checkMobile(mobile)){
                layer.open({content: '手机号格式错误',skin: 'msg',time: 2});
                return false;
            }
            
            if(pwd == ''){
                layer.open({content: '请填写登录密码',skin: 'msg',time: 2});
                return false;
            }
            
            if(this.loginLoading == false){
                layer.open({type: 2,content: '登录中,请稍等...'});
            }else{
                layer.open({content: '登录中...',skin: 'msg',time: 2});
            }
        }
    };
    
    $('#fr-input-mobile').on('input',function(){
        $(this).val(obj.numberFormater($(this).val()))
    });
    
    $('#fr-btn-login').on('click',function(){
        obj.login();
    });
        
</script>
</body>
</html>
