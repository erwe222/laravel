<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="format-detection" content="telephone=no, email=no"/>
	<meta charset="UTF-8">
	<title>编辑地址</title>
	<link rel="stylesheet" href="/weixin/themes/css/core.css">
	<link rel="stylesheet" href="/weixin/themes/css/icon.css">
	<link rel="stylesheet" href="/weixin/themes/css/home.css">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="/weixin/layer_mobile/need/layer.css" />
	<style>
		.m-cell {
			background-color: #FFF;
			position: relative;
			z-index: 1;
			margin-bottom: .35rem;
			height: 3rem;
			line-height: 3rem;
		}
		::-webkit-input-placeholder {color: #888;}
		:-moz-placeholder {color: #888;}
		::-moz-placeholder {color: #888;}
		:-ms-input-placeholder {color: #888;}
	</style>

</head>
<body style="background:#eee">

	<header class="aui-header-default aui-header-fixed ">
		<a href="javascript:history.back(-1)" class="aui-header-item">
			<i class="aui-icon aui-icon-back"></i>
		</a>
		<div class="aui-header-center aui-header-center-clear">
			<div class="aui-header-center-logo">
				<div class="">编辑地址</div>
			</div>
		</div>
		<a href="#" class="aui-header-item-icon"   style="min-width:0">
			<!--<i class="aui-icon aui-icon-search"></i>-->
		</a>
	</header>


	<section class="aui-myOrder-content">
		<div class="aui-prompt"><i class="aui-icon aui-prompt-sm"></i>填写您的地址信息</div>
		<div class="aui-Address-box">
			<p>
				<input class="aui-Address-box-input" type="text" placeholder="收货人姓名" id='fr-input-consignee'>
			</p>
			<p>
				<input class="aui-Address-box-input" type="text" placeholder="手机号码" id='fr-input-mobile'>
			</p>
			<p>
				<input class="aui-Address-box-input" type="text" readonly id="J_Address"  placeholder="所在地区" >
			</p>
			<p>
				<textarea class="aui-Address-box-text" placeholder="街道， 小区门牌等详细地址" rows="3" id='fr-input-address'></textarea>
			</p>
		</div>

		<div class="aui-out" onclick='obj.submit();'>
			<input  type="hidden"  id="fr-input-addrid"  value='0' />
			<input  type="hidden"  id="fr-input-redir"  value='' />
			<a href="javascript:void(0)" class="red-color" style="color:#fff">保存并使用</a>
		</div>
	</section>


	<script type="text/javascript" src="/weixin/themes/js/jquery.min.js"></script>
	<script type="text/javascript" src="/weixin/themes/js/aui.js"></script>
	<script type="text/javascript" src="/weixin/themes/js/city.js"></script>
	<script src="/weixin/layer_mobile/layer.js"></script>
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
	<script>
        /**
         * 默认调用
         */
        !function () {
            var $target = $('#J_Address');

            $target.citySelect();

            $target.on('click', function (event) {
                event.stopPropagation();
                $target.citySelect('open');
            });

            $target.on('done.ydui.cityselect', function (ret) {
                $(this).val(ret.provance + ' ' + ret.city + ' ' + ret.area);
            });
        }();
        /**
         * 设置默认值
         */
        !function () {
            var $target = $('#J_Address2');

            $target.citySelect({
                provance: '新疆',
                city: '乌鲁木齐市',
                area: '天山区'
            });

            $target.on('click', function (event) {
                event.stopPropagation();
                $target.citySelect('open');
            });

            $target.on('done.ydui.cityselect', function (ret) {
                $(this).val(ret.provance + ' ' + ret.city + ' ' + ret.area);
            });
        }();
	</script>

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