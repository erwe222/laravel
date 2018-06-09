@extends('layouts.body')
@section('content')
<div class="page-header">
    <h1>系统管理<small><i class="ace-icon fa fa-angle-double-right"></i> 系统设置</small></h1>
</div>
<div id="user-profile-3" class="user-profile row">
    <div class="col-sm-offset-1 col-sm-10">
        <div class="space"></div>
        <form class="form-horizontal">
            <div class="tabbable">
                <ul class="nav nav-tabs padding-16">
                    <li class="active">
                        <a data-toggle="tab" href="#edit-basic" aria-expanded="true">
                            <i class="purple ace-icon fa fa-cog bigger-125"></i>网站设置
                        </a>
                    </li>

                    <li class="">
                        <a data-toggle="tab" href="#edit-settings" aria-expanded="false">
                            <i class="purple ace-icon fa fa-cog bigger-125"></i>缓存设置
                        </a>
                    </li>

                    <li class="">
                        <a data-toggle="tab" href="#edit-password" aria-expanded="false">
                            <i class="purple ace-icon fa fa-cog bigger-125"></i>预留设置
                        </a>
                    </li>
                </ul>

                <div class="tab-content profile-edit-tab-content">
                        <div id="edit-basic" class="tab-pane active">
                            <h4 class="header blue bolder smaller">权限管理设置</h4>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="line-height:13px;font-size:16px;color:#616161;" > 是否开启后台权限验证 ：</label>
                                <div class="col-sm-9">
                                    <label>
                                        <input name="switch-field-1" class="ace ace-switch ace-switch-7" type="checkbox">
                                        <span class="lbl"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="space-4"></div>
                        </div>
                        <div id="edit-settings" class="tab-pane">
                            <h4 class="header blue bolder smaller">缓存文件</h4>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style="line-height:13px;font-size:16px;color:#616161;" > 清除视图缓存文件 ：</label>
                                <div class="col-sm-9">
                                    <span class="btn btn-white btn-pink btn-sm" onclick="objClass.clearCacheFile()" id="cus-clearfile-btn">清除文件</span> 
                                </div>
                            </div>
                                <div class="space-8"></div>
                        </div>
                        <div id="edit-password" class="tab-pane">
                                
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    var objClass = {
        isClearCacheFileAjax:false,
        clearCacheFile:function(){
            $('#cus-clearfile-btn').html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>文件清理中');
            if(objClass.isClearCacheFileAjax === false){
                objClass.isClearCacheFileAjax = true;
                $.ajax({
                    url:"{{route('b_system_clearviewcache')}}",
                    type:'get',
                    dataType:'json',
                    success:function(res){
                        objClass.isClearCacheFileAjax = false;
                        if(res.code == 200){
                            $('#cus-clearfile-btn').html('清理完成');
                        }else{
                            $('#cus-clearfile-btn').html('清理失败');
                            
                        }
                        setTimeout(function(){
                            $('#cus-clearfile-btn').html('清除文件');
                        }, 5000);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown){
                        objClass.isClearCacheFileAjax = false;
                        throwError(XMLHttpRequest, textStatus, errorThrown);
                        $('#cus-clearfile-btn').html('清理失败');
                        setTimeout(function(){
                            $('#cus-clearfile-btn').html('清除文件');
                        }, 5000);
                    }
                });
            }
        }
    }
</script>
@endpush