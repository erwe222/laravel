<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>修改密码</title>
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="stylesheet" href="/weixin/css/login.css" />	
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="/weixin/layer_mobile/need/layer.css" />
	<style>
	input[placeholder], [placeholder], *[placeholder] {color:#ccc !important;font-size:14px;}
        input::-webkit-input-placeholder{color:#ccc;font-size:14px;}
        input::-moz-placeholder{color:#ccc;font-size:14px;}
        input:-moz-placeholder{color:#ccc;font-size:14px;}
        input:-ms-input-placeholder{color:#ccc;font-size:14px;}
        .btn-login:active{background:#f18238;}
        
        #fr-code-btn{
            width:90px;
            float:right;text-align: center;
            line-height:30px;border-radius:15px;
            color:#fff;background: #FFA366;padding-left: 5px;
            padding-right:5px;margin-top:-5px;
            cursor: pointer;
        }
        #fr-code-btn:active{border-radius:15px;}
        .gray{
            background:#ccc !important;
        }
    </style>
</head>
<body style="background:#fff">

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">修改密码</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0"></a>
	</header>


	<section class="aui-me-content container" >
        <div class="login-box">					
            <form action="javascript:;">
                <div class="login-form">	
                    <input type="tel"  placeholder="请输入手机号" style="font-size: 18px;background-color: transparent;" id="fr-input-mobile" maxlength="11">
                </div>
                <div class="login-form">		
                  <input type="password" placeholder="请设置登录密码" style="font-size: 18px;background-color: transparent;" id="fr-input-pwd" maxlength="16">				    
                </div>
                <div class="login-form">		
                    <input type="text" maxlength="6" placeholder="请填写验证码" style="font-size: 18px;background-color: transparent;width: 50%;" id="fr-input-code">	
                    <div id="fr-code-btn">获取短信</div>
                </div>
                <input type="submit" class="btn-login" value="立即修改" style="font-size: 14px;font-weight: blod;" id="fr-btn-login" onclick="obj.register();">				 			  
            </form>
        </div>
    </section>


	<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
	<script src="/weixin/layer_mobile/layer.js"></script>
	

	<script type="text/javascript" >
		var obj = {
			loading:false,
			submit:function(){
				var consignee 	= $.trim($('#fr-input-consignee').val());
				var mobile 		= $.trim($('#fr-input-mobile').val());
				var city 		= $.trim($('#J_Address').val());
				var address 	= $.trim($('#fr-input-address').val());
				var addrid 		= $.trim($('#fr-input-addrid').val());
				var redir 		= $.trim($('#fr-input-redir').val());

				if(consignee == ''){
					layer.open({content: '请填写收货人姓名',skin: 'msg',time: 2});return false;
				}

				if(mobile == ''){
					layer.open({content: '请填写收货人手机号',skin: 'msg',time: 2});return false;
				}

				if(city == ''){
					layer.open({content: '请填写收货人所在地区',skin: 'msg',time: 2});return false;
				}

				if(address == ''){
					layer.open({content: '请填写街道， 小区门牌等详细地址',skin: 'msg',time: 2});return false;
				}

				layer.open({content: '该功能还未完善',skin: 'msg',time: 2});
				return false;
				if(this.loading == false){
					$.ajax({
	                    url:"{{route('w_user_posteditaddress')}}",
	                    type:'post',
	                    data:{consignee:consignee,mobile:mobile,city:city,address:address,addrid:addrid,redir:redir},
	                    dataType:'json',
	                    beforeSend:function(){
	                        obj.loading = true;
	                        $('#fr-btn-login').val('登录中...');
	                    },
	                    complete:function(xhr, ts){
	                        obj.loading = false;
	                    },
	                    success:function(res){
	                        if(res.code == 200){
	                            layer.open({type: 2,content: '登录成功,页面跳转中...'});
	                            setTimeout(function(){
	                            	if(redir == ''){
										window.location.href = "{{route('w_user_myaddress')}}";
	                            	}else{

	                            	}
	                            },1000);
	                        }else{
	                            layer.open({content: res.message,skin: 'msg',time: 3});
	                        }
	                    },
	                    error:function(){
	                        layer.open({content: '网络繁忙，请稍后再试...',skin: 'msg',time: 2});
	                    }
	                });
				}
			}
		};
	</script>

</body>
</html>