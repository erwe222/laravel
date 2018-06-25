@extends('layouts.body')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="clearfix"><div class="pull-right tableTools-container"></div></div>
        <div class="table-header">日志文件列表</div>
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
        paging:false,
        scrollX: true,
        columns: [
            {title:'文件名',data: 'filename',name:'filename',orderable:false,width: 100},
            {title: '文件大小',data: 'filesize',orderable:false,width: 150},
            {title: '文件名编码类型',data: 'file_code',orderable:false,width: 150},
            {title: '类型',data: 'file_type',orderable:false,width: 50,render: function ( data, type, row, meta ) {
                if(data == 1){
                    return '<span class="label label-success arrowed-in arrowed-in-right">文件</span>';
                }else{
                    return '<span class="label label-warning arrowed arrowed-right">文件夹</span>';
                }
            }},
            {title: '创建时间',data: 'filectime',orderable:false,width: 150},
            {title: '操 作',data: 'id',orderable:false,width: 240,render: function ( data, type, row, meta ) {
                var str = '<button class="btn btn-minier btn-purple" onclick="objClass.catInfo(\''+row.filename+'\',\''+row.file_code+'\')"><i class="ace-icon fa fa-eye bigger-130"></i> 查看日志</button>&nbsp;';
                str += '<button class="btn btn-minier btn-danger" onclick="objClass.delete(\''+row.filename+'\',\''+row.file_code+'\')"><i class="ace-icon fa fa-trash-o bigger-130"></i> 删除</button>&nbsp;';
                str += '<button class="btn btn-minier btn-info" onclick="objClass.download(\''+row.filename+'\',\''+row.file_code+'\')"><i class="ace-icon fa fa-download bigger-130"></i> 下载文件</button>&nbsp;';
                return str;
            }}
        ],
    };

    var myTable = new MyTable('#dynamic-table',obj,"{{route('b_filemanage_getlogfilelist')}}");
    myTable.init();
    
    var objClass = {
        download:function(name,code){
            var url = "{{route('b_filemanage_downloadlogfile')}}"+'?filename='+name+'&code='+code;
            window.open(url); 
        },
        delete:function(name,code){
            layer.confirm('您确定要删除<span style="color:red;">['+name+']</span> 文件吗？', {icon: 3,
                btn: ['确定','取消'] //按钮
            }, function(){
                $.ajax({
                    url:"{{route('b_filemanage_deletelogfile')}}",
                    type:'get',
                    data:{filename:name,code:code},
                    dataType:'json',
                    success:function(res){
                        if(res.code == 200){
                            layer.msg('文件删除成功...', {icon: 1});
                            myTable.refresh();
                        }else{
                            layer.msg('文件删除失败', {icon: 5});
                        }
                    },
                    error: throwError,
                });
            });
        },
        catInfo:function(name,code){
            var url = "{{route('b_filemanage_readlogfile')}}"+'?filename='+name+'&code='+code;
            var title = "【"+name+"】日志文件";
            var data = {href:url,title:title,icon:'fa fa-pencil',index:'cat-logs',lock:false};
            window.parent.mytab.addTab(data);  
        },
        refresh:function(){
            myTable.refresh();
        }
    };
</script>
@endpush