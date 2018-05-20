<meta name="csrf-token" content="{{ csrf_token() }}">


<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="/js/app.js"></script>



<div style="width: 100%;height: 200px;background:red;"></div>

<script>
    window.Echo.channel('notice')
        .listen('TestBroadcastingEvent', (e) => {
            console.log(e);
            alert(e.notice+'登录啦 嘻嘻');
        });
        
        console.log(window.Echo);
</script>