@extends('layouts.body')
@section('content')
<style>
    #example{  
    width: 100% !important;  
}  
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <label for="search-iframe-10" class="sr-only">ID</label>                
                    <input type="text" id="search-id" name="params[id]" class="form-control" title="ID" placeholder="请输入ID">
                </div>
                <div class="form-group">
                    <label for="search-iframe-10" class="sr-only">名称</label>                
                    <input type="text" id="search-name" name="params[name]" class="form-control" title="名称" placeholder="请输入名称">             
                </div> 
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
            </form>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
            <div class="table-header">数据表标题</div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover" ></table>
                </div>
        </div>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/ace-asstes/js/dataTables.buttons.min.js"></script>
<script src="/ace-asstes/js/buttons.flash.min.js"></script>
<script src="/ace-asstes/js/buttons.html5.min.js"></script>
<script src="/ace-asstes/js/buttons.print.min.js"></script>
<script src="/ace-asstes/js/buttons.colVis.min.js"></script>
<script src="/ace-asstes/js/dataTables.select.min.js"></script>
<script>
$(function($) {
    var myTable = $('#dynamic-table').DataTable( {
        searching : false,
//        bAutoWidth: true,
        aaSorting: [],
        select: {style: 'multi'},
        oLanguage:{
            sProcessing: "努力加载数据中...",
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
        },
        processing : true,  
        serverSide : true,
        "sScrollX":"100%", 
        ajax : {
            url:'/admin/getmenuslistdata',
            mothod:'post',
        },
        columns: [
            {data:null,title:'<label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>',width:30,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: 'ID',data: 'id',width:50},
            {title: '栏目',data: 'name',width:100},
            {title: '路由',data: 'note',width:100},
            {title: '图标',data: 'stock',width:100},
            {title: '图标2',data: 'ship',width:100},
            {title: '图标3',data: 'sdate',width:100},
            {title: '图标4',data: 'sdate',width:100},
            
        ],
    });
    
    $('#grid-search-form').on('click',function(){
        myTable.draw();
    });
	
//    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
    
    myTable.on( 'select', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
        }
    });
    myTable.on( 'deselect', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
        }
    });

    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

    //全选和不全选
    $('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header
        $('#dynamic-table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) myTable.row(row).select();
            else  myTable.row(row).deselect();
        });
    });

    //单选
    $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
        var row = $(this).closest('tr').get(0);
        if(this.checked) myTable.row(row).deselect();
        else myTable.row(row).select();
    });
})
</script>
@endpush