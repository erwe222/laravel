<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Services\TencentCosService;
/**
 * Description of MenusController
 *
 * @author dell
 */
class GoodsController extends CController{

	protected $goodsModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->goodsCategoryModel   = new \App\Model\GoodsCategory;

        $this->brandModel           = new \App\Model\Brand;
    }

    /**
     * 获取菜单列表数据
     * @param \Illuminate\Http\Request $request
     */
    public function index(Request $request){
    	return view('backend.goods.category-view');
    }

    /**
     * 创建货品类目
     * @param \Illuminate\Http\Request $request
     */
    public function createCategory(Request $request){
        $pid            = $request->input('pid',0);
        $name           = $request->input('name','');
        $description    = $request->input('description','');

        if(empty($name)){
            return $this->returnData([],'参数错误',301);
        }

        $res = $this->goodsCategoryModel->createCategory($pid,$name,$description);
        if(!$res['result']){
            return $this->returnData([],$res['message'],305);
        }

        return $this->returnData($res['params'],$res['message'],200);
    }

    /**
     * 获取货品类目数据信息
     * @param \Illuminate\Http\Request $request
     */
    public function searchCategory(Request $request){
        $type            = $request->input('type',1);
        $pid             = $request->input('pid',0);
        $name             = $request->input('name','');

        $data = $this->goodsCategoryModel->searchCategory($pid,$name);

        return $this->returnData([
            'datas'=>$data,
            'type' =>$type
        ],'',200);
    }

    /**
     * 品牌列表页面
     * @param \Illuminate\Http\Request $request
     */
    public function brand(){
        return view('backend.goods.brand-view');
    }

    /**
     * 添加品牌信息方法
     * @param \Illuminate\Http\Request $request
     */
    public function createBrand(Request $request){
        $name           = $request->input('name');
        $logo_url       = $request->input('logourl');
        $description    = $request->input('description');

        if(empty($name) || empty($logo_url) || empty($description)){
            return $this->returnData([], '参数不符合规范', 301);
        }

        $result = $this->brandModel->addBrand($name,$description,$logo_url);
        if($result['result']){
            $this->createActionLog([
                'type'=>1,
                'content'=>"添加品牌信息[".htmlspecialchars($name).']'
            ]);
        }
        return $this->returnData([], $result['message'], $result['code']);
    }

    /**
     * 修改品牌信息方法
     * @param \Illuminate\Http\Request $request
     */
    public function updateBrand(Request $request){
        $id             = $request->input('id');
        $name           = $request->input('name');
        $logo_url       = $request->input('logourl');
        $description    = $request->input('description');

        if(empty($id) || empty($name) || empty($logo_url) || empty($description)){
            return $this->returnData([], '参数不符合规范', 301);
        }


        $result = $this->brandModel->updateBrand($id,[
            'name'          => $name,
            'logo_url'      => $logo_url,
            'description'   => $description,
        ]);
        if($result['result']){
            $this->createActionLog([
                'type'=>1,
                'content'=>"修改品牌信息[".htmlspecialchars($name).']'
            ]);
        }
        return $this->returnData([], $result['message'], $result['code']);
    }

    /**
     * 获取品牌列表数据方法
     * @param \Illuminate\Http\Request $request
     */
    public function getbrandlist(Request $request){
        $params = $this->queryDatatableParams($request);
        $data = [];
        if(isset($params['search']['name']) && !empty($params['search']['name'])){
            $data['name'] = addslashes($params['search']['name']);
        }
        
        if(!empty($params['orderBy']) && !empty($params['sort'])){
            $data['orderBy']    = $params['orderBy'];
            $data['sort']       = $params['sort'];
        }

        $data['offset']     = $params['offset'];
        $data['pagesize']   = $params['pagesize'];
        $lists = $this->brandModel->findBrandList($data);

        return response()->json([
            'code'=>200,
            'draw'=>$params['draw'],
            'recordsTotal'=>$lists['total'],
            'recordsFiltered'=>$lists['total'],
            'data'=>$lists['data'],
            'page_index'=>$lists['page_index']
        ]);
    }

    /**
     * 上传品牌logo图片
     * @param \Illuminate\Http\Request $request
     */
    public function uploadBrandLogo(Request $request){
        $file = $request->file('file');
        // 文件是否上传成功
        if ($file->isValid()) {

            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();               //临时文件的绝对路径

            $fileTypes = array('png','jpg','jpeg');
            //是否是要求的文件
            $isInFileType = in_array($ext,$fileTypes);
            if(!$isInFileType){
                return $this->returnData(['src'=>''],'不支持该文件格式',301);
            }

            $imgInfo = getimagesize($file->getRealPath());
            if($imgInfo[0] != 150 && $imgInfo[1] !=50){
                return $this->returnData(['src'=>''],'图片规格错误(宽度150，高度50)',301);
            }

            $key = getRandImgName().'.'. $ext;

            $cosService = new TencentCosService();
            $src = $cosService->uploadFileFlow('file-1256209919',$key,$realPath);
            if($src){
                return $this->returnData(['src'=>$src],'文件上传成功',200);
            }
            
            return $this->returnData(['src'=>''],'参数错误',305);
        }

        return $this->returnData(['src'=>''],'参数错误',301);
    }
}