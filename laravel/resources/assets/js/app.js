
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */




import Echo from "laravel-echo"
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001' //一定不能用127.0.0.1(因为这个地方用127.0.0.1的时候，其他人访问的时候会找自己的主机，而不是服务器的主机)
});