<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<style type="text/css">
		#scrollBg{ 
			width: 100%; height: 45px; line-height: 45px;background: rgba(251,55,67,0.9); 
			display: none; z-index:111; position: fixed; left: 0; top:0; 
			text-align: center; font-size: 20px; color: #fff; 
		}
	</style>
</head>
<body style="background:#fff">

	<div id="scrollBg"></div>
	<header class="aui-header-default aui-header-fixed aui-header-clear-bg " style="background:none; border-bottom:0">
		<a href="#" class="aui-header-item">
			<i class="aui-icon aui-icon-back-white" id="scrollSearchI" style="display:block"></i>
			<div id="scrollSearchDiv">
				<img src="/weixin/themes/img/user/head-2.jpg" alt="">
			</div>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class=""></div>
		</div>
		<a href="{{route('w_user_myset')}}" class="aui-header-item-icon">
			<i class="aui-icon aui-icon-Sets"></i>
		</a>
	</header>

	<section class="aui-me-content" style="padding-top:0;">
		<div class="aui-me-content-box">
			<!--<div class="aui-me-content-info"></div> 弧度背景 临时 注释  -->
			<div class="aui-me-content-list">
				<div class="aui-me-content-item">
					<div class="aui-me-content-item-head">
						<div class="aui-me-content-item-img">
							<img src="/weixin/themes/img/user/head-2.jpg" alt="">
						</div>
						<div class="aui-me-content-item-title">18798276809</div>
					</div>
					<div class="aui-me-content-item-text">
						<a href="">
							<span>0</span>
							<span>收藏</span>
						</a>
						<a href="">
							<span>0</span>
							<span>关注</span>
						</a>
						<a href="">
							<span>0</span>
							<span>足迹</span>
						</a>
						<a href="">
							<span>0</span>
							<span>分享</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="aui-me-content-order">
			<a href="my-order.html" class="aui-well aui-fl-arrow">
				<div class="aui-well-bd">我的订单</div>
				<div class="aui-well-ft">查看全部</div>
			</a>
		</div>
		<section class="aui-grid-content">
			<div class="aui-grid-row">
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-wallet"></i>
					<p class="aui-grid-row-label">待付款</p>
				</a>
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-goods"></i>
					<p class="aui-grid-row-label">待发货</p>
				</a>
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-receipt"></i>
					<p class="aui-grid-row-label">待收货</p>
				</a>
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-evaluate"></i>
					<p class="aui-grid-row-label">待评价</p>
				</a>
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-refund"></i>
					<p class="aui-grid-row-label">退货退款</p>
				</a>
			</div>
			<div class="aui-dri"></div>
			<div class="aui-grid-row">
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-invitation"></i>
					<p class="aui-grid-row-label">邀请好友</p>
				</a>
				<a href="" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-coupon"></i>
					<p class="aui-grid-row-label">优惠券</p>
				</a>
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-shares"></i>
					<p class="aui-grid-row-label">我的分享</p>
				</a>
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-help"></i>
					<p class="aui-grid-row-label">帮助中心</p>
				</a>
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-evaluates"></i>
					<p class="aui-grid-row-label">我的评价</p>
				</a>
				<!-- <a href="my-sign.html" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-signs"></i>
					<p class="aui-grid-row-label">签到领币</p>
				</a>
				<a href="my-purchase.html" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-fight"></i>
					<p class="aui-grid-row-label">我的拼团</p>
				</a>
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-recommend"></i>
					<p class="aui-grid-row-label">商品推手</p>
				</a>
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-recharge"></i>
					<p class="aui-grid-row-label">充值中心</p>
				</a>
				
				<a href="#" class="aui-grid-row-item">
					<i class="aui-icon-large aui-icon-large-sm aui-icon-problem"></i>
					<p class="aui-grid-row-label">我的问答</p>
				</a> -->
			</div>
		</section>
	</section>

	<footer class="aui-footer-default aui-footer-fixed">
		<a href="{{route('w_index_index')}}" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-home"></span>
			<span class="aui-footer-item-text">首页</span>
		</a>
		<a href="" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-class"></span>
			<span class="aui-footer-item-text">分类</span>
		</a>
		<a href="" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-find"></span>
			<span class="aui-footer-item-text">发现</span>
		</a>
		<a href="" class="aui-footer-item">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-car"></span>
			<span class="aui-footer-item-text">购物车</span>
		</a>
		<a href="" class="aui-footer-item aui-footer-active">
			<span class="aui-footer-item-icon aui-icon aui-footer-icon-me"></span>
			<span class="aui-footer-item-text">我的</span>
		</a>
	</footer>



<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        //绑定滚动条事件
        //绑定滚动条事件
        $(window).bind("scroll", function () {
            var sTop = $(window).scrollTop();
            var sTop = parseInt(sTop);
            if (sTop >= 10) {
                if (!$("#scrollBg").is(":visible")) {
                    try {
                        $("#scrollBg").slideDown();
                    } catch (e) {
                        $("#scrollBg").show();
                    }
                }
            }
            else {
                if ($("#scrollBg").is(":visible")) {
                    try {
                        $("#scrollBg").slideUp();
                    } catch (e) {
                        $("#scrollBg").hide();
                    }
                }
            }
        });
    });
</script>
</body>
</html>