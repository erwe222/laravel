@extends('layouts.body')
@section('content')
<div class="row" >
    <div class="col-xs-12">
        <div class="alert alert-info" >
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

<div id="dialog-message" class="hide" >
    <p>
            这是用于显示信息的默认对话框。 对话窗口可以移动，调整大小，并用'x'图标关闭。
    </p>

    <div class="hr hr-12 hr-double"></div>

    <p>
            目前已使用
            <b>36％的存储空间</b>.
    </p>
</div>
@endsection

@push('scripts')
<script>
easyloader.load('datagrid', function(){ // 加载指定模块 
    $("#orderinfo").datagrid({
        url: '/admin/getmenuslistdata',
        loadMsg: '正在载入数据,请耐心等待...',
        columns: [[//表头标题栏
            {field: 'id', title: 'ID', width: 10, align: 'center',checkbox:true},
            {field: 'parent_id', title: '父ID', align: 'center',width: 50},
            {field: 'name', title: '菜单名', align: 'center',width: 100},
            {field: 'url', title: '菜单地址', align: 'center',width: 120},
            {field: 'type', title: '菜单类型', align: 'center'},
            {field: 'icon', title: '菜单图标', width: 100},
            {field: 'status', title: '菜单状态', align: 'center',width: 100},
            {field: 'created_time', title: '菜单添加时间', align: 'center',width: 120,sortable:true},
            {field: 'updated_time', title: '菜单修改时间', align: 'center',sortable:true}
        ]],
        fit: false,
//         fitColumns:true,
//        striped: true,
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
                body.find('table tbody').append('<tr><td width="' + body.width() + '" style="height: 100px; text-align: center;font-weight:bold;color:red;" colspan="4">数据库中暂无数据...</td></tr>');
            }
        }
    });
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });
    
    var objClass = {
        add:function(){
            
            $( "#dialog-message" ).removeClass('hide').dialog({
                modal: true,
                title: "<div class='widget-header widget-header-small'><h4 class='smaller'><i class='ace-icon fa fa-check'></i> jQuery UI 对话框</h4></div>",
                title_html: true,
                width:600,
                top:30,
                position :'relative',
                buttons: [ 
                        {
                                text: "取消",
                                "class" : "btn btn-minier",
                                click: function() {
                                        $( this ).dialog( "close" ); 
                                } 
                        },
                        {
                                text: "确定",
                                "class" : "btn btn-primary btn-minier",
                                click: function() {
                                        $( this ).dialog( "close" ); 
                                } 
                        }
                ]
            });
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