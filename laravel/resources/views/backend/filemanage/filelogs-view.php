@extends('layouts.body')
@section('content')
<div class="row">
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
        scrollX: true,
        columns: [
            {title:'文件名',data: 'filename',name:'filename',orderable:false,width: 100},
            {title: '文件大小',data: 'filesize',orderable:false,width: 150},
            {title: '创建时间',data: 'filectime',orderable:false,width: 150},
            {title: '操 作',data: 'id',orderable:false,width: 240,render: function ( data, type, row, meta ) {
                var str = '<button class="btn btn-minier btn-purple" onclick="objClass.edit(\''+meta.row+'\')"><i class="ace-icon fa fa-pencil bigger-130"></i> 查看日志</button>&nbsp;';
                str += '<button class="btn btn-minier btn-danger" onclick="objClass.delete(\''+row.filename+'\')"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;';
                return str;
            }}
        ],
    };
    
    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_filemanage_getlogfilelist')}}");
    myTable.init();
    

    
</script>
@endpush