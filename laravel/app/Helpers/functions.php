<?php

/**
 * 获取列表分页信息
 * @param type $total
 * @param type $pageindex
 * @param type $pagesize
 * @return type
 */
function getPagingInfo($total,$pageindex=1,$pagesize=20,$offset = false){
    if($offset === false){
        $page_index = $pageindex;
        $pagesize = ((int)$pagesize == 0?1:(int)$pagesize);
        $offset = (intval($pageindex) - 1) * intval($pagesize);
    }else{
        $page_index = ((int) $offset / (int)$pagesize) + 1;
    }

    return [
        'offset'=>$offset,
        'pagesize'=>$pagesize,
        'total'=>$total,
        'page_index'=>$page_index,
        'page_total'=>ceil((int)$total/(int)$pagesize),
        'limit'=>" limit {$offset},{$pagesize}"
    ];
}

/**
 * 获取处理结果
 * @param type $result
 * @param type $code      301:参数错误, ,305:处理失败
 * @param type $msg
 * @return type
 */
function handleResult($result=true,$code=200,$msg=''){
    return [
        'result'=>$result,
        'code'=>$code,
        'message'=>$msg
    ];
}

/**
 * 判断字符串编码是否为 UTF-8
 * @param type $string
 * @return blooean
 */
function mb_is_utf8($string){
    return mb_detect_encoding($string, 'UTF-8') === 'UTF-8';
}

/**
 * 获取字符串编码类型
 * @param type $string
 * @return blooean
 */
function mb_str_encoding($string){
    return  mb_detect_encoding($string, ["ASCII","UTF-8","GB2312","GBK","BIG5"]);
}

/**
 * 文件大小单位转换
 * @param type $size
 * @param type $format
 * @return type
 */
function getsize($size, $format = 'kb'){
    $p = 0;
    if ($format == 'kb') {
        $p = 1;
    } elseif ($format == 'mb') {
        $p = 2;
    } elseif ($format == 'gb') {
        $p = 3;
    }

    $size /= pow(1024, $p);
    return number_format($size, 2);
}
    
/**
 * 强制下载文件
 * @param String $filepath  实际文件所在服务器路径
 * @param String $filename  当前下载后保存的文件名(自定义)
 * @return Boolean
 */
function forceDownloadFile($filepath, $filename) {
    if (false == file_exists($filepath)) {
        return false;
    }
    set_time_limit(0);
    $file_size = filesize($filepath); //获取文件大小
    $file_extension = strtolower(substr(strrchr($filename, "."), 1));
    switch ($file_extension) {
        case "pdf": $ctype = "application/pdf";
            break;
        case "zip":
        case "rar":
            $ctype = "application/x-rar-compressed";
            break;
        case "doc": $ctype = "application/msword";
            break;
        case "docx": $ctype = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
            break;
        case "xls": $ctype = "application/vnd.ms-excel";
            break;
        case "ppt": $ctype = "application/vnd.ms-powerpoint";
            break;
        case "gif": $ctype = "image/gif";
            break;
        case "png": $ctype = "image/png";
            break;
        case "exe": $ctype = "application/octet-stream";
            break;
        case "jpeg":
        case "jpg": $ctype = "image/jpg";
            break;
        case "mp3": $ctype = "audio/mpeg";
            break;
        case "wav": $ctype = "audio/x-wav";
            break;
        case "mpeg":
        case "mpg":
        case "mpe": $ctype = "video/mpeg";
            break;
        case "mov": $ctype = "video/quicktime";
            break;
        case "avi": $ctype = "video/x-msvideo";
            break;
        case "php":
        case "htm":
        case "html":
        case "txt": 
            $ctype = 'application/force-download';
            break;
        default: $ctype = "application/force-download";
    }

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Description: File Transfer");
    header("Accept-Ranges: bytes"); // for IE6
    if (false === strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6')) {
        header('Cache-Control: no-cache, must-revalidate');
    }

    header("Content-Type: $ctype");
    header('Content-Length: ' . $file_size);
    Header("Accept-Length: " . $file_size);
    header('Content-Disposition: attachment; filename="' . urldecode($filename) . '"');
    header("Content-Transfer-Encoding: binary");

    ob_clean();
    flush();
    readfile($filepath);
}

/**
 * 判断是否为手机访问1
 * @return Boolean
 */
