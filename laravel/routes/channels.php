<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

//测试提示渠道
Broadcast::channel('notice', function () {
  return true; //这个里面可以写授权的逻辑判断，我这里直接返回true了，不做验证
});

//用户登录提示渠道
Broadcast::channel('userlogin', function () {
  return true; //这个里面可以写授权的逻辑判断，我这里直接返回true了，不做验证
});
