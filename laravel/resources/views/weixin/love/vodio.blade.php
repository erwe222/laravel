<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>用心良苦</title>
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">
	<!-- 官网地址  http://www.ckplayer.com/ -->
</head>
<body style="background:#eee">

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">视频播放</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon"></i>
		</a>
	</header>

	<section class="aui-myOrder-content">
		<div id="video" style="width:100%;height:200px;"></div>
	</section>


	<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
	<script type="text/javascript" src="/ckplayer/ckplayer.js"></script>

	<script type="text/javascript">
		var videoObject = {
			container: '#video',														//“#”代表容器的ID，“.”或“”代表容器的class
			variable: 'player',															//该属性必需设置，值等于下面的new chplayer()的对象
			flashplayer:false,															//如果强制使用flashplayer则设置成true
			poster:'/vodio/hkgip2b102z.jpg',											//封面图片
			
			video:'/vodio/C9330152A4DFC7FB2FBC3B6070E67899.mp4',						//视频地址
			/*video: [
		        ['/vodio/C9330152A4DFC7FB2FBC3B6070E67899.mp4', 'video/mp4', '中文标清', 0],
		        ['/vodio/C9330152A4DFC7FB2FBC3B6070E67899.mp4', 'video/mp4', '中文高清', 0],
		    ]*/
		    //autoplay:true,																//自动播放
		};
		var player=new ckplayer(videoObject);
	</script>

</body>
</html>