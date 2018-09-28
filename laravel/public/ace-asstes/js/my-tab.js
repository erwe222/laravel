(function(window, $){
    
    function MyTab(ops){
        this.scrollSetp         = 30;          //menu左右按钮每次滑动的像素
        this.operationWidth     = 90;          //menu操作按钮的总宽度
        this.leftOperationWidth = 30;          //左侧按钮的宽度
        this.animatSpeed        = 150;         //切换动画速度

        this.defaultPageIndex   = ops;
        this.currentPageIndex   = {};
        this.keys               = window.baseConfig.userkeys;         //选项卡缓存标识
    }

     /**
     * 添加选项卡
     * @param ops
     */
    MyTab.prototype.addTab = function (ops) {
        var _this = this;

        var ops = {
            href:ops.href,
            title:ops.title,
            icon:ops.icon,
            index:ops.index,
            lock:ops.lock
        }

        //检查选项卡是否已打开
        if(!this.isExist(ops)){
            //创建menu,绑定点击事件
            var iconClass = 'ace-icon glyphicon glyphicon-remove';
            if(ops.lock == true){
                iconClass = 'ace-icon fa fa-lock';
            }
            var iel = $("<i>", {"class": iconClass+" my-tab-nav-close" }).bind("click",function(){
                if(ops.lock == false){
                    _this.closeTab(ops);
                }
                
                event.stopPropagation();
            });

            
            var html ='<i class="'+ops.icon+'"></i><span >'+ops.title+'&nbsp;</span>';
            $("<li>", {
                "class":"tab-nav-li",
                "html": html,
                "href": "javascript:void(0);",
                "data-href": ops.href,
                "data-title": ops.title,
                "data-icon":ops.icon,
                "data-index":ops.index,
                "data-lock":ops.lock
            }).bind("click", function () {
                _this.activeTab(ops);
            }).append(iel).appendTo("#my-tab-nav-ul").hover(function(){
                $(this).find('.my-tab-nav-close').css('color','red');
            },function(){
                $(this).find('.my-tab-nav-close').css('color','#ccc');
            });

            var html2 = '<div class="col-xs-12"><h3 class="smaller lighter" style="text-align: center;"><i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>&nbsp;页面加载中请稍等...</h3></div>';

            // //创建iframe
            var myiframe = $("<iframe>", {
                // "class": "active-iframe",
                "data-href": ops.href,
                "data-title": ops.title,
                "data-icon":ops.title,
                "data-index":ops.index,
                "data-lock":ops.lock,
                'frameborder':0,
                src: ops.href
            }).bind("load", function () {
                $(this).prev().hide();
            });

            $("<div>", {
                "class":"show_iframe",
                "html": html2,
                "href": "javascript:void(0);",
                "data-href": ops.href,
                "data-title": ops.title,
                "data-icon":ops.icon,
                "data-index":ops.index,
                "data-lock":ops.lock
            }).append(myiframe).appendTo("#my-iframe-box");


            //创建选项卡下拉框
            $("<li>", {
                "class":'tab-nav-select-li',
                "data-href": ops.href,
                "data-title": ops.title,
                "data-icon":ops.icon,
                "data-index":ops.index,
                "data-lock":ops.lock
            }).append($("<span>", {'html':'<i class="'+ops.icon+'"></i>&nbsp;'+ops.title})).appendTo("#tab-nav-select > ul").bind("click", function () {
                _this.activeTab(ops);
                $('#tab-nav-select-btn').find('span').removeClass('fa-caret-up').addClass('fa-caret-down');
                $('#tab-nav-select').hide();
            });

            this.addTabLog(ops);

            _this.setCache(ops);
        }

        //激活选项卡
        _this.activeTab(ops);
    }


    /**
     * 检测选项卡是否已打开
     * @param ops
     */
    MyTab.prototype.isExist = function (ops) {
        var selDom = $("#my-tab-nav-ul li[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']");
        if (selDom.length === 0) {
            return false;
        }
        return true;
    }

    /**
     * 选中选项卡
     * @param ops
     */
    MyTab.prototype.activeTab = function (ops) {
        //激活选项卡
        $("#my-tab-nav-ul li.tab-nav-active").removeClass("tab-nav-active");
        $("#my-tab-nav-ul li[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").addClass("tab-nav-active");

        $('.show_iframe').addClass("hidden");
        $(".show_iframe[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").removeClass("hidden");
        $(".show_iframe[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").show();
        
        $('.tab-nav-select-li').removeClass("tab-nav-select-active");
        $(".tab-nav-select-li[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").addClass("tab-nav-select-active");

        this.addTabLog(ops);
    }

    MyTab.prototype.addTabLog = function (ops) {
        this.currentPageIndex  = ops;
    }

    /**
     * 关闭选项卡
     * @param ops
     */
    MyTab.prototype.closeTab = function (ops) {

        var obj = $("#my-tab-nav-ul li[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']");

        this.remCache(ops);

        if(obj.hasClass('tab-nav-active')){
            var v = this.getCache();
            this.activeTab(v[v.length - 1]);
        }

        //移除选项卡
        obj.remove();

        //移除iframe
        $(".show_iframe[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").remove();

        //移除选项卡下拉框
        $(".tab-nav-select-li[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']").remove();        
    }

    MyTab.prototype.setIframeHeight = function(height){
        var iframe_top = $('#my-iframe-box').position().top;
        var nav_box    = $('#breadcrumbs').offset().top;
        if(window.innerWidth > 992){
           //$('#my-iframe-box').css('top', '40px');
        }else{
            $('#my-iframe-box').css('top', '0px');
        }

        if(window.innerWidth < 300){
            alert('屏幕别再小了再小就看不见了');
        }

        var w_height = window.innerHeight - $('#my-iframe-box').position().top;
        $('#my-iframe-box').css('height',w_height+'px');
    }

    /**
     * 初始化选项卡
     * @param ops
     */
    MyTab.prototype.init = function () {
        var _this = this;

        this.setIframeHeight();

        //窗口改变触发事件
        $(window).resize(function() {
            _this.setIframeHeight();
        });

        //左滑动
        $('#left-slide').on('click',function(){
            var left = $('#my-tab-nav-box').position().left;


            var list = $('#my-tab-nav-ul').children();
            var widths = 0;
            for(var i=0;i< list.length;i++){
                var width = list[i].clientWidth;
                widths = widths + width;
            }

            var my_tab_box = $('#my-tab-box').width() - 315;
            if(my_tab_box > widths){
                return false;
            }else{
                var left_abs = Math.abs(left);
                var w = left_abs + my_tab_box;
                if(w > widths){
                    return false;
                }
            }


            $('#my-tab-nav-box').css('left',left - _this.scrollSetp);
        });

        //右滑动
        $('#right-slide').on('click',function(){
            var left = $('#my-tab-nav-box').position().left;
            if(left >= 15){
                return false;
            }
            $('#my-tab-nav-box').css('left',left + _this.scrollSetp);
        });

        $('#tab-caozuo').on('click',function(){
            var X = $(this).offset().top;
            var Y = $(this).offset().left;

            var h= $(this).height;
            var w= $(this).width;
            if($(this).find('span').hasClass('fa-caret-down')){
                $(this).find('span').removeClass('fa-caret-down').addClass('fa-caret-up');
                $('#tab-caozuo-select').css('top',X + 30).css('right',18).show();
            }else{
                $(this).find('span').removeClass('fa-caret-up').addClass('fa-caret-down');
                $('#tab-caozuo-select').css('top',X + 30).css('right',18).hide();
            }

            $('#tab-nav-select-btn').find('span').addClass('fa-caret-down').removeClass('fa-caret-up');
            $('#tab-nav-select').hide();
        });

        $('#tab-nav-select-btn').on('click',function(){

            var html = '';
            var X = $(this).offset().top;
            var Y = $(this).offset().left;
            
            var h= $(this).height;
            var w= $(this).width;
            if($(this).find('span').hasClass('fa-caret-down')){
                $(this).find('span').removeClass('fa-caret-down').addClass('fa-caret-up');
                $('#tab-nav-select').css('top',X + 30).css('right',90).show();
            }else{
                $(this).find('span').removeClass('fa-caret-up').addClass('fa-caret-down');
                $('#tab-nav-select').css('top',X + 30).css('right',90).hide();
            }
            $('#tab-caozuo').find('span').addClass('fa-caret-down').removeClass('fa-caret-up');
            $('#tab-caozuo-select').hide();
        });


        $('#tab-caozuo-select li').on('click',function(){
            var action = $(this).data('action');
            switch(action){
                case 'refresh':
                    _this.refresh();
                  break;
                case 'remove':
                	_this.closeTabCurrent();
                  break;
                case 'removeOther':
                    _this.closeTabOther();
                  break;
                case 'removeAll':
                	_this.closeTabAll();
                  break;
                case 'refreshAll':
                    _this.refreshAll();
                  break;
            }

            $('#tab-caozuo').find('span').addClass('fa-caret-down').removeClass('fa-caret-up');
            $('#tab-caozuo-select').hide();
        });

        var tabs = this.getCache();
        if(sessionStorage.getItem('tab-cache-switch' + window.baseConfig.userkeys) == 1){
            $.each(tabs,function(k,ops){
                _this.addTab(ops);
            });
        }else{
            this.addTab(this.defaultPageIndex);
        }
    }

    //刷新当前页面
    MyTab.prototype.refresh = function(){
        var ops = this.currentPageIndex
        var obj = $("iframe[data-href='" + ops.href + "'][data-index='" + ops.index + "'][data-title='" + ops.title + "']");
        obj.prev().show();
        obj.attr("src",ops.href).bind('load',function(){
            $(this).prev().hide();
        });
    }

    //关闭当前页面
    MyTab.prototype.closeTabCurrent = function(){
    	if(this.currentPageIndex.lock == false){
			this.closeTab(this.currentPageIndex);
    	}
    }

    //关闭其它页面
    MyTab.prototype.closeTabOther = function(){
		var _this = this;
    	$('.tab-nav-li').each(function(){
    		if($(this).data('lock') == false){
    			var ops = _this.getOps($(this));
    			if(ops.href != _this.currentPageIndex.href || ops.title != _this.currentPageIndex.title || ops.index != _this.currentPageIndex.index){
    				_this.closeTab(_this.getOps($(this)));
    			}
    		}
    	});
    }

    //关闭所有页面
    MyTab.prototype.closeTabAll = function(){
    	var _this = this;
    	$('.tab-nav-li').each(function(){
    		if($(this).data('lock') == false){
				_this.closeTab(_this.getOps($(this)));
    		}
    	});
    }

    //最外层框架
    MyTab.prototype.refreshAll = function(){
    	window.location.reload();
    }

    MyTab.prototype.getOps = function(jQueryObj){
    	return {
            href:jQueryObj.data('href'),
            title:jQueryObj.data('title'),
            icon:jQueryObj.data('icon'),
            index:jQueryObj.data('index'),
            lock:jQueryObj.data('lock')
        }
    }

    //获取选项卡缓存
    MyTab.prototype.getCache = function(){
        return JSON.parse(sessionStorage.getItem(this.keys));
    }

    //设置选项卡缓存
    MyTab.prototype.setCache = function(Obj){
        var value = this.getCache();
        if(value == '' || value == null){
            value = [];
            value.push(Obj);
        }else{
            var num = 0;
            $.each(value,function(k,v){
                if(v.href == Obj.href && v.title == Obj.title && v.icon == Obj.icon && v.index == Obj.index && v.lock == Obj.lock){
                    num++;
                }
            });

            if(num == 0){
                value.push(Obj);
            }
        }
        
        sessionStorage.setItem(this.keys,JSON.stringify(value));
    }

    //设置选项卡缓存
    MyTab.prototype.remCache = function(Obj){
        var value = this.getCache();
        var tmparr = [];
        $.each(value,function(k,v){
            if(v.href == Obj.href && v.title == Obj.title && v.icon == Obj.icon && v.index == Obj.index && v.lock == Obj.lock){
                
            }else{
                tmparr.push(v);
            }
        });

        sessionStorage.setItem(this.keys,JSON.stringify(tmparr));
    }

    window.MyTab = MyTab;
})(window, jQuery);
