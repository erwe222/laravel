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
 */
function handleResult($result=true,$code=200,$msg=''){
    return [
        'result'=>$result,
        'code'=>$code,
        'message'=>$msg
    ];
}