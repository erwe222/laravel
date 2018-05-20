<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="/js/app.js"></script>


<script>
Echo.channel('orders')
    .listen('OrderShipped', (e) => {
        console.log(e.order.name);
    });

</script>


<div style="width: 100%;height: 200px;background:red;"></div>