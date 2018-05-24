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
.ui-jqgrid tr.jqgrow td {
  white-space: normal !important;
  height:auto;
  vertical-align:text-top;
  padding-top:2px;
 }
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
        
    </div>
    <div class="col-xs-12">
        <p class="pull-right" id="btns-type-one" >
            <button class="btn btn-white btn-info btn-bold" data-type="add" >
                <i class="ace-icon glyphicon glyphicon-plus bigger-120"></i>添加
            </button>
            <button class="btn btn-white btn-info btn-bold" data-type="download">
                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>下载
            </button>
            <button class="btn btn-white btn-warning btn-bold" data-type="delete">
                <i class="ace-icon fa fa-trash-o bigger-120 orange"></i>删除
            </button>
            <button class="btn btn-white btn-success btn-bold" data-type="refresh">
                <i class="ace-icon fa fa-undo bigger-120" ></i>刷新
            </button>
        </p>
    </div>
    <div class="col-xs-12">
        <table id="grid-table" ></table>
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
<script src="https://cdn.bootcss.com/jquery-csv/0.70/jquery.csv.min.js"></script>
<script>

$(function(){
    var option = {
        selector:{
            gridSelector:'#grid-table',
            pagerSelector:'#grid-pager',
        },
        myGrid:{
            url:"{{route('b_test_jqgridtableslist')}}",
//            height: 400,
            subGrid : false,//设置为true，可使用子表格。启用子表格，将在基本表的左边将添加一列，并包含一个“+”图像，用户可以点击扩展行。
            rowNum:10,
            rowList:[10,20,30],
            caption: "测试表格111111",
            colNames:['ID','最近出售','名称', '库存', '供货商','备注'],
            colModel:[
                {name:'id',index:'id', width:60, sorttype:"int", editable: true},
                {name:'sdate',index:'sdate',width:90, editable:true, sorttype:"date"},
                {name:'name',index:'name', width:150,editable: true,editoptions:{size:"20",maxlength:"30"}},
                {name:'stock',index:'stock', width:70, editable: true,edittype:"checkbox",editoptions: {value:"是:否"}},
                {name:'ship',index:'ship', width:90, editable: true,edittype:"select",editoptions:{value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"}},
                {name:'note',index:'note', width:150, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}},
            ]
        }
    }
    
    
    
   var myGridTab = new myGrid(option);
   myGridTab.init();
   
   var obj = {
        add:function(){
            var rewdata = myGridTab.getAllData();
            console.log(rewdata);
        },
        download:function(){
            var rewdata = myGridTab.getAllData();
            download(rewdata);
        },
        refresh:function(){
            myGridTab.search(true);
            return false;
        }
    }
    
    function download(data){
        var data_type = { 'csv' : 'text/csv', 'txt' : 'text/plain', 'xls' : 'application/vnd.ms-excel', 'json' : 'application/json', };
        format = 'csv';
        filename = 'new_name';
        var a = document.createElement("a");
        a.href = URL.createObjectURL(new Blob([data], {type: data_type[format]}));

        var now = new Date();
        var time_arr = [
            'DD:'+now.getDate(),
            'MM:'+now.getDate(),
            'YY:'+now.getFullYear(),
            'hh:'+now.getHours(),
            'mm:'+now.getMinutes(),
            'ss:'+now.getSeconds()
        ];

        for (var i = 0; i < time_arr.length; i++) {
            var key = time_arr[i].split(':')[0];
            var val = time_arr[i].split(':')[1];
            filename = filename.replace( '%'+key+'%', val);
        }

        a.download = filename + '.' + format;
        a.click();
        a.remove();
    }

   $('#grid-search-form').on('click',function(){
       obj.refresh();
       return false;
   });
   
   $('#btns-type-one > button').on('click',function(){
        obj[$(this).data('type')]();
    });
})
</script>
