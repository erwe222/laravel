<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Task extends Model
{

	CONST STATUS = [
		'1'=>'等待处理',
		'2'=>'处理中',
		'3'=>'延期处理',
		'4'=>'已完成',
		'5'=>'已丢弃'
	];

    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'task';


    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['admin_id','delegate_id','title','content','start_time','end_time','type','status','created_at','updated_at'];

    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * 查询任务列表数据
     *
     * @return array
     */
    public function findTaskList($admin_id,$params = []){
    	$count_sql = "select count(1) as total from `lar_task` task where 1=1 ";
        $sql = "SELECT task.*,admin1.name as admin_name,admin2.name as delegate_name FROM `lar_task` task LEFT JOIN lar_admins admin1 ON task.admin_id = admin1.id  LEFT JOIN lar_admins admin2 ON task.delegate_id = admin2.id where 1=1 ";

        if(isset($params['title']) && !empty($params['title'])){
            $sql .= " and task.title like '%{$params['title']}%'";
            $count_sql .= " and task.title like '%{$params['title']}%'";
        }

        if(isset($params['status'])){
            $sql .= " and task.status = {$params['status']}";
            $count_sql .= " and task.status = {$params['status']}";
        }
        

        if($admin_id){
            $count_sql .= " and ( task.admin_id={$admin_id} or task.delegate_id= {$admin_id} )";
            $sql .= " and ( task.admin_id={$admin_id} or task.delegate_id= {$admin_id} )";
        }

        $count_info = DB::select($count_sql);
        
        $offset = isset($params['offset'])?$params['offset']:0;
        $pageindex = isset($params['pageindex'])?$params['pageindex']:1;
        $pagesize  = isset($params['pagesize'])?$params['pagesize']:10;
        $page_info = getPagingInfo($count_info[0]->total,$pageindex,$pagesize,$offset);
        
        if(isset($params['orderBy']) && isset($params['sort'])){
            $sql .= " order by {$params['orderBy']} {$params['sort']}";
        }else{
            $sql .= " order by created_at desc";
        }

        $list = DB::select($sql.$page_info['limit']);
        foreach($list as $_k=>$_v){
            $list[$_k] = (array)$_v;
        }

        $page_info['filteredTotal'] = count($list);
        $page_info['data'] = $list;
        return $page_info;
    }

    /**
     * 查询任务列表数据
     *
     * @var array
     */
    public function updateStatus($task_id,$delegate_id,$data){
		$res = self::where('id', $task_id)->where('delegate_id', $delegate_id)->update($data);

        if($res != false){
            return true;
        }

        return false;
    }

    /**
     * 创建任务方法
     * @param admin_id 管理员id
     * @param task_id  任务id
     */
    public function createTask($data){

        $res = self::create([
            'admin_id'      => $data['admin_id'],
            'delegate_id'   => $data['delegate_id'],
            'content'       => $data['content'],
            'title'         => $data['title'],
            'start_time'    => $data['start_time'],
            'end_time'      => $data['end_time'],
            'type'          => $data['type'],
            'status'        => $data['status'],
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);

        if($res){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 更新任务方法
     * @param admin_id 管理员id
     * @param task_id  任务id
     */
    public function updateTask($id,$admin_id,$data){

        $res = self::where('id', $id)->where('admin_id',$admin_id)->update([
            'admin_id'      => $data['admin_id'],
            'delegate_id'   => $data['delegate_id'],
            'content'       => $data['content'],
            'title'         => $data['title'],
            'start_time'    => $data['start_time'],
            'end_time'      => $data['end_time'],
            'type'          => $data['type'],
            'status'        => $data['status'],
            'updated_at'    => date('Y-m-d H:i:s')
        ]);

        if($res != false){
            return true;
        }

        return false;
    }




    /**
     * 删除任务方法
     * @param admin_id 管理员id
     * @param task_id  任务id
     */
    public function deleteTask($admin_id,$task_id){
        $res = self::where('id', $task_id)->where('admin_id', $admin_id)->delete();

        if($res != false){
            return true;
        }

        return false;
    }

    public function findId($admin_id,$task_id){
        $res = self::where('id', $task_id)->where('admin_id', $admin_id)->first();
        if($res){
            return $res->toArray();
        }
        
        return false;
    }
}