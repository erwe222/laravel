(function(window, $){
    $.fn.dataTable.ext.errMode = 'throw';
    function MyTable(selector,options){
        var _this = this;
        
        this.table = null;
        
        this.Selector = selector;
        
        this.defaultOption = {
            processing: true,
            searching : false,
            autoWidth: true,
            aaSorting: [],
            select: {style: 'multi'},
            oLanguage:{
                sProcessing: "努力加载数据中...",
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
            },
            fnDrawCallback:function(){
                //加载完成触发方法
            },
            serverSide : true,
            ajax : {
                url:'/backend/menus/getmenuviewtest2',
                mothod:'get',
                data: function ( d ) {
                    d.orderBy = [];
                    $.each(d.order,function(key,obj){
                        d.orderBy.push({orderByname:d.columns[obj.column].data,sort:obj.dir});
                    });
                    d.search = d.order = d.columns = undefined;
                    console.log(d);
                }
            },
            columns: [
                {data:null,title:'<label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>',width:50,orderable:false,class:'table-checkbox',
                    render:function(data){
                        return '<label class="pos-rel"><input type="checkbox" class="ace" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                    }
                },
                {title: 'ID',data: 'id',"render": function ( data, type, row, meta ) {
                    return '<a href="'+data+'">Download</a>';
                }},
                {title: '栏目',data: 'name',name:'testname'},
                {title: '路由',data: 'note'},
                {title: '图标',data: 'stock'},
                {title: '图标2',data: 'ship'},
                {title: '图标3',data: 'sdate'},
                {title: '图标4',data: 'sdate'},
            ],
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
     * 表格刷新
     * @returns {undefined}
     */
    MyTable.prototype.refresh = function(){
        this.table.draw();
    }

    
    MyTable.prototype.select = function(){
        var _this = this;
        $(_this.Selector +' thead >tr th label input:checkbox').on('click',function(){
            var istrue = $(this).is(':checked');

            $(_this.Selector + ' td input:checkbox').each(function(){
                this.checked = istrue;
                var row = $(this).closest('tr');
                (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            });
        });

        $(document).on('click',_this.Selector +  ' td input:checkbox' , function(){
            var row = $(this).closest('tr');
            (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            var checked_num = $(_this.Selector +  ' td input:checkbox:checked').length;
            var checkbox_num = $(_this.Selector +  '  td input:checkbox').length;
            var th_checkbox = $(_this.Selector +  ' thead >tr th label input:checkbox');
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

    MyTable.prototype.getRowData = function(rowIndex){
        return this.table.rows(rowIndex).data()[0];
    }

    /*获取多选框选中的行*/
    MyTable.prototype.getCheckBoxSelect = function(){
        var data = [], self = this;
        $(this.Selector + " tbody input:checkbox:checked").each(function(){data.push($(this).val());});
        return data;
    }



    window.MyTable = MyTable;
})(window, jQuery);
