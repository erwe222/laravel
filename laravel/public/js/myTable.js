(function(window, $){
    var oLanguage = {
        sProcessing: "加载数据中...",
        sLengthMenu: "每页显示 _MENU_ 条记录",
        sZeroRecords: "抱歉， 没有找到",
        sInfo: "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
        sInfoEmpty: "没有数据",
        sInfoFiltered: " (共 _MAX_ 条数据)",
        oPaginate: {
            sFirst: "首页",
            sPrevious: "上一页",
            sNext: "下一页",
            sLast: "尾页"
        }
    }

    $.fn.dataTable.ext.errMode = 'throw';

    function MyTable(selector,options,url){
        var _this = this;
        
        //table 实例化对象
        this.table = null;
        
        //table Id选择器
        this.Selector = selector;
        
        //查询参数
        this.searchParams = [];

        delete options.fnDrawCallback;
        
        //处理多选框
        this.checkBoxAll = _this.Selector.substring(1,_this.Selector.length)+'-checkbox';
        $.each(options.columns,function(key,obj){
            if(obj.checkbox){
                options.columns[key].title = '<label class="pos-rel"><input type="checkbox" class="ace" id="'+_this.checkBoxAll+'" /><span class="lbl"></span></label>';
            }
        });
        
        //table 初始化默认参数
        this.defaultOption = {
            scrollX: true,
            serverSide : true,
            paging:true,
            processing: true,
            searching : false,
            autoWidth: true,
            aaSorting: [],
            select: {style: 'multi'},
            oLanguage:oLanguage,
            fnDrawCallback:function(e){
            	//数据加载成功放回回调方法
                if(e.json.code != undefined && e.json.code != 200){
                    layer.msg('加载失败...'+e.json.code);
                }

                if(e.json.recordsFiltered == 0){
                    $('.dataTables_empty').css('color','red');
                }
                
                $('#'+_this.checkBoxAll).attr('checked',false);

                if(options.customCallback != undefined){
                    //自定义回调函数
                    options.customCallback(e);
                }
            },
            ajax : {
                url:url,
                mothod:'get',
                dataType : "json",
                data: function (d) {
                    d.orderBy = [];
                    $.each(d.order,function(key,obj){
                        d.orderBy.push({orderByname:d.columns[obj.column].data,sort:obj.dir});
                    });

                    //附加查询参数
                    d.search = _this.searchParams;
                    delete d.order;
                    delete d.columns;
                    
                    $(_this.Selector+'_processing').css('zIndex',999999999).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-120"></i>&nbsp;加载数据中...');

                    // var obj = {
                    //     orderBy:null,
                    //     sort:null,
                    //     start:d.start,
                    //     length:d.length,
                    //     draw:d.draw
                    // };

                    // if(d.order.length > 0){
                    //     obj.orderBy = d.columns[d.order["0"].column].data;
                    //     obj.sort = d.order["0"].dir;
                    // }

                    // return $.extend(obj, _this.searchParams);
                },
                error:function(XMLHttpRequest, textStatus, errorThrown){
                    //加载失败回调方法
                    $(_this.Selector).parent().find('.dataTables_processing').css('display','none');

                    throwError(XMLHttpRequest, textStatus, errorThrown);
                }
            }
        }

        this.options = $.extend(this.defaultOption, options);
    }

    /**
     * table 初始化方法
     * @returns {undefined}
     */
    MyTable.prototype.init = function (){
        
        
        this.table = $(this.Selector).DataTable(this.options);

        this.select();
    }

    /**
     * 设置搜索参数
     * @param {object} params
     * @returns {undefined}
     */
    MyTable.prototype.setSearchParams = function (params){
        var data = [];

        $.each(params,function(key,val){
            data.push({name: key, value:val});
        });

        this.searchParams = data;
    }
    
    /**
     * 表格刷新
     * @returns {undefined}
     */
    MyTable.prototype.refresh = function(){
        this.table.draw();
    }

    /**
     * 多选框设置
     * @returns {undefined}
     */
    MyTable.prototype.select = function(){
        var _this = this;
        $(document).on('click','#' + this.checkBoxAll, function(){
            var istrue = $(this).is(':checked');
            $(_this.Selector + ' td input:checkbox').each(function(){
                this.checked = istrue;
                var row = $(this).closest('tr');
                (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            });
        });
        
        $(document).on('click',this.Selector +  ' thead >tr th label input:checkbox' , function(){
            var istrue = $(this).is(':checked');
            $(_this.Selector + ' td input:checkbox').each(function(){
                this.checked = istrue;
                var row = $(this).closest('tr');
                (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            });
        });

        $(document).on('click',this.Selector +  ' td input:checkbox' , function(){
            var row = $(this).closest('tr');
            (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            var checked_num = $(_this.Selector +  ' td input:checkbox:checked').length;
            var checkbox_num = $(_this.Selector +  '  td input:checkbox').length;
            var th_checkbox = $('#'+_this.checkBoxAll);
            if(checked_num < checkbox_num){
                th_checkbox.attr('checked',false);
            }else if(checked_num == checkbox_num){
                th_checkbox.trigger('click');
            }
        });

        _this.table.on( 'select', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                if($( _this.table.row( index ).node() ).find('input:checkbox').is(':checked')){
                    $( _this.table.row( index ).node() ).addClass('selected');
                    _this.table.row(index).deselect();
                }else{
                    $( _this.table.row( index ).node() ).removeClass('selected');
                }
            }
            $('.select-info').css('display','none');
        }).on( 'deselect', function ( e, dt, type, index ) {
            if ( type === 'row' ) {
                if($( _this.table.row( index ).node() ).find('input:checkbox').is(':checked')){
                    $( _this.table.row( index ).node() ).addClass('selected');
                }else{
                    $( _this.table.row( index ).node() ).removeClass('selected');
                }
            }
            $('.select-info').css('display','none');
        });
    }
    
    /**
     * 获取指定行数据
     * @returns {undefined}
     */
    MyTable.prototype.getRowData = function(rowIndex){
        var data = this.table.rows(rowIndex).data();
        return data[0];
    }

    /**
     * 获取多选框选中的行
     * @returns {undefined}
     */
    MyTable.prototype.getCheckBoxSelect = function(){
        var data = [], self = this;
        $(this.Selector + " tbody input:checkbox:checked").each(function(){
        	data.push($(this).val());
        });
        return data;
    }

    /**
     * 获取选择中的多行数据
     * @returns {undefined}
     */
    MyTable.prototype.getCheckRowsData = function(){
        return this.table.rows('.selected').data();
    }

    window.MyTable = MyTable;
})(window, jQuery);
