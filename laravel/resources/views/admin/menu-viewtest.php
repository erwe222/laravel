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
    .datagrid-header-row{height:35px !important;font-size:28px !important;background:#E4E6E9 !important;}
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
