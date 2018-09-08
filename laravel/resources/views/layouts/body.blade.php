<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>后台管理系统</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Common form elements and layouts" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="/ace-asstes/layer/theme/default/layer.css?v=3.1.1" id="layuicss-layer">
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/chosen.min.css" />
        <link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
        <style>
            th, td { white-space: nowrap; }
            .datagrid-header ,.datagrid-htable{height:40px !important;line-height:40px !important;}
            .datagrid-header .datagrid-htable .datagrid-htable .datagrid-header-row{height:40px !important;line-height:40px !important;}
            .datagrid-header .datagrid-htable .datagrid-htable .datagrid-header-row{
                color: #707070;
                font-weight:400;
                background: repeat-x #F2F2F2;
                font-size:20px !important;
            }
            .datagrid-body .datagrid-btable tr{height:40px !important;}
            .datagrid-header-check {height:30px !important;}
            i{cursor: pointer;}
        </style>
        @stack('css')
        <script src="/ace-asstes/js/ace-extra.min.js"></script>
    </head>
    <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content" >
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="/ace-asstes/js/bootstrap.min.js"></script>
        <script src="/ace-asstes/js/jquery-ui.min.js"></script>
        <script src="/ace-asstes/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/ace-asstes/js/ace-elements.min.js"></script>
        <script src="/ace-asstes/js/ace.min.js"></script>
        <script src="{{url('ace-asstes/layer/layer.js')}}"></script>
        <script src="/js/functions.js"></script>
        <script type="text/javascript">
            $('[data-rel=tooltip]').tooltip();
            jQuery(function($) {
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
            });
            
            $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                _title: function(title) {
                    var $title = this.options.title || '&nbsp;'
                    if( ("title_html" in this.options) && this.options.title_html == true )
                            title.html($title);
                    else title.text($title);
                }
            }));
        </script>
         @stack('scripts')
    </body>
</html>
