@extends('layouts.body')
@section('content')
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
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">数据表标题</div>
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
            {title: '状态',data: 'status',name:'status',orderable:false},
            {title: '使用数',data: 'total'},
            {title: '添加时间',data: 'created_at'},
            {title: '修改时间',data: 'updated_at'}
        ]
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_role_getroleslist')}}");
    myTable.init();
    
    $('#grid-search-form').on('click',function(){
        var data = {status:'11111111111',sex:'222222222'};
        myTable.setSearchParams(data);
        myTable.refresh();
        return false;
   });
</script>
@endpush