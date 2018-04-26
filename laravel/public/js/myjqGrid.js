(function(window, $){
    function MyGrid(options){
        var _this = this;
        
        /*默认自定义配置*/
        this.options = {
            selector:{
                gridSelector:options.selector.gridSelector,
                pagerSelector:options.selector.pagerSelector,
            },
        }
 
        this.defaultOption = {
            multiselect: true,
            //multikey: "ctrlKey",
            //multiboxonly: true,
            rownumbers:false,//若此属性为true，表格左侧将添加一用于显示行数（从1开始）的列
            altRows: true,
            autowidth: true,
            recordpos:'right',
            datatype: "json",
            viewrecords : true,//是否在浏览导航栏显示记录总数
            pager : this.options.selector.pagerSelector,
            subGridOptions : {
                plusicon : "ace-icon fa fa-plus center bigger-110 blue",
                minusicon  : "ace-icon fa fa-minus center bigger-110 blue",
                openicon : "ace-icon fa fa-chevron-right center orange"
            },
            subGridRowExpanded: function (subgridDivId, rowId) {},
            jsonReader:{ //server返回Json解析设定  
                root: "data",
                page: "page",  
                total: "totalPage",  
                records: "totalCount",  
                repeatitems: false,  
            },
            postData:{},
            loadComplete : function() {
                var table = this;
                setTimeout(function(){
                    _this.updateActionIcons(table);
                    _this.updatePagerIcons(table);
                    _this.enableTooltips(table);
                }, 0);
            },
            loadError: function(xhr,status,error){
                alert(status + " loading data of " + $(this).attr("id") + " : " + error );
            }
        }

        this.defaultOption = $.extend(this.defaultOption, options.myGrid);
        this.meGridTab = null;
    }
    
    MyGrid.prototype.getGridSelector = function(){
        return this.options.selector.gridSelector;
    }
    
    MyGrid.prototype.getPagerSelector = function(){
        return this.options.selector.pagerSelector;
    }

    /**
     * 初始化数据表格
     * @returns {undefined}
     */
    MyGrid.prototype.init = function(){
            var that = this;
            var parent_column = $(that.getGridSelector()).closest('[class*="col-"]');

            $(window).on('resize.jqGrid', function () {
                $(that.getGridSelector()).jqGrid( 'setGridWidth', parent_column.width() );
            })

            $(document).on('settings.ace.jqGrid' , function(ev, event_name, collapsed) {
                if( event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed' ) {
                    setTimeout(function() {
                            $(that.getGridSelector()).jqGrid( 'setGridWidth', parent_column.width() );
                    }, 20);
                }
            });

            $.extend($.jgrid.defaults,{
                    emptyrecords: "Nothing to display",
                    loadtext: "数据加载中...",  
                    pgtext : "第{0}页 , 共计 {1} 页",
                    recordtext: "显示{0} ～ {1}  , 共计{2}条记录",
                }
            );


            this.meGridTab = $(that.getGridSelector()).jqGrid(that.defaultOption);

            $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size

            $(that.getGridSelector()).jqGrid('navGrid',this.getPagerSelector(),{
                edit: false,
                editicon : 'ace-icon fa fa-pencil blue',
                add: false,
                addicon : 'ace-icon fa fa-plus-circle purple',
                del: true,
                delicon : 'ace-icon fa fa-trash-o red',
                search: false,
                searchicon : 'ace-icon fa fa-search orange',
                refresh: true,
                refreshicon : 'ace-icon fa fa-refresh green',
                view: false,
                viewicon : 'ace-icon fa fa-search-plus grey',
            });

            $(document).one('ajaxloadstart.page', function(e) {
                $.jgrid.gridDestroy(that.getGridSelector());
                $('.ui-jqdialog').remove();
            });
    }
    
    //switch element when editing inline
    MyGrid.prototype.aceSwitch = function( cellvalue, options, cell ) {
        setTimeout(function(){
            $(cell) .find('input[type=checkbox]')
            .addClass('ace ace-switch ace-switch-5')
            .after('<span class="lbl"></span>');
        }, 0);
    }

    //使DatePicker
    MyGrid.prototype.pickDate = function( cellvalue, options, cell ) {
        setTimeout(function(){
            $(cell) .find('input[type=text]').datepicker({format:'yyyy-mm-dd' , autoclose:true}); 
        }, 0);
    }
    
    //行内编辑
    MyGrid.prototype.style_edit_form = function(form) {
            //enable datepicker on "sdate" field and switches for "stock" field
            form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})

            form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');

            //update buttons classes
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
            buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

            buttons = form.next().find('.navButton a');
            buttons.find('.ui-icon').hide();
            buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
            buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');		
    }

    //删除一行
    MyGrid.prototype.style_delete_form = function(form) {
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
            buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
    }

    //查询过滤
    MyGrid.prototype.style_search_filters = function(form) {
            form.find('.delete-rule').val('X');
            form.find('.add-rule').addClass('btn btn-xs btn-primary');
            form.find('.add-group').addClass('btn btn-xs btn-success');
            form.find('.delete-group').addClass('btn btn-xs btn-danger');
    }

    //查询表单
    MyGrid.prototype.style_search_form = function(form) {
            var dialog = form.closest('.ui-jqdialog');
            var buttons = dialog.find('.EditTable')
            buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
            buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
            buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
    }

    //删除之前的回调方法
    MyGrid.prototype.beforeDeleteCallback = function(e) {
            var form = $(e[0]);
            if(form.data('styled')) return false;

            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            MyGrid.prototype.style_delete_form(form);

            form.data('styled', true);
    }

    //编辑一行之前的回调方法
    MyGrid.prototype.beforeEditCallback = function(e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            MyGrid.prototype.style_edit_form(form);
    }

    //unlike navButtons icons, action icons in rows seem to be hard-coded
    //you can change them like this in here if you want
    MyGrid.prototype.updateActionIcons = function(table) {
        var replacement = {
                'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
                'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
                'ui-icon-disk' : 'ace-icon fa fa-check green',
                'ui-icon-cancel' : 'ace-icon fa fa-times red'
        };
        $(table).find('.ui-pg-div span.ui-icon').each(function(){
            var icon = $(this);
            var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
            if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
        });
    }

    //replace icons with FontAwesome icons like above
    MyGrid.prototype.updatePagerIcons = function(table) {
        var replacement = 
        {
                'ui-icon-seek-first' : 'ace-icon fa fa-angle-double-left bigger-140',
                'ui-icon-seek-prev' : 'ace-icon fa fa-angle-left bigger-140',
                'ui-icon-seek-next' : 'ace-icon fa fa-angle-right bigger-140',
                'ui-icon-seek-end' : 'ace-icon fa fa-angle-double-right bigger-140'
        };
        $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
            var icon = $(this);
            var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

            if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
        });
    }

    MyGrid.prototype.enableTooltips = function(table){
        $('.navtable .ui-pg-button').tooltip({container:'body'});
        $(table).find('.ui-pg-div').tooltip({container:'body'});
    }

    /**
     * 刷新表格数据
     * @returns {undefined}
     */
    MyGrid.prototype.refresh = function(obj){
        $(this.getGridSelector()).jqGrid('setGridParam',obj).trigger("reloadGrid");
    }
    
    MyGrid.prototype.search = function(){
        $(this.getGridSelector()).jqGrid('setGridParam',{page:1,postData:{'test':'1','test2':'1','test3':'1','test4':'1'}}).trigger("reloadGrid");
    }
    
    /**
     * 获取选择多行的id
     * @param {type} rowId
     * @returns {unresolved}
     */
    MyGrid.prototype.getSelectRowsId = function(){
        return $(this.getGridSelector()).jqGrid('getGridParam','selarrrow');
    }
    
    /**
     * 获取选择的行的数据，只要传入rowId即可
     * @param {type} rowId
     * @returns {unresolved}
     */
    MyGrid.prototype.getRowData = function(rowId){
        return $(this.getGridSelector()).jqGrid('getRowData',rowId);
    }
    
    /**
     * 获取当前表格的所有数据
     * @returns {unresolved}
     */
    MyGrid.prototype.getAllData = function() {
        return $(this.getGridSelector()).jqGrid('getRowData');
    }
    

    window.myGrid = MyGrid;
})(window, jQuery);
