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
                                            <th class="center">
                                                <label class="pos-rel">
                                                    <input type="checkbox" class="ace" /><span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>域名</th>
                                            <th>价格</th>
                                            <th class="hidden-480">点击</th>

                                            <th>
                                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                    更新
                                            </th>
                                            <th class="hidden-480">状态</th>

                                            <th></th>
                                        </tr>
                                </thead>

                                <tbody>
                                        <tr>
                                                <td class="center">
                                                        <label class="pos-rel">
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                        </label>
                                                </td>

                                                <td>
                                                        <a href="#">app.com</a>
                                                </td>
                                                <td>$45</td>
                                                <td class="hidden-480">3,330</td>
                                                <td>Feb 12</td>

                                                <td class="hidden-480">
                                                        <span class="label label-sm label-warning">即将到期</span>
                                                </td>

                                                <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                        </div>

                                                        
                                                </td>
                                        </tr>

                                        <tr>
                                                <td class="center">
                                                        <label class="pos-rel">
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl"></span>
                                                        </label>
                                                </td>

                                                <td>
                                                        <a href="#">base.com</a>
                                                </td>
                                                <td>$35</td>
                                                <td class="hidden-480">2,595</td>
                                                <td>Feb 18</td>

                                                <td class="hidden-480">
                                                        <span class="label label-sm label-success">注册</span>
                                                </td>

                                                <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                                <a class="blue" href="#">
                                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                </a>

                                                                <a class="green" href="#">
                                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                </a>

                                                                <a class="red" href="#">
                                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                </a>
                                                        </div>

                                                        
                                                </td>
                                        </tr>

                                        <tr>
                                                <td class="center">
                                                    <label class="pos-rel">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>

                                                <td>
                                                        <a href="#">max.com</a>
                                                </td>
                                                <td>$60</td>
                                                <td class="hidden-480">4,400</td>
                                                <td>Mar 11</td>

                                                <td class="hidden-480">
                                                    <span class="label label-sm label-warning">即将到期</span>
                                                </td>

                                                <td>
                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                        <a class="blue" href="#">
                                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                        </a>
                                                        <a class="green" href="#">
                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                        </a>
                                                        <a class="red" href="#">
                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                        </tr>
                                </tbody>
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
        aoColumns: [
          { bSortable: false },
          null, null,null, null, null,
          { bSortable: false }
        ],
        aaSorting: [],
        select: {style: 'multi'},
        oLanguage:{
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
        paginationType:"full_numbers",  
        ajax : "load",
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