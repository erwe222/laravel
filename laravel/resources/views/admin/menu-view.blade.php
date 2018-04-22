@extends('layouts.body')
@section('content')
<div class="row" >
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
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="add" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-info btn-bold" data-type="download">
                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>下载
            </button>
            <button class="btn btn-white btn-warning btn-bold" data-type="delete">
                <i class="ace-icon fa fa-trash-o bigger-120 orange"></i>删除
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh">
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
</div>

<div id="orderinfo" style="width: 100%;"></div>
@endsection

@push('scripts')
<script>
easyloader.load('datagrid', function(){ // 加载指定模块 
    $("#orderinfo").datagrid({
        url: '/admin/menuviewtest2',
        loadMsg: '正在载入数据,请耐心等待...',
        columns: [[//表头标题栏
            {field: 'id', title: '订单ID号', width: 100, halign: 'center',height:30},
            {field: 'order_pre_no', title: '旧订单号', align: 'center',width: 150,sortable:true},
            {field: 'logistics_name', title: '快递公司', align: 'center',width: 150,sortable:true},
            {field: 'shipping_price', title: '快递价格', align: 'center',sortable:true},
        ]],
        fit: false,
        striped: true,
        pagination: true,
        pageSize: 10,
        pageList: [10, 20, 30, 50],
        rownumbers : false,//行号
        singleSelect: false,
        method:'get',
        onDblClickRow: function (index, row) {

        },
        queryParams:{testname:1111111111},
        onLoadSuccess: function (data) {
            if (data.rows.length === 0) {
                var body = $(this).data().datagrid.dc.body2;
                body.find('table tbody').append('<tr><td width="' + body.width() + '" style="height: 25px; text-align: center;font-weight:bold;color:red;" colspan="14">数据库中暂无数据...</td></tr>');
            }
        }
    });
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });
    
    var objClass = {
        add:function(){
            window.parent.mainObj.gritterAdd();
        },
        download:function(){
            alert('download');
        },
        delete:function(){
            alert('delete');
        },
        refresh:function(){
            $("#orderinfo").datagrid('load',{
                keywords: 'asdf',
                start_time: 'ssssssssssss',
                end_time: 'asdfasd'
            });
        }
    };
    
    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
    
});
</script>
@endpush