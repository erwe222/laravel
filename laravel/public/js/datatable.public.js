var oTableLanguage = {
    sLengthMenu: "每页显示 _MENU_ 条记录",
    sZeroRecords: "抱歉， 没有找到",
    sInfo: "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
    sInfoEmpty: "没有数据",
    sInfoFiltered: "(从 _MAX_ 条数据中检索)",
    oPaginate: {
        sFirst: "首页",
        sPrevious: "上一页",
        sNext: "下一页",
        sLast: "尾页"
    }
};

/**
 * @param object obj ajax参数
 * functon 引用回调函数
 */
function sendAjax(obj,successFuncton,errorFunction){
    var loadloging = layer.load();
    $.ajax({
        url:obj.url,
        data:obj.data,
        type:'post',
        success:function(data){
            var return_data = $.parseJSON(data);
            layer.msg(return_data.errMsg, {icon: (return_data.errCode == 201)?6:5});
            if(successFuncton != undefined){
                successFuncton();
            }
            layer.close(loadloging);
            return true;
        },
        error:function(){
            layer.msg('网络繁忙请稍候重试。。。', {icon: 5});
            if(errorFunction != undefined){
                errorFunction();
            }
            layer.close(loadloging);
            return false;
        }
    });
}

function ajaxFail(){ return layer.msg("服务器繁忙,请稍候再试...", {time:1000, icon:2})}

var MyTable = (function() {

    /*构造函数初始化配置
     *  options 自定义参数
     *  tableOptions  datatables 参数
     */
    function MyTable(options,tableOptions){
        var _this = this;

        /*默认自定义配置*/
        this.options = {
            mTableId        :   '#mytable',              /*初始化table 的 id号*/
            mSearchFormId   :   null,                    /*搜索表单id号*/
            mRefresh        :  '',
        }

        /*默认自定义配置*/
        this.tableOptions = {
            lengthChange:true,
            bFilter:false,
            pagingType:'full_numbers',
            bAutoWidth:true,
            bPaginate:true,
            paging:true,
            serverSide:true,
            sAjaxSource: "/",
            iDisplayLength:10,
            aLengthMenu: [10,20, 25, 50,100],
            oLanguage: oTableLanguage,
            fnServerData:function (sSource, aoData, fnCallback, oSettings) {
                var loadloging = layer.load();
                $.ajax({
                    url: sSource,
                    data: aoData,
                    type: 'post',
                    dataType: 'json'
                }).always(function(data){//always：不论成功与否都会执行。
                    layer.close(loadloging);
                }).done(function(data){//done：成功时执行，异常时不会执行。
                    fnCallback(data);
                }).fail(ajaxFail);
            },
            //向服务器传额外的参数
            fnServerParams: function (aoData) {
                /*判断是否存在指定一的搜索表单*/
                if(_this.options.mSearchFormId !== null){
                    var data = $(_this.options.mSearchFormId).serializeArray();
                    $.each(data,function(key,obj){
                        aoData.push({name: 'params['+obj.name+']', value:obj.value});
                    });
                }
                
                /*获取排序字段*/
                $.each(aoData,function(key,obj){
                    if(obj.name == 'iSortCol_0'){
                        aoData.push({name: 'params[orderby]', value:_this.tableOptions.aoColumns[obj.value].data});
                    }
                });
                return true;
            },
            fnInfoCallback: function ( settings, start, end, total, find_total,format ) {
                if($('#data-total')){
                    $('#data-total').text(total);
                }
                return format;
            }
        };

        /*配置信息修改和继承*/
        this.tableOptions   = $.extend(this.tableOptions, tableOptions);
        this.options  = $.extend(this.options, options);
    }
    
    MyTable.prototype.init = function(){
        var self = this;

        /*初始化table表格对象*/
        this.table = $(this.options.mTableId).DataTable(this.tableOptions);
        
        $(this.options.mRefresh).click(function(evt){
            evt.preventDefault();self.refresh();
        });
        
        /*Checkbox 行选择*/
        $(document).on('click', self.options.mTableId + ' th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox').each(function(){
                this.checked = that.checked;
                var row = $(this).closest('tr');
                (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;
            });
        }).on('click', self.options.mTableId + ' td input:checkbox' , function(){
            var row = $(this).closest('tr');
            (this.checked == true)? row.addClass('selected'): row.removeClass('selected') ;

            var checked_num = $(this).closest('table').find('tr > td:first-child input:checkbox:checked').length;
            var checkbox_num = $(this).closest('table').find('tr > td:first-child input:checkbox').length;
            
            var th_checkbox = $(self.options.mTableId + ' th input:checkbox');
            if(checked_num < checkbox_num){
                th_checkbox.attr('checked',false);
            }else if(checked_num == checkbox_num){
                th_checkbox.trigger('click');
            }
        });
    }
    
    MyTable.prototype.refresh = function(){
        this.table.draw();
    }
    
    MyTable.prototype.getRowData = function(rowIndex){
        return this.table.rows(rowIndex).data()[0];
    }

    /*获取多选框选中的行*/
    MyTable.prototype.getCheckBoxSelect = function(){
        var data = [], self = this;
        $(this.options.mTableId + " tbody input:checkbox:checked").each(function(){data.push($(this).val());});
        return data;
    }

    MyTable.prototype.save = function(obj){
        var self     = this;
        var loadloging = layer.load();
        $.ajax({
            url: obj.url,
            data: obj.data,
            type: 'post',
            dataType: 'json'
        }).always(function(){//always：不论成功与否都会执行。
            layer.close(loadloging);
        }).done(function(data){//done：成功时执行，异常时不会执行。
            layer.msg(data.errMsg, {icon:data.errCode == 201 ? 6 : 5});
            self.table.draw();
        }).fail(ajaxFail);
    }

    return MyTable;
})($)