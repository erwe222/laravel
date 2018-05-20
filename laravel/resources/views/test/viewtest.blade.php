<meta name="csrf-token" content="{{ csrf_token() }}">


<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script src="/js/app.js"></script>
<script>
    console.log(window.Echo);
</script>


<div style="width: 100%;height: 200px;background:red;"></div>