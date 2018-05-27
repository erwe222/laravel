@extends('layouts.body')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="row">
                <div class="col-sm-6">
                        <div class="widget-box widget-color-blue2">
                                <div class="widget-header"><h4 class="widget-title lighter smaller">角色权限</h4></div>
                                <div class="widget-body">
                                        <div class="widget-main padding-8">
                                            <ul id="tree1" class="tree " role="tree">
                                                @foreach ($lists as $val)
                                                    <li class="tree-branch " role="treeitem" >			
                                                        <div class="tree-branch-header">			
                                                            <span class="tree-branch-name">
                                                                <i class="icon-folder ace-icon tree-minus"></i><span class="tree-label"> {{$val['title']}}</span>				
                                                            </span>			
                                                        </div>
                                                        <ul class="tree-branch-children" role="group">
                                                            @foreach ($val['children'] as $v)
                                                                <li class="cus-li-select tree-item @if (in_array($v['id'],$rolePermissionsList)) tree-selected  @endif" data-id='{{$v['id']}}'>	
                                                                    <span class="tree-item-name">		
                                                                        <i class="icon-item ace-icon fa fa-check"></i>		
                                                                        <span class="tree-label">{{$v['title']}}</span>			
                                                                    </span>		
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    <div class="widget-toolbox padding-8 clearfix">
                                        <button class="btn btn-xs btn-info" onclick="obj.refresh()">
                                                <i class="ace-icon fa fa-refresh"></i>
                                                <span class="bigger-110">刷新</span>
                                            </button>
                                            <button class="btn btn-xs btn-success" onclick="obj.submit()">
                                                <span class="bigger-110">修改权限</span>
                                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                            </button>
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="/ace-asstes/js/tree.min.js"></script>
<script>
    $('.cus-li-select').on('click',function(){
        if($(this).hasClass('tree-selected') === false){
            $(this).addClass('tree-selected');
        }else{
            $(this).removeClass('tree-selected');
        }
    });

    var obj = {
        refresh:function(){
            location.reload();
        },
        submit:function(){
            var data = [];
            $('.tree-selected').each(function(){
                data.push($(this).data('id'));
            })
            this.ajax(data);
        },
        ajax:function(data){
            var role_id = "{{$role_id}}";
            $.ajax({
                url:"{{route('b_role_updaterolepermissions')}}",
                type:'post',
                data:{role_id:role_id,permissions_ids:data},
                dataType:'json',
                success:function(res){
                    if(res.code == 200){
                        layer.msg(res.message, {icon: 1});
                    }else{
                        layer.msg(res.message, {icon: 5});
                    }
                },
                error: throwError,
            });
        }
    };

</script>
@endpush