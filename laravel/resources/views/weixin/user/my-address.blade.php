<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>收货地址</title>
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="iTunesArtwork@2x.png" sizes="114x114" rel="apple-touch-icon-precomposed">

</head>
<body style="background:#eee">

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">收货地址</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<i class="aui-icon"></i>
		</a>
	</header>

	<section class="aui-myOrder-content">
		<div class="aui-Address-box">
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p>李嘉桦</p>
				</div>
				<div class="aui-Address-box-item-ft">
					<p>185****8899</p>
				</div>
			</div>
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p>北京市海淀区西三环北路22号中航大厦C座209</p>
				</div>
			</div>
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p><input type="checkbox" class="check goods-check goodsCheck" checked="checked" style="background-size: 17px 17px;"> <em style="padding-left:24px;">默认地址</em></p>
				</div>
				<div class="aui-Address-box-item-ft">
					<p>删除</p>
				</div>
			</div>
		</div>
		<div class="aui-Address-box">
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p>李嘉桦</p>
				</div>
				<div class="aui-Address-box-item-ft">
					<p>185****8899</p>
				</div>
			</div>
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p>北京市朝阳区幸福小区3单元4门402</p>
				</div>
			</div>
			<div class="aui-Address-box-item">
				<div class="aui-Address-box-item-bd">
					<p><input type="checkbox" class="check goods-check goodsCheck"  style="background-size: 17px 17px;"> <em style="padding-left:24px;">默认地址</em></p>
				</div>
				<div class="aui-Address-box-item-ft">
					<p>删除</p>
				</div>
			</div>
		</div>
		<div class="aui-out">
			<a href="{{route('w_user_editaddress')}}">新建收货地址</a>
		</div>
	</section>


	<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
	<script type="text/javascript" src="/weixin/themes/js/aui.js"></script>
	<script type="text/javascript" >
        /**
         * Javascript API调用Tab
         */
        !function ($) {
            var $tab = $('#J_Tab');

            $tab.tab({
                nav: '.tab-nav-item',
                panel: '.tab-panel-item',
                activeClass: 'tab-active'
            });

			/*
			 $tab.find('.tab-nav-item').on('open.ydui.tab', function (e) {
			 console.log('索引：%s - [%s]正在打开', e.index, $(this).text());
			 });
			 */

            $tab.find('.tab-nav-item').on('opened.ydui.tab', function (e) {
                console.log('索引：%s - [%s]已经打开了', e.index, $(this).text());
            });
        }(jQuery);
	</script>

</body>
</html>