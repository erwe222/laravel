@extends('layouts.body')
@section('content')
<div class="row">
    <div class="col-xs-12">
            <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
            <div class="table-header">“最新注册域名”的搜索结果</div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
                    </table>
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
        bAutoWidth: false,
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
            {title: 'ID',data: 'id'},
            {title: '栏目',data: 'name'},
            {title: '路由',data: 'note'},
            {title: '图标',data: 'stock'},
            {title: '图标2',data: 'ship'},
            {title: '图标3',data: 'sdate'}
        ],
    });
	
    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
    
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