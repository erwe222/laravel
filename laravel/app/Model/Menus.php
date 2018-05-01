<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menus extends Model
{
    #菜单启用
    const STATUS_ENABLE   = 1;
    #菜单禁用
    const STATUS_DISABLE  = 2;
    
    const TYPE_DIR        = 0;
    const TYPE_MENU       = 1;
    const TYPE_BUTTOM     = 2;

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'menus';
    
    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['parent_id','name','url','type','icon','status','created_at'];

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    protected function filterStatus($status){
        return ((int)$status == self::STATUS_ENABLE?self::STATUS_ENABLE:self::STATUS_DISABLE);
    }
    
    protected function filterType($status){
        switch ($status){
            case 0:
                return self::TYPE_DIR;
                break;
            case 1:
                return self::TYPE_MENU;
                break;
            case 2:
                return self::TYPE_BUTTOM;
                break;
            default :
                return self::TYPE_DIR;
                break;
        }
    }
    
    /**
     * 添加菜单
     */
    public function addMenu($params){
        $array = [];
        if(!isset($params['name']) || empty($params['name'])){
            return false;
        }else{
            if($this->findName($params['name'])){
                return false;
            }
            $array['name'] = $params['name'];
        }

        if(isset($params['parent_name']) && !empty($params['parent_name'])){
            $menu_info = $this->findName($params['parent_name']);
            if(!$menu_info){
                return false;
            }
            $array['parent_id'] = $menu_info['id'];
        }

        if(isset($params['type']) && !empty($params['type'])){
            $array['type'] = $this->filterType((int)$params['type']);
        }else{
            $array['type'] = self::TYPE_DIR;
        }
        
        if($array['type'] != self::TYPE_DIR){
            if(isset($params['url']) && !empty($params['url'])){
                $array['url'] = $params['url'];
            }else{
                return false;
            }
        }

        if(isset($params['icon']) && !empty($params['icon'])){
            $array['icon'] = $params['icon'];
        }

        if(isset($params['status']) && !empty($params['status'])){
            $array['status'] = $this->filterStatus((int)$params['status']);
        }

        $insterRes = self::create($array);
        if($insterRes){
            return true;
        }
        return false;
    }
    
    /**
     * 更新菜单信息
     */
    public function updateMenu($menu_id,$params){
        $array = [];
        if(isset($params['name']) || !empty($params['name'])){
            $info = $this->findName($params['name']);
            if($info && $info['id'] != (int)$menu_id){
                return false;
            }
            $array['name'] = $params['name'];
        }

        if(isset($params['parent_name']) && !empty($params['parent_name'])){
            $menu_info = $this->findName($params['parent_name']);
            if(!$menu_info){
                return false;
            }
            $array['parent_id'] = $menu_info['id'];
        }

        if(isset($params['type']) && !empty($params['type'])){
            $array['type'] = $this->filterType((int)$params['type']);
        }else{
            $array['type'] = self::TYPE_DIR;
        }
        
        if($array['type'] != self::TYPE_DIR){
            if(isset($params['url']) && !empty($params['url'])){
                $array['url'] = $params['url'];
            }else{
                return false;
            }
        }

        if(isset($params['icon']) && !empty($params['icon'])){
            $array['icon'] = $params['icon'];
        }

        if(isset($params['status']) && !empty($params['status'])){
            $array['status'] = $this->filterStatus((int)$params['status']);
        }

        $res = self::where('id', $menu_id)->update($array);
        if($res){
            return true;
        }
        return false;
    }
    
    /**
     * 删除菜单
     * @param type $menu_id 菜单id
     * @return boolean
     */
    public function deleteMenu($menu_id){
        $menu_info = self::find($menu_id);
        if(!$menu_info){
            return false;
        }
        
        if($menu_info->type == self::TYPE_DIR){
            $res = self::where('parent_id', $menu_info->id)->count();
            if($res > 0){
                return false;
            }
        }
        
        if($menu_info->delete()){
            return true;
        }
        return false;
    }
    
    /**
     * 通过菜单名查询记录
     * @param type $name 菜单名
     * @return boolean
     */
    public function findName($name){
        $res = self::where('name', $name)->first();
        if($res){
            return $res->toArray();
        }
        return false;
    }

    /**
     * 获取页面左菜单
     * @return type
     */
    public function getMenus(){
        $menus_arr = self::where('status', self::STATUS_ENABLE)->get()->toArray();
        $handle_res = $this->getTree($menus_arr,0);
        return $this->procHtml($handle_res,0);
    }
    
    public function getTree($data, $pId){
        $tree = [];
        foreach($data as $k => $v)
        {
            if($v['parent_id'] == $pId){
                $v['parent_id'] = $this->getTree($data, $v['id']);
                $tree[] = $v;
            }
        }
        return $tree;
    }

    public function procHtml($tree,$type){
        $html = '';
        foreach($tree as $t){
            if($t['parent_id'] == ''){
                $html .= "<li>{$t['name']}</li>";
            }else{
                $html .="<li class=''>";
                if($t['type'] != 0){
                $options = json_encode([
                    'url'=>$t['url'],
                    'icon'=>$t['icon'],
                    'title'=>$t['name'],
                    'index'=>$t['id']
                ]);
                    $html .="<a  class='dropdown-toggle cus-click-url' data-options='{$options}'>";
                }else{
                    $html .="<a href='#' class='dropdown-toggle'>";
                }
                
                $icon = trim($t['icon']) == ''?'fa fa-caret-right':$t['icon'];
                $html .=" <i class='menu-icon {$icon}'></i>";

                $html .="<span class='menu-text'>{$t['name']}</span>";
                if($t['type'] == 0){
                    $html .="<b class='arrow fa fa-angle-down'></b>";
                }
                $html .="</a>";
                $html .="<b class='arrow'></b>";
                $html .= $this->procHtml($t['parent_id'],1);
                $html = $html."</li><b class='arrow'></b>";
            }
        }
        if($type == 0){
            return $html ? '<ul class="nav nav-list">'.$html.'</ul>' : $html ;
        }else{
            return $html ? '<ul class="submenu">'.$html.'</ul>' : $html ;
        }
        
    }
    
    public function getMenuList(){
        return $menus_arr = self::where('status', self::STATUS_ENABLE)->get()->toArray();
    }

    public function getMenuSelect(){
        $menus_arr = self::where('status', self::STATUS_ENABLE)->where('type',0)->select('id','parent_id', 'name as text',"type",'icon as icon-class')->orderBy('updated_at', 'asc')->get()->toArray();
        foreach($menus_arr as $key=>$v){
            $menus_arr[$key]['type'] = $v['type'] == 0?'folder':'item';
        }
        return $handle_res = $this->getTree2($menus_arr,0);
    }

    public function getTree2($data, $pId){
        $tree = [];
        foreach($data as $k => $v)
        {
            if($v['parent_id'] == $pId){
                $data2 = $this->getTree2($data, $v['id']);
                $v['additionalParameters']['children'] = $data2;
                $tree[] = $v;
            }
        }
        return $tree;
    }  
}
