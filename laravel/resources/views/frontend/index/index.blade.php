
<!-- <script src="http://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script> -->
<div style="margin:10% auto;width:300px;height: 100px;">

	@if(count($wx_info) > 0 && isset($wx_info['nickname']))
		<span style="color: red;font-size: 28px;">您是微信用户:{{$wx_info['nickname']}}</span>
	@endif
	
    <span style="color: red;font-size: 28px;">欢迎来到 laravel 5.4</span>
    <span id="login_container"></span>
</div>
<!-- 
<script> 
var obj = new WxLogin({
	id: "login_container",
	appid: "wxed782be999f86e0e",
	scope: "snsapi_login",
	redirect_uri: "http://xmp.sh-jinger.com/front/wx/auth2",
	state: Math.ceil(Math.random()*1000),
	style: "black",
	href: ""
});
</script> -->