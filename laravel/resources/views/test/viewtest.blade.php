<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="/js/app.js"></script>

<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script>
window.Echo.channel('orders')
    .listen('OrderShipped', (e) => {
        console.log(e.order.name);
    });
</script>


<div style="width: 100%;height: 200px;background:red;"></div>