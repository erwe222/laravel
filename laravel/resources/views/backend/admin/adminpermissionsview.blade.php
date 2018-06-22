@extends('layouts.body')
@section('content')

<div class="row">
    <div class="col-xs-12">
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
                <tr >
                    <th class="center">
                    </th>
                    <th>角色名</th>
                    <th class="hidden-480">状态</th>
                </tr>
            </thead>

            <tbody>
                @foreach($roleData as $k=>$v)
                <tr class="active">
                    <td class="center" width='50'>
                        <label class="pos-rel">
                            <input type="checkbox" class="ace input-select"   value="{{$v['id']}}"   data-adminid={{$adminid}}  @if(in_array($v['id'],$admonRoleData))  checked='' @endif   />
                            <span class="lbl"></span>
                        </label>
                    </td>

                    <td>
                        <span >{{$v['name']}}</span>
                    </td>

                    <td width='50'>
                        @if($v['status'] == 1)
                            <span class="label label-success label-white middle">启用</span>
                        @else
                            <span class="label label-danger label-white middle">禁用</span>
                        @endif
                    </td>
                </tr>
                @endforeach

                <tr class="">
                    <td class="center" colspan='3'>
                        <button class="btn btn-white btn-info btn-bold" id='fr-submit-btn'>
                            <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                            提 交
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')

    <script>
        $('.input-select').on('click',function(){
            $('.input-select').each(function(){
                $(this).prop('checked', false);
            });
            $(this).prop('checked', true);
        });


        var obj = {
            isSubmitLoading:false,
        };

        $('#fr-submit-btn').on('click',function(){
            var o = $("input[type='checkbox']:checked");
            var id= o.data('adminid');
            var roleid= o.val();
            var parent_index = parent.layer.getFrameIndex(window.name);
            if(obj.isSubmitLoading == false){
                obj.isSubmitLoading = true;
                $.ajax({
                    url:"{{route('b_admin_updateadminrole')}}",
                    type:'post',
                    data:{id:id,roleid:roleid},
                    dataType:'json',
                    complete:function(){
                        obj.isSubmitLoading = false;
                    },
                    success:function(res){
                        if(res.code == 200){
                            layer.msg(res.message, {icon: 1});
                            setTimeout(function(){
                                   parent.layer.close(parent_index);
                                },2000);
                        }else{
                            layer.msg(res.message, {icon: 5});
                        }
                    },
                    error: throwError,
                });
            }
            
        });
    </script>
@endpush