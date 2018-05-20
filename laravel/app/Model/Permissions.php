<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * 权限表数据模型
 *
 * @author dell
 */
class Permissions extends Model{
    
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'permissions';
    
    /**
     * 删除权限方法
     * @param int|array $id
     * @return  boolean
     */
    public function deletePermissions($id){
        
        $res = self::destroy($id);
        
        return $res?true:false;
    }
}
