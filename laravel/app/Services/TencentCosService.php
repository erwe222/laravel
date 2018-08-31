<?php
namespace App\Services;
use Qcloud\Cos\Client;


/**
 * 腾讯云上传文件服务类
 *
 * @author 
 */
class TencentCosService {
    
    protected $cosClient;

    public function __construct(){
    	$this->cosClient = new Client([
            'region' => 'ap-chengdu',
            'credentials' => [
                'secretId'    => 'AKIDveAQhjd4MPDl3BmsZ4LOCmESSDj1IuUq',
                'secretKey' => 'HK9j4A1g7KI4f7RZXFgrseAQQAdqmX3N',
            ]
        ]);
    }

    /**
     * 上传文件流
     * @param $bucket 	    存储桶名称
     * @param $save_path 	保存的文件地址(相对于文件桶)
     * @param $path 		文件所在路径
     * @return type
     */
    public function uploadFileFlow($bucket,$save_path,$path){
    	set_time_limit(0);

        try {
		    $result = $this->cosClient->putObject(array(
	            'Bucket'    => $bucket,
	            'Key'       => $save_path,
	            'Body'      => fopen($path, 'rb')
	        ));

		    if($result && isset($result['ObjectURL']) && !empty($result['ObjectURL'])){
		    	return $result['ObjectURL'];
		    }

		    return false;
		} catch (\Exception $e) {
		    return false;
		}
    }

    /**
     * 下载文件(下载到内存)  (后期完善)
     * @param $bucket 	    存储桶名称
     * @param $save_path 	保存的文件地址(相对于文件桶)
     * @param $path 		文件所在路径
     * @return type
     */
    public function downloadFile($bucket,$key){
    	try {
		    $result = $this->cosClient->getObject(array(
		        'Bucket' => $bucket,
		        'Key' => $key
		    ));
		    echo($result['Body']);
		} catch (\Exception $e) {
		    echo($e);
		}
    }

    /**
     * 下载文件(下载到本地)  (后期完善)
     * @param $bucket 	    存储桶名称
     * @param $save_path 	保存的文件地址(相对于文件桶)
     * @param $path 		文件所在路径
     * @param $range        字段格式为 '0-100'
     * @return type
     */
    public function downloadFileLocal($bucket,$key,$local_path,$range=''){
    	try {

    		if(empty($range)){
				$result = $this->cosClient->getObject(array(
			        'Bucket' 	=> 	$bucket,
			        'Key' 		=> 	$key,
			        'SaveAs'	=>	$local_path
			    ));
    		}else {
    			$result = $this->cosClient->getObject(array(
			        'Bucket' 	=> 	$bucket,
			        'Key' 		=> 	$key,
			        'Range' 	=> 'bytes='.$range,
			        'SaveAs'	=>	$local_path
			    ));
    		}
		    echo($result['Body']);
		} catch (\Exception $e) {
		    echo($e);
		}
    }

    /**
     * 设置返回header  (后期完善)
     * @param $bucket 	    存储桶名称
     * @param $save_path 	保存的文件地址(相对于文件桶)
     * @param $path 		文件所在路径
     * @param $range        字段格式为 '0-100'
     * @return type
     */
  //   public function downloadFileLocal($bucket,$key,$local_path,$range=''){
  //   	try {
		//     $result = $this->cosClient->getObject(array(
		//         'Bucket' => $bucket,
		//         'Key' => $key,
		//         'ResponseCacheControl' => 'string',
		//         'ResponseContentDisposition' => 'string',
		//         'ResponseContentEncoding' => 'string',
		//         'ResponseContentLanguage' => 'string',
		//         'ResponseContentType' => 'string',
		//         'ResponseExpires' => 'mixed type: string (date format)|int (unix timestamp)|\DateTime',
		//         'SaveAs' => $local_path));
		// } catch (\Exception $e) {
		//     echo "$e\n";
		// }
  //   }


    
}
