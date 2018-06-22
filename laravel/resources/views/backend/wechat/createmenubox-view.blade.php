@extends('layouts.body')
@section('content')

<form class="form-horizontal" role="form" onreset='FormatJson()' id='form1' onsubmit="return false;">
		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1">发布状态 </label>

			<div class="col-sm-9">
				
				<div class="radio">
                    <label>
                        <input name="fr-wxmenu-status" type="radio"  class="ace" checked="" value="1" />
                        <span class="lbl"> 立即发布</span>
                    </label>
                    <label>
                        <input name="fr-wxmenu-status" type="radio"  class="ace" value="2" />
                        <span class="lbl"> 保存草稿</span>
                    </label>
                </div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Json 数据 </label>

			<div class="col-sm-9">
				<textarea id="form-field-11" class="autosize-transition form-control"  style='height: 200px;resize: none;'>
					{{$json_data}}

				</textarea>
			</div>
		</div>
		

		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9" style='text-align:center;'>
				<button class="btn btn-xs btn-info" type="button" id='fr-submit-btn'>
					<i class="ace-icon fa fa-check bigger-110"></i>
					提交
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class="btn btn-xs"  id='fr-reset-btn'>
					<i class="ace-icon fa fa-undo bigger-110"></i>
					重置
				</button>
			</div>
		</div>

	</form>
@endsection

@push('scripts')

<script type="text/javascript">  
    $(function(){
  		FormatJson();
    })

    var objClass = {
    	isSubmitLoading:false,
    };
    $('#fr-submit-btn').on('click',function(){
    	var json_str = $.trim($('#form-field-11').val());
    	var status   = $("input[name='fr-wxmenu-status']:checked").val();
    	if(!isJSON(json_str)){
			layer.msg('请填写正确的json数据', {icon: 5});
    	}
    	var parent_index = parent.layer.getFrameIndex(window.name);
    	$.ajax({
	        url:"{{route('b_wechat_createmenu')}}",
	        type:'post',
	        data:{jsondata:json_str,status:status},
	        dataType:'json',
	        complete:function(){
	            objClass.isSubmitLoading = false;
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
    });

    $('#fr-reset-btn').on('click',function(){
    	document.getElementById("form1").reset(); 
    	FormatJson();
    });


    function isJSON(str) {
	    try{
			var obj = eval('(' + str + ')');
			return true;
		}
		catch(e){
			return false;
		}
	}


	function FormatJson(){
		//将字符串转换成json对象  
   		var result = JSON.stringify(JSON.parse($('#form-field-11').val()), null, 2);
	　  $('#form-field-11').val(result);
	}
</script>
@endpush