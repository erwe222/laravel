<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>后台管理系统</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Common form elements and layouts" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="/ace-asstes/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/chosen.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/bootstrap-colorpicker.min.css" />
        <link rel="stylesheet" href="/ace-asstes/googlefonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/ace-asstes/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="/jquery-easyui/themes/material/easyui.css" />
        <link rel="stylesheet" href="/css/easycss-edit.css" />
        <style>
            .datagrid-header-row{height:35px !important;font-size:28px !important;}
        </style>
        @stack('css')
        <script src="/ace-asstes/js/ace-extra.min.js"></script>
    </head>
    <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content" >
                        
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="/ace-asstes/js/jquery-2.1.4.min.js"></script>
        <script src="/jquery-easyui/easyloader.js"></script>
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/ace-asstes/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="/ace-asstes/js/bootstrap.min.js"></script>
        <script src="/ace-asstes/js/jquery-ui.min.js"></script>
        <script src="/ace-asstes/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/ace-asstes/js/ace-elements.min.js"></script>
        <script src="/ace-asstes/js/ace.min.js"></script>
        <script>
            easyloader.base = '/jquery-easyui/'; // 设置 easyui 基础目录 
            easyloader.theme = 'metro';          // 设置 easyui 默认主题
            easyloader.locale = 'zh_CN';         // 设置 easyui 默认语言
        </script>
        <script>
            $('[data-rel=tooltip]').tooltip();
            
            
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
