<?php
/**
 * Author ldm
 * Press媒体中心
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数

class PressControl extends BaseControl {
	private $file_url;
	private $file_url_en;
	private $pic_url;
	private $errorMsg;
	private $error;
	

	public function index() {

		$press=M('press_2');
	
        import ( "Lib.Page" ); //导入分页类
		$count = $press->count(); //计算总数
		$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
        $p->setConfig ( 'header', '条新闻' );
		$list=$press->order('id desc,create_time desc')->limit($p->firstRow.','.$p->listRows)->select();
        $page = $p->show();
		$this->assign('header_title','Press');
		$this->assign('list',$list);
        $this->assign('page',$page);

		$this->display();
	}





    /**
	 * ajax通告分页，返回json类型;
	 * return data 分页数据;
	 * return info 分页导航及分页样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxShowPage() {

		if ($_GET ['do'] == 'list') {
			$_GET ['page'] = $_POST ['page'];
			$press=M('press_2');
			import ( "Lib.Page" ); //导入分页类 
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_page' );
			$count = $press->count ();
			
			$p = new Page ( $count, NUM_ONE_PAGE );

			$p->setConfig ( 'header', '条新闻' );
			$data = array();
			
			if ($data['data'] = $press->order('create_time desc,id desc')->limit($p->firstRow.','.$p->listRows)->select()) {
				
				$data['status'] = 0;
				$data['style'] ="manu"; //分页样式   
				$data['page'] = $p->show ();
				
			} else {
				
				$data['status'] = 1;
			}
			
			$this->_ajax( $data);
		}
	}

	/**
	 * 發佈新聞
	 * @return [type] [description]
	 */
    public function upload() {
    	if(empty($_POST['title']) || empty($_POST['title_en'])){
    	
    		$this->error('不能添加空白数据！');
    	
    		exit;
    	}

		if(!empty($_FILES)&&$this->autoCheckToken($_POST['__TOKEN__'])) {
			//如果有文件上传 上传附件
			$saveRule = "a".date('ymd');
			$maxSize = 2048000;
			
			
			$data = array();
			//dump($_FILES['press']);
			//封面图片
			if(!empty($_FILES['pic_url']['name'])){
				
				import("Lib.Upload");

				$obj = new upload(ROOT_PATH."/Public/press/images",array("jpg","jpeg","png"),2048000,0,1,array(210,140,6));

				$info = $obj->upload();
				
				if(!$info){
					// dump($obj->getError());
					// exit;
					$this->error($obj->getError());
					exit;
				}

				// dump($info);
				$data['pic_url'] = str_replace("Public/press/images/", "", $info[0]['thumb']);
				// echo $data['pic_url'];
				// dump($data['pic_url']);
				$file = ROOT_PATH.$info[0]['path'];
				// echo $file;
				if(is_file($file)){
					unlink($file);
				}
				
				
			}
			
			
			// 中文文件
			if(!empty($_FILES['press']['name'])){
				
				$file = $_FILES['press'];
				// $savePath = realpath("./");  //中文pdf存放路径
				//$savePath = realpath("./Public/press/zh");  //中文pdf存放路径
				$savePath = ROOT_PATH."Public/press/zh";  //中文pdf存放路径
				
				$data['file_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

			}
			
			
			// 英文文件
			if(!empty($_FILES['press_en']['name'])){
				
				$file = $_FILES['press_en'];
				//$savePath = "./Public/press/en";   //英文pdf文件存放路径
				$savePath = ROOT_PATH."Public/press/en";  //中文pdf存放路径
				
				
				$data['file_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				
			}
			
			
			$model = M("press_2");
			
			//保存的数据
			
			// $data['pic_url'] = $this->pic_url?$this->pic_url:"";
			// $data['file_url'] = $this->file_url?$this->file_url:"";
			// $data['file_url_en'] = $this->file_url_en?$this->file_url_en:"";

			$data['type'] = @$_POST['type'] ? $_POST['type'] :1;
			$data['title'] = trim($_POST['title']);
			$data['des'] = trim($_POST['des']);
			$data['title_en'] = trim($_POST['title_en']);
			$data['des_en'] = trim($_POST['des_en']);
			$data['url'] = trim($_POST['url']);

			$data['istop'] = $_POST['istop'];

			// 如果置頂則將原來置頂取消
			if($data['istop'] && $data['istop'] == 1){
				$model->where("istop = 1")->save(array('istop'=>0));
				// echo $model->getLastSql();
				// dump($data);
				// exit;
			}
			
			
			if(!isset($_POST['create_time'])){
				$data['create_time'] = date('Y-m-d');
			}else{
				$data['create_time'] = $_POST['create_time'];
			}
			
			// dump($data);
			
			$list = false;
			if(is_array($data)){
				
				$list = $model->add($data);
				// dump($list);
				// echo $model->getLastSql();
				// exit;
				if($list){

						$this->success ('添加成功！');
				}else{
						
						$this->error ('添加失败!');

				}
				

			}
        
		}else{
			$this->error("添加失败！");
		}
	}
	/**
	 * AnnouncementAction::_upload()
	 * 上传附件并将press添加到数据库中
	 * @param string $name 文件名
	 * @return void
	 */
	private function _upload($file="",$maxSize="",$savePath="",$saveRule=""){
		$saveName = "";
		if((!empty($file))&&$this->checkType($file)&&$this->checkSize($file,$maxSize)){
			$saveName = $this->saveFile($file,$savePath,$saveRule);
		}

		if($this->error > 0) {
           
				//捕获上传异常
			$this->error($this->errorMsg);
		}else {
			//取得成功上传的文件信息
			return $saveName;
		}
	}
	
	private function checkType($file=""){
		
		if(($file["type"] == "image/gif")||
		   ($file["type"] == "application/pdf")||
		   ($file["type"] == "image/jpeg")||
		   ($file["type"] == "image/pjpeg")){
				return true;
		}else {$this->error = 8;$this->errorMsg = "不支持该文件类型";}
	}
	private function checkSize($file="",$maxSize=""){
		if($file["size"]<2048000){
				return true;
		}else {
			$this->error = 1;
			$this->$errorMsg = "文件大小不能超过".($maxSize / 1024 )."KB";
			return false;
		}
	}
	private function errorMsg($file="",$maxSize=""){
		switch($file['error']){
			case 0 : $this->error = 0;$this->errorMsg = "文件上传成功";break; 	
			case 1 : $this->error = 1;$this->errorMsg = "文件大小不能超过".($maxSize / 1024 )."KB";break; 	
			case 2 : $this->error = 2;$this->errorMsg = "文件大小不能超过".($maxSize / 1024 )."KB";break;
			case 3 : $this->error = 3;$this->errorMsg = "文件没有上传成功";break;
			case 4 : $this->error = 4;$this->errorMsg = "没有文件被上传";break;
			case 6 : $this->error = 6;$this->errorMsg = "找不到临时文件夹";break;
			case 7 : $this->error = 7;$this->errorMsg = "文件写入失败";break;
		}
	}
	private function saveFile($file="",$savePath="",$saveRule=""){
		if(!empty($file)){
			$tmp = explode('.',$file["name"]);
			$ext = '.'.$tmp[count($tmp)-1];
			$saveName = $saveRule.$ext;
			if (file_exists($savePath."/".$saveName)){
				$index = 1;
				$suffix = "";
      			for(;file_exists($savePath ."/". $saveName);$index++){
						$suffix = '('.$index.')';
						$saveName = $saveRule . $suffix . $ext;
					}
      		} 
      		
     		
 			
      		if(move_uploaded_file($file["tmp_name"],$savePath ."/". $saveName)){
      			
      			$this->errorMsg = "文件上传成功";
				return $saveName;
      		}else{
      			
      			//dump($file);
      			echo $this->errorMsg($file);
      			// echo $savePath ."/". $saveName;
      			// echo "<br/>";
      			header("Content-Type:text/html;charset=utf-8");
      			die('上传失败');

      		}
			
        }
	}
	/**
	 * ajax删除通函，返回json类型;
	 * return info 样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxDelPress() {
		
		if ($_GET ['do'] == 'list'&&!empty($_POST['id'])) {
			$_GET ['id'] = $_POST ['id'];
			//$_GET ['page'] = $_POST ['page'];
			$press = M ( 'press_2' );
			$result = $press->delete($_POST['id']);

			if($result){
				$this->_ajax(array('status'=>'1'));
			}else{
				$this->_ajax(array('status'=>'2'));
			}
		}
	}
	/**
	 * 跳转更新通告;
	 * 
	 *
	 */
	public function toUpdate(){
		if(isset($_GET['id'])){
			$Press = M( 'press_2' );
			$result = $Press->where('id ='.$_GET['id'])->find();
			$this->assign('title',$result['title_en']);
			$this->assign('press',$result);
			$this->display();
		}else{
			redirect(__APP__);
			exit;
		}
	}
	
	/**
	 *根据id更新通告
	 *
	 */
	public function update(){
		if(!isset($_POST['id'])){
			redirect(__APP__);
			exit;
		}
		if($this->autoCheckToken($_POST['__TOKEN__'])){
			$data=array();
			if(!empty($_FILES)) {
				$saveRule = "a".date('ymd');
				$maxSize = 2048000;


				//封面图片
			if(!empty($_FILES['pic_url']['name'])){
				
				import("Lib.Upload");

				$obj = new upload(ROOT_PATH."/Public/press/images",array("jpg","jpeg","png"),2048000,0,1,array(210,140,6));

				$info = $obj->upload();
				
				if(!$info){
					// dump($obj->getError());
					// exit;
					$this->error($obj->getError());
					exit;
				}

				// dump($info);
				$data['pic_url'] = str_replace("Public/press/images/", "", $info[0]['thumb']);
				// dump($data['pic_url']);
				$file = ROOT_PATH.$info[0]['path'];
				// echo $file;
				if(is_file($file)){
					unlink($file);
				}
			}
			
				//如果有文件上传 上传附件
				if(!empty($_FILES['press']['name'])){
					$file = $_FILES['press'];

					$savePath = ROOT_PATH."Public/press/zh";  //中文pdf存放路径
					
					$data['file_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				if(!empty($_FILES['press_en']['name'])){
					$file = $_FILES['press_en'];
					
					$savePath = ROOT_PATH."Public/press/en";  //英文pdf存放路径

					$data['file_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
			}


			$model = M ('press_2');
        	//保存当前数据对象
			$data['id'] = $_POST['id'];
			$data['type'] = $_POST['type'];
			$data['title'] = trim($_POST['title']);
			$data['des'] = trim($_POST['des']);
			$data['title_en'] = trim($_POST['title_en']);
			$data['des_en'] = trim($_POST['des_en']);
			$data['url'] = trim($_POST['url']);

			$data['istop'] = $_POST['istop'];

			// 如果置頂則將原來置頂取消
			if($data['istop'] && $data['istop'] == 1){
				$model->where("istop = 1")->save(array('istop'=>0));
				// echo $model->getLastSql();
				// dump($data);
				// exit;
			}
			
       		if(!isset($_POST['create_time'])){
       			$data['create_time']=date('Y-m-d');
			}else {
				$data['create_time']= $_POST['create_time'];
			}
			// dump($data);
 
        	if($data){
        	
        		
        		$result = $model->save($data);
        		// var_dump($result);
        		// echo $model->getLastSql();
        		// exit;

        		if($result>=0){
					
					$this->success ('修改成功！',__CONTROL__);
        		}else{
        		
	        		
					$this->error ('修改失败!');

        		}

        	}else{
	        		
					$this->error ('修改失败!');
        	}
        
		}else{
	        		
					$this->error ('修改失败!');
		}
	}
    /**
     * AnnouncementAction::autoCheckToken()
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
}
 
 ?>