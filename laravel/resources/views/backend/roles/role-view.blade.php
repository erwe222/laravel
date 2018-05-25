@extends('layouts.body')
@section('content')
</style>
<div class="row">
    <div class="col-xs-12">
        <div class="alert alert-info">
            <form class="form-inline" role="form" id="grid-search-form" onsubmit="return false;">
                <div class="form-group">
                    <input type="text" id="search-role-name" name="params[id]" class="form-control" title="ID" placeholder="角色名">
                </div>
                <div class="form-group">
                    <input type="text" id="search-role-status" name="params[name]" class="form-control" title="名称" placeholder="请输入名称">    
                    
        
                </div> 
                <button class="btn btn-info btn-sm"><i class="ace-icon fa fa-search"></i>搜索</button>
            </form>
        </div>
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
            <button class="btn btn-white btn-success btn-bold" data-type="refresh" >
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">角色列表</div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover" style="width:100%;"></table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="/js/myTable.js"></script>
<script>
    var obj = {
        columns: [
            {data:null,title:'<label class="pos-rel"><input type="checkbox" class="ace" /><span class="lbl"></span></label>',width:50,orderable:false,class:'table-checkbox',
                render:function(data){
                    return '<label class="pos-rel"><input type="checkbox" class="ace" value="' + data["id"] + '" /><span class="lbl"></span></label>';
                }
            },
            {title: '角色名',data: 'name',name:'name',orderable:false},
            {title: '状态',data: 'status',name:'status',orderable:false,width: 100,render: function ( data, type, row, meta ) {
                if(data == 1){
                    return '<span class="label label-success arrowed-in arrowed-in-right" data-rowindex="'+meta.row+'">启用</span>';
                }else{
                    return '<span class="label label-danger arrowed" data-rowindex="'+meta.row+'">禁用</span>';
                }
            }},
            {title: '使用人数',data: 'total',width: 100},
            {title: '添加时间',data: 'created_at',width: 150},
            {title: '修改时间',data: 'updated_at',width: 150},
            {title: '操 作',data: 'id',orderable:false,width: 240,render: function ( data, type, row, meta ) {
                return '<button class="btn btn-minier btn-purple"><i class="ace-icon fa fa-pencil bigger-130"></i> 编辑</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-minier btn-danger"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;&nbsp;<button class="btn btn-minier btn-success"><i class="ace-icon fa fa-pencil bigger-130"></i> 编辑权限</button>';
            }}
        ]
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_role_getroleslist')}}");
    myTable.init();
    
    $('#grid-search-form').on('submit',function(){
        objClass.refresh();
    });


    var objClass = {
        add:function(){
            var data = myTable.getCheckRowsData();
            console.log(data);
        },
        download:function(){
            alert('download');
        },
        delete:function(){
            alert('delete');
        },
        refresh:function(){
            var data = {
                role_name:$.trim($('#search-role-name').val()),
                status:$('#search-role-status').val()
            };
            myTable.setSearchParams(data);
            myTable.refresh();
        }
    };

    $('#btns-type-one > button').on('click',function(){
        objClass[$(this).data('type')]();
    });
</script>
@endpush