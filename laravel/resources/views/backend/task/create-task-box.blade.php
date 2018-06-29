@extends('layouts.body')
@section('content')
<link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
<div class="row">
    <div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-1 control-label no-padding-right blue" for="form-field-title"> 标 题 </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-title" placeholder="请输入任务标题..." class="form-control">
				</div>
			</div>

			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-1 control-label no-padding-right blue" for="form-field-title"> 任务详情 </label>

				<div class="col-sm-9">
					<textarea class="form-control" id="form-field-8" placeholder="请输入任务详情..." style='resize: vertical;min-height:100px'></textarea>
				</div>
			</div>

			<div class="space-4"></div>

			
		</form>
    </div>
</div>
</div>

@endsection

@push('scripts')
		<script src="/ace-asstes/js/jquery.hotkeys.index.min.js"></script>
		<script src="/ace-asstes/js/bootstrap-wysiwyg.min.js"></script>
		<script src="/ace-asstes/js/ace-elements.min.js"></script>
		<script src="/ace-asstes/js/ace.min.js"></script>
		<script type="text/javascript">
			$(function($){
				function showErrorAlert (reason, detail) {
					var msg='';
					if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
					else {
						//console.log("error uploading file", reason, detail);
					}
					$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
					 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
				}
				$('#editor1').ace_wysiwyg({
					toolbar:
					[

						{name:'bold', className:'btn-info'},
						{name:'italic', className:'btn-info'},
						{name:'strikethrough', className:'btn-info'},
						{name:'underline', className:'btn-info'},
						null,
						{name:'insertunorderedlist', className:'btn-success'},
						{name:'insertorderedlist', className:'btn-success'},
						{name:'outdent', className:'btn-purple'},
						{name:'indent', className:'btn-purple'},
						null,
						{name:'justifyleft', className:'btn-primary'},
						{name:'justifycenter', className:'btn-primary'},
						{name:'justifyright', className:'btn-primary'},
						{name:'justifyfull', className:'btn-inverse'},
						null,
						null,
						null,
						null,
						null,
						null,
						{name:'undo', className:'btn-grey'},
						{name:'redo', className:'btn-grey'}
					],
					'wysiwyg': {
						fileUploadError: showErrorAlert
					}
				}).prev().addClass('wysiwyg-style2');
			});
		</script>
@endpush