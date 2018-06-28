<div style="margin:10% auto;width:300px;height: 100px;">

	@if(count($wx_info) > 0 && isset($wx_info['nickname']))
		<span style="color: red;font-size: 28px;">您是微信用户:{{$wx_info['nickname']}}</span>
	@endif
	
    <span style="color: red;font-size: 28px;">欢迎来到 laravel 5.4</span>
</div>
