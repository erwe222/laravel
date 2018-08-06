<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>我的设置</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="stylesheet" href="/weixin/layer_mobile/need/layer.css" />
</head>
<body style="background:#f0f0f0">

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">我的设置</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon aui-icon-share-pd"></i>
		</a>
	</header>

	<section class="aui-myOrder-content">
		<div class="aui-product-set">
			<a href="#" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">个人信息</div>
				<div class="aui-address-cell-ft"></div>
			</a>
			<a href="my-address.html" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">我的实名认证</div>
				<div class="aui-address-cell-ft"></div>
			</a>

			<div class="aui-dri"></div>
			<a href="{{route('w_user_modifypwd')}}" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">修改登录密码</div>
				<div class="aui-address-cell-ft"></div>
			</a>
			<a href="{{route('w_user_myaddress')}}" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">我的收货地址</div>
				<div class="aui-address-cell-ft"></div>
			</a>
			<a href="#" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">消息推送设置</div>
				<div class="aui-address-cell-ft"></div>
			</a>
			<a href="#" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">微信自动登录</div>
				<div class="aui-address-cell-ft"></div>
			</a>

			<div class="aui-dri"></div>
			<a href="#" class="aui-address-cell aui-fl-arrow aui-fl-arrow-clear" >
				<div class="aui-address-cell-bd">关于我们</div>
				<div class="aui-address-cell-ft"></div>
			</a>
		</div>
		<div class="aui-out">
			<a href="javascript:void(0)">退出当前账号</a>
		</div>
	</section>

	<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
	<script src="/weixin/layer_mobile/layer.js"></script>
	<script type="text/javascript" >
		$('.aui-out').on('click',function(){
			var index = layer.open({
			    content: '您确定要退出当前账号吗？'
			    ,btn: ['退出', '取消']
			    ,skin: 'footer'
			    ,yes: function(index){
			    	layer.close(index);
			    	window.location.href = "{{route('w_auth_logout')}}";
			        layer.open({type: 2,shadeClose: false,content: '退出中...'});
			    }
			  });
		});
	</script>

</body>
</html>