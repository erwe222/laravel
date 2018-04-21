<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>表格-ACE后台管理系统</title>
		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
		<script src="/ace-asstes/js/ace-extra.min.js"></script>
	</head>

	<body class="no-skin">
		<div class="main-container ace-save-state" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
                                                            <!--<table class="table table-border table-bordered table-hover table-bg table-striped" id="table-route-list"></table>-->
                
								<div class="row">
									<div class="col-xs-12">
                                                                            <h3 class="header smaller lighter blue">菜单列表</h3>
                                                                            <div class="clearfix">
                                                                                    <div class="pull-left tableTools-container"></div>
                                                                            </div>
                                                                            <div>
                                                                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class="center">
                                                                                                                    <label class="pos-rel">
                                                                                                                            <input type="checkbox" class="ace" />
                                                                                                                            <span class="lbl"></span>
                                                                                                                    </label>
                                                                                                            </th>
                                                                                                            <th>域名</th>
                                                                                                            <th>价格</th>
                                                                                                            <th class="hidden-480">点击</th>

                                                                                                            <th>
                                                                                                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                                                                    更新
                                                                                                            </th>
                                                                                                            <th class="hidden-480">状态</th>

                                                                                                            <th></th>
                                                                                                    </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                    <tr>
                                                                                                            <td class="center">
                                                                                                                    <label class="pos-rel">
                                                                                                                            <input type="checkbox" class="ace" />
                                                                                                                            <span class="lbl"></span>
                                                                                                                    </label>
                                                                                                            </td>

                                                                                                            <td>
                                                                                                                    <a href="#">app.com</a>
                                                                                                            </td>
                                                                                                            <td>$45</td>
                                                                                                            <td class="hidden-480">3,330</td>
                                                                                                            <td>Feb 12</td>

                                                                                                            <td class="hidden-480">
                                                                                                                    <span class="label label-sm label-warning">即将到期</span>
                                                                                                            </td>

                                                                                                            <td>
                                                                                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                                                                                            <a class="blue" href="#">
                                                                                                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                                                                            </a>

                                                                                                                            <a class="green" href="#">
                                                                                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                                                            </a>

                                                                                                                            <a class="red" href="#">
                                                                                                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                                                            </a>
                                                                                                                    </div>

                                                                                                                    <div class="hidden-md hidden-lg">
                                                                                                                            <div class="inline pos-rel">
                                                                                                                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                                                                    </button>

                                                                                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                                                            <li>
                                                                                                                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                                                                                            <span class="blue">
                                                                                                                                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                                                                            </span>
                                                                                                                                                    </a>
                                                                                                                                            </li>

                                                                                                                                            <li>
                                                                                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                                                                            <span class="green">
                                                                                                                                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                                                                            </span>
                                                                                                                                                    </a>
                                                                                                                                            </li>

                                                                                                                                            <li>
                                                                                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                                                                            <span class="red">
                                                                                                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                                                                            </span>
                                                                                                                                                    </a>
                                                                                                                                            </li>
                                                                                                                                    </ul>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                            </td>
                                                                                                    </tr>

                                                                                            </tbody>
                                                                                    </table>
                                                                            </div>
									</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
                                                
                                                
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<!--[if !IE]> -->
		<script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/ace-asstes/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="/ace-asstes/js/jquery.dataTables.min.js"></script>
		<script src="/ace-asstes/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="/ace-asstes/js/dataTables.buttons.min.js"></script>
		<script src="/ace-asstes/js/buttons.flash.min.js"></script>
		<script src="/ace-asstes/js/buttons.html5.min.js"></script>
		<script src="/ace-asstes/js/buttons.print.min.js"></script>
		<script src="/ace-asstes/js/buttons.colVis.min.js"></script>
		<script src="/ace-asstes/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="/ace-asstes/js/ace-elements.min.js"></script>
		<script src="/ace-asstes/js/ace.min.js"></script>
                <script src="/js/datatable.public.js"></script>
<script src="/ace-asstes/layer/layer.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
                    
 
                    
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = $('#dynamic-table').DataTable({
                                    "ajax": "/admin/getmenuslistdata",
                                    serverSide:true,
                                    searching: false,
                                ordering:  true,
                                    columns: [
                                        {title: '栏目',data: 'id',align: 'center'},
                                        {title: '父级栏目',data: 'parent_name',width:150,
                                            render:function(data, type, row, meta) {
                                                return (data == '' || data==  null)?'顶级分栏':data;
                                            }
                                        },
                                        {title: '栏目',data: 'menu_name',align: 'center'},
                                        {title: '路由',data: 'url'},
                                        {title: '图标1',data: 'icons'},
                                        {title: '图标2',data: 'icons2'},
                                        {title: '图标3',data: 'icons3'},
                                ]
                         });
			
				
				
			
			})
                  
		</script>
	</body>
</html>
