<?php

class BaseControl extends Control {

	// 登录验证
	protected function __init(){
		
		$user = M('user');
         if(!(isset($_SESSION['admin_id'])&&($user->where("id='".$_SESSION['admin_id']."'")->find())))
         {
			$this->error("没有登录，或登录超时，請重新登錄!",__APP__.'/Index/login');
			return;
         }                
	}
     

    /**
     * 信息添加或更新post数据处理
     * @param  [type]  $table       [description]
     * @param  string  $msg         [description]
     * @param  string  $filepath    [description]
     * @param  string  $imgpath     [description]
     * @param  array   $allowtype   [description]
     * @param  integer $water       [description]
     * @param  integer $thumb       [description]
     * @param  array   $thumb_param [description]
     * @param  integer $filesize    [description]
     * @return [type]               [description]
     */
    private function _uinit($msg='操作',$filepath='Public/allfile',$imgpath='images',$allowtype=array("jpg","jpeg","png",'pdf'),$water=0,$thumb=1,$thumb_param=array(145,120,6),$filesize=5242880){
        if(empty($_POST['title']) && empty($_POST['title_en'])){
        
                $this->error('不能添加空白数据！');
            
                exit;
        }
        

        //文件上传
        import("Lib.Upload");
        C('UPLOAD_IMG_DIR',$imgpath);
        $obj = new upload(ROOT_PATH.'/'.$filepath,$allowtype,$filesize,$water,$thumb,$thumb_param);

        $info = $obj->upload();
        
        if($info){//存在上传文件
            foreach($info as $v){
                if(isset($v['ext']) && $v['error']==0){
                    $_POST[$v['fieldname']] = $v['path'];
                    $_POST[$v['fieldname'].'_t'] = $v['thumb'];
                }else{
                    $_POST[$v['fieldname']] = $v['path'];
                    
                }
            }
        } 
        if(!isset($_POST['url'])){
            $_POST['url'] = '';
        }
        
        $_POST['create_time'] = isset($_POST['create_time'])?strtotime($_POST['create_time']):time();
        function trims(&$v,$k){
           $v = trim($v);
        }
        array_walk($_POST,'trims');
    }
     // 参数：（数据表，文件上传目录，图片上传目录，允许文件类型，最大文件大小，是否水印，是否缩略图，缩略图参数）

	/**
     * [upload 添加内容(用于所有内容)]
     * @param  [type]  $table       [数据表]
     * @param  [string]  $msg       [操作提示信息]
     * @param  string  $filepath    [pdf文件存放路径]
     * @param  string  $imgpath     [图片存放目录]
     * @param  array   $allowtype   [允许上传文件格式]
     * @param  integer $water       [是否添加水印]
     * @param  integer $thumb       [是否生成缩略图]
     * @param  array   $thumb_param [缩略图参数]
     * @param  integer $upFile      [修改上传文件字段]
     * @param  integer $filesize    [允许上传文件大小]
     * @return [type]               [无]
     */
	public function uploads($table,$act='add',$msg='操作',$filepath='Public/allfile',$imgpath='Public/allfile/images',$allowtype=array("jpg","jpeg","png",'pdf'),$water=0,$thumb=1,$thumb_param=array(145,120,6),$upFile=array('pic_url','pic_url_t','pic_url_en','pic_url_en_t','file_url','file_url_en'),$filesize=2048000){

        // 信息添加或更新post数据处理
        $this->_uinit($msg,$filepath,$imgpath,$allowtype,$water,$thumb,$thumb_param,$filesize);

        // 插入数据库
        $db = M($table);

        if($act=='save' && isset($_POST['id'])){
            // $upData = $db->field($upFile)->where("id=".$_POST['id'])->one();
            $upData = $db->where("id=".$_POST['id'])->one();
        }
      

        if($id = $db->$act()){
         
            // 如果置頂則將原來置頂取消
            if($act=='add' && isset($_POST['istop']) && $_POST['istop'] == 1){
                $db->where("istop = 1 and id!=$id")->save(array('istop'=>0));
                
            }
            // 更新使，更新文件字段
            if($act=='save' && isset($upData) && is_array($upData)){
                foreach($upData as $k=>$v){
                    if(isset($_POST[$k]) && !empty($_POST[$k])){
                        $file = ROOT_PATH.$v;
                        if(is_file($file)){
                            unlink($file);
                        }
                    }

                }
            }

            $msg = $act=='add' ? $msg.',id为'.$id.' 成功' : $msg.' 成功';

            $this->actionLog($msg);
            
            $this->success($msg);
            exit;
        }else{
            $msg = $act=='add' ? $msg.',id为'.$id.' 失败' : $msg.' 失败';

            $this->actionLog($msg);
            
            $this->error($msg);
            exit;
        }
       
	}

    // public function update($table,$msg='操作',$filepath='Public/allfile',$imgpath='Public/allfile/images',$allowtype=array("jpg","jpeg","png",'pdf'),$water=0,$thumb=1,$thumb_param=array(145,120,6),$filesize=2048000){
    //     $this->_uinit($msg,$filepath,$imgpath,$allowtype,$water0,$thumb,$thumb_param,$filesize);
    //     $db = M($table);
    //     if($db->save()){

    //     }else{

    //     }
    // }

    /**
     * 删除记录
     * @param  [type] $table     [表明]
     * @param  [type] $id        [删除的id]
     * @param  array  $delfields [需要同时删除的附属文件]
     * @return [type]            [boolean]  
     */
    public function dels($table,$msg='操作',$id,$delfields=array('pic_url','pic_url_t','pic_url_en','pic_url_en_t','file_url','file_url_en')){

        $db = M($table);
        // $data = $db->field($delfields)->where("id=$id")->one();
        $data = $db->where("id=$id")->one();
       
        if($db->del($id)){
            // 同时删除的附属文件
            if(is_array($data)){
                foreach($data as $v){
                    $file = ROOT_PATH.$v;
                    if(is_file($file)){
                        unlink($file);
                    }
                }
            }
            // 操作成功，进行日志记录
            $this->actionLog($msg.' 成功');
            return $id;
            
        }else{
            $this->actionLog($msg.' 失败');

            return false;
           
        }

    }
	    /**
     * 令牌验证
     * @param mixed $data
     * @return
     */
    private function autoCheckToken($data) {
        $name = C('TOKEN_NAME');

     	if(isset($_SESSION[$name])) {
        	
            // 当前需要令牌验证
            if(empty($data) || $_SESSION[$name] != $data) {
            	
                // 非法提交
                return false;
            }
            
            // 验证完成销毁session
            //unset($_SESSION[$name]);
        }else {
        	return false;
        }
        
        return true;
    }


    /**
     * 日志记录方法
     * @param  [type] $msg [description]
     * @return [type]      [description]
     */
    private function actionLog($msg,$table='log_2'){
        $db = M($table);
        $data = array();
        $data['content'] = $msg;
        $data['create_time'] = time();

        $db->add($data);

    }

}

?>