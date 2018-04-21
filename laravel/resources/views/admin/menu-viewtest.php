<link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
<link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/jquery-ui.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/ui.jqgrid.min.css" />
<link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
<link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
<link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/jquery-easyui/themes/material/easyui.css" />
<script src="/ace-asstes/js/ace-extra.min.js"></script>
<style>
    /*.datagrid-header-row{height:40px !important;font-size:18px !important;background:#D0D0D0 !important;}*/
</style>

<div class="row" >
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
        <table id="grid-table"></table>
        <div id="grid-pager"></div>
    </div>
</div>

<div id="orderinfo"></div>

<script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>
<script src="/jquery-easyui/easyloader.js"></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/ace-asstes/js/bootstrap.min.js"></script>
<script src="/ace-asstes/js/bootstrap-datepicker.min.js"></script>
<script src="/ace-asstes/js/jquery.jqGrid.min.js"></script>
<script src="/ace-asstes/js/grid.locale-cn.js"></script>
<script src="/js/myjqGrid.js"></script>
<script src="/ace-asstes/js/ace-elements.min.js"></script>
<script src="/ace-asstes/js/ace.min.js"></script>
<script>
easyloader.base = '/jquery-easyui/'; // 设置 easyui 基础目录 
easyloader.theme = 'metro';
easyloader.locale = 'zh_CN';
easyloader.load('datagrid', function(){ // 加载指定模块 
   $("#orderinfo").datagrid({
    url: '/admin/menuviewtest2',
    loadMsg: '正在载入数据,请耐心等待...',
    columns: [[//表头标题栏
        {field: 'id', title: '订单ID号', width: 100, halign: 'center', checkbox: true},
        {field: 'order_pre_no', title: '旧订单号', align: 'center',width: 150,sortable:true},
        {field: 'logistics_name', title: '快递公司', align: 'center',width: 150,sortable:true},
        {field: 'shipping_price', title: '快递价格', width: 100, align: 'center',sortable:true},
      ]],
    fit: false,
    striped: true,
    pagination: true,
    pageSize: 10,
    pageList: [10, 20, 30, 50],
    rownumbers: true,
    singleSelect: false,
    method:'get',
    onDblClickRow: function (index, row) {

    },
    queryParams:{testname:1111111111},
    onLoadSuccess: function (data) {
      if (data.rows.length === 0) {
        var body = $(this).data().datagrid.dc.body2;
        body.find('table tbody').append('<tr><td width="' + body.width() + '" style="height: 25px; text-align: center;font-weight:bold;color:red;" colspan="14">数据库中暂无数据...</td></tr>');
      }
    }
  }); 
});
$(function(){
   var myGridTab = new myGrid('#grid-table','#grid-pager');
   myGridTab.init();
   
   

   function myRefresh(){
       myGridTab.search(true);
       
       return false;
   }
   
   $('#grid-search-form').on('click',function(){
       myRefresh();
       return false;
   });
})
</script>
