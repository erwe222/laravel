<?php
namespace App\Helpers;

/**
 * @name CurlRequest php 请求类
 * @license 基于curl 实现， 可模拟多线程任务 
 */
class CurlRequest {
    public    $timeout        = 100;

    public    $authentication = 0;
    public    $auth_name      = '';
    public    $auth_pass      = '';

    protected  $url;
    protected $_post;
    protected $_postFields;

    //请求状态
    protected $_status;
    //请求错误提示
    protected $_error;

    //cookie文件地址
    protected $_cookieFileLocation = '';
    protected $_cookieOpen         = false;

    protected $headers       = [];

    /**
     * 设置用户授权信息
     * @param $name
     * @param $pass
     */
    public function setAuthInfo($name,$pass){
        $this->authentication = 0;
        $this->auth_name = trim($name);
        $this->auth_pass = trim($pass);
    }

    /**
     * 设置网页来源地址
     * @param $referer
     */
    public function setReferer($referer){
        $this->_referer = $referer;
    }

    /**
     * 设置CookiFile地址
     * @param $path
     */
    public function setCookiFileLocation($path)
    {

        $this->_cookieFileLocation = $path;
    }

    /**
     * 设置浏览器User Agent 信息
     * @param $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->_useragent = $userAgent;
    }

    /**
     * 设置请求超时的最大时间
     * @param $time
     */
    public function setTimeOut($time){
        $this->timeout = (int)$time;
    }

    /**
     * 设置请求地址
     * @param $url
     */
    public function setRequestUrl($url){
        $this->url = $url;
    }

    public function setPost ($postFields)
    {
        $this->_post = true;
        $this->_postFields = $postFields;
    }

    /**
     * 设置请求的header头信息
     * @param $headers
     */
    public function setHeaders($headers){
        if(!is_array($headers)){
            throw new Exception('headers 是一个数组');
        }
        $this->headers = $headers;
    }

    /**
     * [getStatusCode 获取请求状态]
     * @return [type] [description]
     */
    public function getStatusCode(){
        return $this->_status;
    }

    /**
     * [getErrorInfo 获取请求错误信息]
     * @return [type] [description]
     */
    public function getErrorInfo(){
        return $this->_error;
    }

    /**
     *
     * @param $address
     * @return mixed
     */
    public function request()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);

        curl_setopt($ch, CURLOPT_HEADER, false);

        if(count($this->headers) > 0){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        }

        // 将curl_exec()获取的信息以文件流的形式返回,不直接输出。
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // 连接等待时间
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        // curl允许执行时间
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);

        //curl_setopt($ch, CURLOPT_NOSIGNAL, true);    //注意，毫秒超时一定要设置这个
        //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 100); //超时时间100毫秒

        if($this->authentication == 1){
            curl_setopt($ch, CURLOPT_USERPWD, $this->auth_name.':'.$this->auth_pass);
        }

        if(!empty($this->_useragent)){
            curl_setopt($ch,CURLOPT_USERAGENT,$this->_useragent);
        }

        if(!empty($this->_referer)){
            //伪造网页来源地址,伪造来自百度的表单提交
            curl_setopt($ch,CURLOPT_REFERER,$this->_referer);
        }

        if($this->_cookieFileLocation){
            curl_setopt($ch,CURLOPT_COOKIEJAR,$this->_cookieFileLocation);
            curl_setopt($ch,CURLOPT_COOKIEFILE,$this->_cookieFileLocation);
        }

        if($this->_post)
        {
            if(!is_array($this->_postFields)){
                /**
                 * 发送json字符串 PHP服务端的获取数据方式
                 * //第一种方法
                 * $post = $GLOBALS[‘HTTP_RAW_POST_DATA’];
                 * //第二种方法
                 * $post = file_get_contents(“php://input”);
                 */

                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json; charset=utf-8',
                    'Content-Length: ' . strlen($this->_postFields)
                ));
            }
            
            curl_setopt($ch,CURLOPT_POST,1);

            /**
             *  使用数组提供post数据时，CURL组件大概是为了兼容@filename这种上传文件的写法，
             *  默认把content_type设为了multipart/form-data。虽然对于大多数web服务器并
             *  没有影响，但是还是有少部分服务器不兼容。本文得出的结论是，在没有需要上传文件的
             *  情况下，尽量对post提交的数据进行http_build_query，然后发送出去，能实现更好的兼容性，更小的请求数据包。
             * 可通过 new CurlFile('D:\bakFile\TestFile.txt') 添加上传文件 例如：$this->_postFields['files] = new CurlFile('D:\bakFile\TestFile.txt')
             */
            curl_setopt($ch,CURLOPT_POSTFIELDS,$this->_postFields);
        }

        $res = curl_exec($ch);

        $this->_status = curl_getinfo($ch,CURLINFO_HTTP_CODE);

        if(curl_errno($ch)){
            $this->_error = curl_error($ch);
        }

        curl_close($ch);

        return $res;
    }
}