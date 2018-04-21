<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    #菜单启用
    const STATUS_ENABLE   = 1;
    #菜单禁用
    const STATUS_DISABLE  = 2;
    
    static $arr = [];


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
    protected $fillable = ['name'];
    
    
    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    /**
     * The attributes that aren't mass assignable.
     * 如果你想要让所有属性都是可批量赋值的，可以将 $guarded 属性设置为空数组：
     * @var array
     */
    //protected $guarded = [];
    
    /**
     * 获取菜单
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
    
//     public function procHtml($tree){
//        $html = '';
//        foreach($tree as $t){
//            if($t['parent_id'] == ''){
//                $html .= "<li>{$t['name']}</li>";
//            }else{
//                $html .= "<li>".$t['name'];
//                $html .= $this->procHtml($t['parent_id']);
//                $html = $html."</li>";
//            }
//        }
//        return $html ? '<ul>'.$html.'</ul>' : $html ;
//    }
}
