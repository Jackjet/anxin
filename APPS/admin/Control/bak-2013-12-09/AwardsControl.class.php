<?php
/**
 * Author ldm
 * Description 资质荣誉控制
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数
class AwardsControl extends BaseControl {
	private $pic_url;
	private $errorMsg;
	private $error;
	
	public function index() {
		
		
		$Awards=M('awards_2');

        import ( "Lib.Page" ); //导入分页类
		$count = $Awards->count(); //计算总数
		$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
        $p->setConfig ( 'header', '条荣誉' );
		$list=$Awards->order('create_time desc,id desc,orders')->limit($p->firstRow.','.$p->listRows)->select();
		// echo $Awards->getLastSql();
        $page = $p->show();
		$this->assign('header_title','Awards');
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
	public function ajaxType() {

		if ($_GET ['do'] == 'list') {
			// $_GET ['page'] = $_POST ['page'];
			$type=$_POST['type']?$_POST['type']:0;
			$Awards=M('awards_2');
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_type' );

			$w = ' 1 ';
		
			if($type){
				$w.=" and type=$type";
			}

			$count = $Awards->where($w)->count($w);
		

			$p = new Page ( $count, NUM_ONE_PAGE );//NUM_ONE_PAGE
			$p->setConfig ( 'header', '条荣誉' );
			$data = array();
			if ($data['data'] = $Awards->where($w)->order('create_time desc,id desc')->limit($p->firstRow.','.$p->listRows)->select()) {
				$data['status'] = 0;
				$data['style'] = "manu"; //分页样式 
				$data['page'] = $p->show();
			} else {
				$data['status'] = 1;
			}
		
			$this->_ajax ( $data );
		}
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
			$_GET ['type'] = $_POST ['type'];
			$Awards=M('awards_2');
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_page' );

			$where = " 1 ";
			if($_GET['type']){
				$where.=' and type='.$_GET['type'];
			}
			$count = $Awards->where($where)->count ($where);
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '条通告' );
			$data = array();
			if ($data['data'] = $Awards->where($where)->order('create_time desc,id desc')->limit($p->firstRow.','.$p->listRows)->select()) {

				$data['status'] = 0;
				$data['style'] = "manu"; //分页样式   
				$data['page']= $p->show ();
				
			} else {
				$data['status'] = 1;
			}
			
			$this->_ajax ( $data );
		}
	}
    public function upload() {
		if(!empty($_FILES)&&$this->autoCheckToken($_POST['__TOKEN__'])) {
			$type=$_POST['utype']?$_POST['utype']:'1';
			$type_dir="honor";
			switch ($type) {
				case '1':
					$type_dir="honor";
					break;
				case '2':
					$type_dir="copyright";
					break;
				case '3':
					$type_dir="patent";
					break;
				case '4':
					$type_dir="certificate";
					break;
				case '5':
					$type_dir="other";
					break;
				default:
					
					break;
			}
			//如果有文件上传 上传附件
			$saveRule = "award_".date('ymd');
			$maxSize = 2048000;
			if(!empty($_FILES['pic_url']['name'])){

				// $file = $_FILES['pic_url'];
				// $savePath = realpath("../Public/awards/".$type_dir);
				// $this->pic_url = $this->_upload($file,$maxSize,$savePath,$saveRule);


				import("Lib.Upload");

				$obj = new upload(ROOT_PATH."/Public/awards/".$type_dir,array("jpg","jpeg","png"),2048000,0,1,array(150,120,6));
				//$obj->saveRule = 'uniqid';
				// $obj->size = 2048000;//最大上传大小
				// $obj->ext  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
				// $obj->path =  ROOT_PATH."/Public/awards/".$type_dir; // 设置图片上传目录

				// // 开启图片水印
				// $obj->thumbOn = 1;//进行缩略图处理

				// $obj->thumb = array(150,120);//进行缩略图处理
				// // $obj->thumbMaxWidth = 150;//最大宽度
				// // $obj->thumbMaxHeight = 120;//最大宽度
				// $obj->thumbPrefix = 'awards_thumb_';//最大宽度
				// $obj->thumbPath = $obj->savePath.'/';
				
				$info = $obj->upload();
				
				if(!$info){
					$this->error($obj->getError());
					exit;
				}
				
				//$info = $obj->getUploadFileInfo();
				
				// $data['pic_url'] = 'awards/'.$type_dir.'/'.$info[0]['savename'];
				// $data['pic_url_thumb'] = 'awards/'.$type_dir.'/awards_thumb_'.$info[0]['savename'];
				$path = substr($info[0]['path'], 7);
				$thumb = substr($info[0]['thumb'], 7);

				$data['pic_url'] = $path;
				$data['pic_url_thumb'] = $thumb;
			}
			
			// dump($data);
			// exit;
			$model = M ('awards_2');
        	//保存当前数据对象

        	// 图片保存名称
			
			// 分类
			$data['type'] = $type;
			// 是否使用
			$data['isshow'] = $_POST['isshow'];
			// 中文名称
       		$data['title']=$_POST['title'];
       		// 英文名称
			$data['title_en']=$_POST['title_en'];
			// 所属子公司
			$data['cname'] = $_POST['cname']?$_POST['cname']:' ';
			// 排序
			$data['orders'] = $_POST['orders']?$_POST['orders']:1;
			// 时间
			if(!isset($_POST['create_time'])){
       			$data['create_time']=time();
			}else {
				$data['create_time']= strtotime($_POST['create_time']);
			}
		
			
        	$list=$model->add($data);
        	
        	if($list){
				// dump($data);
				// dump($list);
				// echo 123;
				// exit;
				$this->success ('添加成功！');
        	}else{
				
				$this->error ('添加失败!');
       		}
			
		}else{
				
				$this->error ('错误提交!');
		}
	}
	/**
	 * AwardsAction::_upload()
	 * 上传附件并将Awards添加到数据库中
	 * @param string $name 文件名
	 * @return void
	 */
	private function _upload($file="",$maxSize="",$savePath="",$saveRule=""){
		$saveName = "";
		if((!empty($file))&&$this->checkType($file)&&$this->checkSize($file,$maxSize)){
			$saveName = $this->saveFile($file,$savePath,$saveRule);
		}

		if($this->error > 0) {
            $this->assign("jumpUrl",__URL__);
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
      			// dump($file);
      			// dump($savePath ."/". $saveName);
      			echo "upload error!";
      			exit;
      		}
			
        }
	}
	/**
	 * ajax删除荣誉，返回json类型;
	 * return info 样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxDelAwards() {
		if ($_GET ['do'] == 'list'&&!empty($_POST['id'])) {
			$_GET ['id'] = $_POST ['id'];
			$_GET ['page'] = $_POST ['page'];
			$_GET['type'] = $_POST['type'];
			$Awards = M ( 'awards_2' );
			$result = $Awards->delete($_POST['id']);
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_del_Awards' );
			$count = $Awards->count ();
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '条荣誉' );
			$data = array();
			if ((false !== $result)&&($data['data'] = $Awards->order('create_time desc ,id desc')->limit($p->firstRow.','.$p->listRows)->select())) {
				$data['status'] = 0;
				$data['style'] = "manu"; //分页样式
				$data['page'] = $p->show();
				$data['tip'] = "删除成功";
			} else {
				$data['status'] = 1;
			}
			$this->_ajax ( $data );
		}
	}
	/**
	 * 跳转更新通告;
	 * 
	 *
	 */
	public function toUpdate(){
		if(isset($_GET['id'])){
			$Awards = M ( 'awards_2' );
			$result = $Awards->where('id ='.$_GET['id'])->find();
			$this->assign('title',$result['title_en']);
			$this->assign('award',$result);

			

			$this->display();
		}
	}
	
	/**
	 *根据id更新通告
	 *
	 */
	public function update(){
		if($this->autoCheckToken($_POST['__TOKEN__'])){
			$type=$_POST['utype']?$_POST['utype']:'1';
			$type_dir="honor";
			switch ($type) {
				case '1':
					$type_dir="honor";
					break;
				case '2':
					$type_dir="copyright";
					break;
				case '3':
					$type_dir="patent";
					break;
				case '4':
					$type_dir="certificate";
					break;
				case '5':
					$type_dir="other";
					break;
				default:
					
					break;
			}
			//如果有文件上传 上传附件
			// $saveRule = "award_".date('ymd');
			// $maxSize = 2048000;
			
			if(!empty($_FILES['pic_url']['name'])){
				import("Lib.Upload");

				$obj = new upload(ROOT_PATH."/Public/awards/".$type_dir,array("jpg","jpeg","png"),2048000,0,1,array(150,120,6));
				$info = $obj->upload();
				if(!$info){
					$this->error($obj->getError());
					exit;
				}
				$path = substr($info[0]['path'], 7);
				$thumb = substr($info[0]['thumb'], 7);

				$data['pic_url'] = $path;
				$data['pic_url_thumb'] = $thumb;
			}


			$model = M ('awards_2');
        	//保存当前数据对象

        	// 图片保存名称
			// $data['pic_url'] = $this->pic_url;
			// 分类
			$data['type'] = $type;
			// 是否使用
			$data['isshow'] = $_POST['isshow'];
			// 中文名称
       		$data['title']=$_POST['title'];
       		// 英文名称
			$data['title_en']=$_POST['title_en'];
			// 所属子公司
			$data['cname'] = $_POST['cname']?$_POST['cname']:' ';
			// 排序
			$data['orders'] = $_POST['orders']?$_POST['orders']:1;
			// 时间
			if(!isset($_POST['create_time'])){
       			$data['create_time']=time();
			}else {
				$data['create_time']= strtotime($_POST['create_time']);
			}
        	$list=$model->where("id=".$_POST['id'])->save($data);

        	// echo $model->getLastSql();
        	// exit;
        	if($list){
			
				$this->success ('修改成功！');
        	}else{
			
				$this->error ('修改失败,或无内容更新!');
       		}
		}else{
			
				$this->error ('错误提交!');
		}
	}
    /**
     * AwardsAction::autoCheckToken()
     * 令牌验证
     * @param mixed $data
     * @return
     */
    private function autoCheckToken($data) {
        $name   = C('TOKEN_NAME');
        if(isset($_SESSION[$name])) {
        
            // 当前需要令牌验证
            if(empty($data) || $_SESSION[$name] != $data) {
                // 非法提交
                return false;
            }
            // 验证完成销毁session
            //unset($_SESSION[$name]);
        }else return false;
        return true;
    }
}
 
 ?>