/**
 * ajax 请求错误回调方法
 * @param {type} XMLHttpRequest
 * @param {type} textStatus
 * @param {type} errorThrown
 * @returns {Boolean}
 */
function throwError(XMLHttpRequest, textStatus, errorThrown){
    if(XMLHttpRequest.status == 401){
        layer.msg('本次操作未经授权,若有疑问请联系管理员...', {icon: 5,time:6000});
        return false;
    }else if(XMLHttpRequest.status == 403){
        layer.msg('本次登录已过期请重新登录账号3秒后跳转至登陆页面,若有疑问请联系管理员...', {icon: 5,time:3000});
        setTimeout(function(){
            window.location.href = "/backend/auth/login";
            layer.msg('页面跳转中...', {icon: 16,shade: 0.01});
        }, 2000);
        return false;
    }else if(XMLHttpRequest.status == 404){
        layer.msg('请求地址不存在,若有疑问请联系管理员...', {icon: 5,time:6000});
        return false;
    }else if(XMLHttpRequest.status == 405){
        layer.msg('请求方式不正确,若有疑问请联系管理员...', {icon: 5,time:6000});
        return false;
    }else if(XMLHttpRequest.status == 500){
        layer.msg('服务器出错,请联系管理员...', {icon: 5,time:6000});
        return false;
    }else{
        layer.msg('网络异常，请稍后重试...', {icon: 5,time:6000});
        return false;
    }
}

/**
 * js验证电子邮箱的正则表达式
 * @param {string} mail
 * @returns {string}
 */
function isEmail(mail) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
    if (filter.test(mail)) {  
        return true;   
    } else {  
        return false;  
    }
}