function is_mobile_request() {
    $all_http = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
    $http_user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';


    $http_accept = isset($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : '';
    $mobile_browser = '0';

    if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($http_user_agent))) {
        $mobile_browser++;
    }
    if ((isset($http_accept)) and ( strpos(strtolower($http_accept), 'application/vnd.wap.xhtml+xml') !== false)) {
        $mobile_browser++;
    }
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        $mobile_browser++;
    }
    if (isset($_SERVER['HTTP_PROFILE'])) {
        $mobile_browser++;
    }
    $mobile_ua = strtolower(substr($http_user_agent, 0, 4));
    $mobile_agents = array(
      'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
      'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
      'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
      'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
      'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
      'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
      'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
      'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
      'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-'
    );
    if (in_array($mobile_ua, $mobile_agents)) {
        $mobile_browser++;
    }
    if (strpos(strtolower($all_http), 'operamini') !== false) {
        $mobile_browser++;
    }
    // Pre-final check to reset everything if the user is on Windows
    if (strpos(strtolower($http_user_agent), 'windows') !== false) {
        $mobile_browser = 0;
    }
    // But WP7 is also Windows, with a slightly different characteristic
    if (strpos(strtolower($http_user_agent), 'windows phone') !== false) {
        $mobile_browser++;
    }

    if ($mobile_browser > 0) {
        return true;
    } else {
        return false;
    }
}

/**
 * 求两个日期之间相差的天数: diffBetweenTwoDays('2013-07-27','2013-08-04')
 * (针对1970年1月1日之后，求之前可以采用泰勒公式)
 * @param String $day1
 * @param String $day2
 * @return Int
 */
function diffBetweenTwoDays($day1, $day2) {
    $second1 = strtotime($day1);
    $second2 = strtotime($day2);
    return ($second2 - $second1) / 86400;
}

/**
 * function：计算两个日期相隔多少年，多少月，多少天
 * param String $date1[格式如：2011-11-5]
 * param String $date2[格式如：2012-12-01]
 * return Array array('年','月','日');
 */
function diffDate($date1, $date2) {
    if (strtotime($date1) > strtotime($date2)) {
        $tmp = $date2;
        $date2 = $date1;
        $date1 = $tmp;
    }
    list($Y1, $m1, $d1) = explode('-', $date1);
    list($Y2, $m2, $d2) = explode('-', $date2);
    $Y = $Y2 - $Y1;
    $m = $m2 - $m1;
    $d = $d2 - $d1;
    if ($d < 0) {
        $d+=(int) date('t', strtotime("-1 month $date2"));
        $m--;
    }
    if ($m < 0) {
        $m+=12;
        $Y--;
    }
    return array('year' => $Y, 'month' => $m, 'day' => $d);
}

/**
 * 获取文件的扩展名
 * @param String $file 文件所在的位置
 * @return String 文件的扩展名
 */
function getFileExtension($file) {
    return pathinfo($file, PATHINFO_EXTENSION);
}

/**
 * 生成随机数
 * @param Int $length [default is 6]
 * @return String
 */
function getRand($length = 6) {
    $arr = array();
    while (count($arr) < $length) {
        $arr[] = rand(1, 9);
        $arr = array_unique($arr);
    }
    $randString = implode('', $arr);
    return $randString;
}

/**
 * 判断是否为微信内置的浏览器
 * @return boolean
 */
function isWeiXin() {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
        return true;
    }
    return false;
}

/**
 * 字符串格式化
 * 示例: string_format("Hello,{0} {1} {0}", 'Jack','lau') #=> Hello,Jack lau Jack
 * @return String  格式化后的字符串
 */
function string_format() {
    $args = func_get_args();
    $format = array_shift($args);
    preg_match_all('/(?=\{)\{(\d+)\}(?!\})/', $format, $matches, PREG_OFFSET_CAPTURE);
    $offset = 0;
    foreach ($matches[1] as $data) {
        $i = $data[0];
        $format = substr_replace($format, $args[$i], $offset + $data[1] - 1, 2 + strlen($i));
        $offset += strlen($args[$i]) - 2 - strlen($i);
    }
    return $format;
}

/**
 * 判断是否为HTTPS安全连接访问
 * @return boolean
 */
function isSecureConnection() {
    return isset($_SERVER['HTTPS']) && (strcasecmp($_SERVER['HTTPS'], 'on') === 0 || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
}


/**
 * 随机生成任意长度的字符串
 * @param String $length 字符串长度
 * @return string
 */
function rand_string($length = 8){
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = ''; 
    for($i = 0; $i < $length; $i++ )
    {
        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    }

    return $password; 
}



/**
 * 记录日志文件
 * @return boolean
 */
function recordLog($type,$content,$params = []){
    $log = new \Monolog\Logger('Log');

    $time = date('Y-m-d');

    $path = storage_path('logs/laravel-'.$time.'.log');

    switch ($type) {
        case 1:
            //记录微信访问日志
            $path = storage_path('logs/wechat/Visit-'.$time.'.log');
        break;
    }


    $log->pushHandler(new \Monolog\Handler\StreamHandler($path,\Monolog\Logger::INFO));
    $log->addInfo($content,$params);

    unset($log);
    return true;
}