<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>金燕❤❤❤远东</title>
        <meta name="Description" Content="老婆我爱你❤❤❤❤❤❤">
        <meta name="Keywords" Content="老婆我爱你❤❤❤❤❤❤" >
        <link type="text/css" rel="stylesheet" href="/Love_files/default.css">
        <script type="text/javascript" src="/Love_files/jquery.min.js"></script>
        <script type="text/javascript" src="/Love_files/jscex.min.js"></script>
        <script type="text/javascript" src="/Love_files/jscex-parser.js"></script>
        <script type="text/javascript" src="/Love_files/jscex-jit.js"></script>
        <script type="text/javascript" src="/Love_files/jscex-builderbase.min.js"></script>
        <script type="text/javascript" src="/Love_files/jscex-async.min.js"></script>
        <script type="text/javascript" src="/Love_files/jscex-async-powerpack.min.js"></script>
        <script type="text/javascript" src="/Love_files/functions.js" charset="utf-8"></script>
        <script type="text/javascript" src="/Love_files/love.js" charset="utf-8"></script>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script src="/weixin/js/weChatJsSdk.js"></script>
    </head>
    <body>
        <div id="main">
            <div id="error">亲，您使用的浏览器无法支持即将显示的内容，请换成谷歌(<a href="http://www.google.cn/chrome/intl/zh-CN/landing_chrome.html?hl=zh-CN&brand=CHMI">Chrome</a>)或者火狐(<a href="http://firefox.com.cn/download/">Firefox</a>)浏览器哟~</div>
            <div id="wrap">
               <div id="text">
                    <div id="code">                 
                    <span class="say">我的爱人，我会牵着你的手，走到满头白发的那一天，</span><br>
                    <span class="say">我会守护你生命里的精彩，并陪伴你一路精彩下去。</span><br>
                    <span class="say">你的幸福快乐，是我一生的追求。</span><br>
                    <span class="say">我会每一天带着笑脸，和你说早安，</span><br>
                     <span class="say">我会每一晚与你道声晚安再入梦乡，</span><br>
                    <span class="say">我会带你去所有你想去的地方，</span><br>
                    <span class="say">陪你闹看你笑</span><br>
                    <span class="say">历经你生命中所有的点点滴滴。</span><br>
                    <span class="say">我期待这一生与你一起走过，</span><br>
                    <span class="say">我期待与你慢慢变老</span><br>
                    <span class="say">等我们老到哪儿也去不了，</span><br>
                    <span class="say">还能满载着一生的幸福快乐 ！</span><br>
                    <br>
                    <span class="say">我会为我们的未来撑起一片天空，</span><br>
                     <span class="say">为我们的将来担负起一生的责任，</span><br>
                      <span class="say">愿意为你去做每一件能让你开心快乐的事。</span><br>
                       <span class="say">所有我们经历的点点滴滴，</span><br>
                        <span class="say">都是我们一辈子最美的回忆。</span><br>
                         <span class="say">我愿意爱你直到老去！</span><br>
                   <br>
                    <span class="say"><span class="space"></span> </span>
                    </div>
                    <br/>
                </div>
                <br/>
                <div id="clock-box">
                    <a >@饶远东</a> 与 <a >@夏金燕</a> 在一起的
                        <div id="clock"></div>
                </div>
                <canvas id="canvas" width="1100" height="680"></canvas>
            </div>
            <audio src="/Love_files/gaobaiqiqiu.mp3" autoplay="autoplay"></audio>
        </div>

    <script>

        var config = {
            debug:false,
            appId: '{{$weixin_config["appId"]}}',
            timestamp: '{{$weixin_config["timestamp"]}}',
            nonceStr: '{{$weixin_config["nonceStr"]}}',
            signature: '{{$weixin_config["signature"]}}',
            jsApiList: [
                'checkJsApi',
                "onMenuShareTimeline",              //分享给好友
                "onMenuShareAppMessage",            //分享到朋友圈
                "onMenuShareQQ",                    //分享到QQ
                "onMenuShareWeibo",                 //分享到微博
                "checkJsApi","scanQRCode",          //如果需要调扫码  侧加入至列表
            ]
        };

        function callbacks(){
            var shareMessage = {
                title: '有一句话想对你说', 
                desc: '我的爱人，我会牵着你的手，走到满头白发的那一天，我会守护你生命里的精彩，并陪伴你一路精彩下去。',
                link: 'http://xmp.sh-jinger.com/weixin/love/xiajinyan',
                imgUrl: 'http://xmp.sh-jinger.com/upload/head-portrait/zkraWQHF5b7694a575435172557.png', 
            };

            var wxCallback = {
                success:function(){
                    alert('分享成功');
                },
                cancel:function(){
                    alert('取消分享');
                },
                fail:function(){
                    alert('分享失败');
                },
                complete:function(){

                }
            };

            weixinObj.onMenuShareQQ(shareMessage,wxCallback);

            weixinObj.onMenuShareTimeline(shareMessage,wxCallback);

            weixinObj.onMenuShareAppMessage(shareMessage,wxCallback);

            weixinObj.onMenuShareQZone(shareMessage,wxCallback);
        }

        weixinObj = new WechatSdkModel(config,callbacks);
    </script>

    <script>
    (function(){
        var canvas = $('#canvas');

        if (!canvas[0].getContext) {
            $("#error").show();
            return false;
        }

        var width = canvas.width();
        var height = canvas.height();
        
        canvas.attr("width", width);
        canvas.attr("height", height);

        var opts = {
            seed: {
                x: width / 2 - 20,
                color: "rgb(190, 26, 37)",
                scale: 2
            },
            branch: [
                [535, 680, 570, 250, 500, 200, 30, 100, [
                    [540, 500, 455, 417, 340, 400, 13, 100, [
                        [450, 435, 434, 430, 394, 395, 2, 40]
                    ]],
                    [550, 445, 600, 356, 680, 345, 12, 100, [
                        [578, 400, 648, 409, 661, 426, 3, 80]
                    ]],
                    [539, 281, 537, 248, 534, 217, 3, 40],
                    [546, 397, 413, 247, 328, 244, 9, 80, [
                        [427, 286, 383, 253, 371, 205, 2, 40],
                        [498, 345, 435, 315, 395, 330, 4, 60]
                    ]],
                    [546, 357, 608, 252, 678, 221, 6, 100, [
                        [590, 293, 646, 277, 648, 271, 2, 80]
                    ]]
                ]] 
            ],
            bloom: {
                num: 700,
                width: 1080,
                height: 650,
            },
            footer: {
                width: 1200,
                height: 5,
                speed: 10,
            }
        }

        var tree = new Tree(canvas[0], width, height, opts);
        var seed = tree.seed;
        var foot = tree.footer;
        var hold = 1;

        canvas.click(function(e) {
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            if (seed.hover(x, y)) {
                hold = 0; 
                canvas.unbind("click");
                canvas.unbind("mousemove");
                canvas.removeClass('hand');
            }
        }).mousemove(function(e){
            var offset = canvas.offset(), x, y;
            x = e.pageX - offset.left;
            y = e.pageY - offset.top;
            canvas.toggleClass('hand', seed.hover(x, y));
        });

        var seedAnimate = eval(Jscex.compile("async", function () {
            seed.draw();
            while (hold) {
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canScale()) {
                seed.scale(0.95);
                $await(Jscex.Async.sleep(10));
            }
            while (seed.canMove()) {
                seed.move(0, 2);
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
        }));

        var growAnimate = eval(Jscex.compile("async", function () {
            do {
                tree.grow();
                $await(Jscex.Async.sleep(10));
            } while (tree.canGrow());
        }));

        var flowAnimate = eval(Jscex.compile("async", function () {
            do {
                tree.flower(2);
                $await(Jscex.Async.sleep(10));
            } while (tree.canFlower());
        }));

        var moveAnimate = eval(Jscex.compile("async", function () {
            tree.snapshot("p1", 240, 0, 610, 680);
            while (tree.move("p1", 500, 0)) {
                foot.draw();
                $await(Jscex.Async.sleep(10));
            }
            foot.draw();
            tree.snapshot("p2", 500, 0, 610, 680);

            // 会有闪烁不得意这样做, (＞﹏＜)
            canvas.parent().css("background", "url(" + tree.toDataURL('image/png') + ")");
            canvas.css("background", "#ffe");
            $await(Jscex.Async.sleep(300));
            canvas.css("background", "none");
        }));

        var jumpAnimate = eval(Jscex.compile("async", function () {
            var ctx = tree.ctx;
            while (true) {
                tree.ctx.clearRect(0, 0, width, height);
                tree.jump();
                foot.draw();
                $await(Jscex.Async.sleep(25));
            }
        }));

        var textAnimate = eval(Jscex.compile("async", function () {
            var together = new Date('2018-03-01 00:00:00');
            // together.setFullYear(2018, 2, 2);
            // together.setHours(20);
            // together.setMinutes(20);
            // together.setSeconds(0);
            // together.setMilliseconds(0);

            $("#code").show().typewriter();
            $("#clock-box").fadeIn(500);
            while (true) {
                timeElapse(together);
                $await(Jscex.Async.sleep(1000));
            }
        }));

        var runAsync = eval(Jscex.compile("async", function () {
            $await(seedAnimate());
            $await(growAnimate());
            $await(flowAnimate());
            $await(moveAnimate());

            textAnimate().start();

            $await(jumpAnimate());
        }));

        runAsync().start();
    })();


    

    </script>



</body></html>