<?php
/**
 * Author 方振
 * Description 通函控制
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数
class CircularControl extends BaseControl {
	private $file_url;
	private $file_url_en;
	private $errorMsg;
	private $error;
	public function index() {
		$circular=M('circular_2');
        import ( "LibPage" ); //导入分页类
		$count = $circular->count(); //计算总数
		$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
        $p->setConfig ( 'header', '条通函' );
		$list=$circular->order('create_time desc,id desc')->limit($p->firstRow.','.$p->listRows)->select();
        $page = $p->show();
		$this->assign('header_title','Circular');
		$this->assign('list',$list);
        $this->assign('page',$page);
		$this->display();
	}
    /**
	 * ajax通函分页，返回json类型;
	 * return data 分页数据;
	 * return info 分页导航及分页样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxShowPage() {
		if ($_GET ['do'] == 'list') {
			$_GET ['page'] = $_POST ['page'];
			$circular=M('circular_2');
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_page' );
			$count = $circular->count ();
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '条通函' );
			$data = array();
			if ($data['data'] = $circular->order('create_time desc,id desc')->limit($p->firstRow.','.$p->listRows)->select()) {
				$data['status'] = 0;
				$data['style'] = "manu"; //分页样式   
				$data['page'] = $p->show ();
			} else {
				$data['status'] = 1;
				$data['tip'] = "抱歉更新列表出错，请刷新或联系网管.";
				
			}
			$this->_ajax ( $data);
		}
	}
    public function upload() {
    	if(empty($_POST['title']) || empty($_POST['title_en'])){
    	
    		$this->error('不能添加空白数据！');
    	
    		exit;
    	}
		if($this->autoCheckToken($_POST['__TOKEN__'])) {
			//如果有文件上传 上传附件
			$saveRule = "a".date('ymd');
			$maxSize = 2048000;
			if(!empty($_FILES['circular']['name'])){
				$file = $_FILES['circular'];
				// $savePath = realpath("../home/ir/circulars");
					// $savePath = "./Public/circulars/zh";
				$savePath = ROOT_PATH."Public/circulars/zh";  //中文pdf存放路径

				$this->file_url = $this->_upload($file,$maxSize,$savePath,$saveRule);
			}
			
			if(!empty($_FILES['circular_en']['name'])){
				$file = $_FILES['circular_en'];
				// $savePath = realpath("../home/ir/circulars_en");
					// $savePath = "./Public/circulars/en";
				$savePath = ROOT_PATH."Public/circulars/en";  //中文pdf存放路径

				$this->file_url_en = $this->_upload($file,$maxSize,$savePath,$saveRule);
			}
			
			$model = M ('circular_2');
        	//保存当前数据对象
			$data['file_url'] = $this->file_url;
			$data['file_url_en'] = $this->file_url_en;
       		$data['title']=$_POST['title'];
			$data['title_en']=$_POST['title_en'];
       		if(!isset($_POST['create_time'])){
       			$data['create_time']=date('Y-m-d');
			}else {
				$data['create_time']= $_POST['create_time'];
			}
        	$list=$model->add ($data);
        	if($list!==false){

				$this->success ('添加成功！');
        	}else{
			
				$this->error ('添加失败!');
       		}
			
		}else{
		
				$this->error ('添加失败!');
		}
	}
	/**
	 * CircularAction::_upload()
	 * 上传附件并将Circular添加到数据库中
	 * @param string $name 文件名
	 * @return void
	 */
	private function _upload($file="",$maxSize="",$savePath="",$saveRule=""){
		$saveName = "";
		$this->errorMsg($file,$maxSize);
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
		}else {$this->error = 8;$this->errorMsg = "不支持该文件类型";return false;}
	}
	private function checkSize($file="",$maxSize=""){
		if($file["size"]<2048000){
				return true;
		}else {$this->error = 1;$this->$errorMsg = "文件大小不能超过".($maxSize / 1024 )."KB";return false;}
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
      		move_uploaded_file($file["tmp_name"],$savePath ."/". $saveName);
			$this->errorMsg = "文件上传成功";
			return $saveName;
        }
	}
	/**
	 * ajax删除通函，返回json类型;
	 * return info 样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxDelCircular() {
		
	
		if ($_GET ['do'] == 'list'&&!empty($_POST['id'])) {
			$_GET ['id'] = $_POST ['id'];
			$_GET ['page'] = $_POST ['page'];
			$circular = M ( 'circular_2' );
			$result = $circular->delete($_POST['id']);
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_del_circular' );
			$count = $circular->count ();
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '篇通函' );
			$data = array();
			if ((false !== $result)&&($data['data'] = $circular->order('create_time desc ,id desc')->limit($p->firstRow.','.$p->listRows)->select())) {
				$data['status'] = 0;
				$data['style']  = "manu"; //分页样式  
				$data['page'] = $p->show();
				$data['tip'] = "刪除成功";
			} else {
				$data['status'] = 1;
			}
			$this->_ajax ( $data);
		}
	}
	/**
	 * 跳转更新通函;
	 * 
	 *
	 */
	public function toUpdate(){
		if(isset($_GET['id'])){
			$circular = M ( 'circular_2' );
			$result = $circular->where('id ='.$_GET['id'])->find();
			$this->assign('title',$result['title_en']);
			$this->assign('circular',$result);
			$this->display();
		}
	}
	
	/**
	 *根据id更新通函
	 *
	 */
	public function update(){
		if($this->autoCheckToken($_POST['__TOKEN__'])){
			if(!empty($_FILES)) {
				$saveRule = "a".date('ymd');
				$maxSize = 2048000;
				//如果有文件上传 上传附件
				if(!empty($_FILES['circular']['name'])){
					$file = $_FILES['circular'];
					// $savePath = realpath("../home/ir/circulars");
						// $savePath = './Public/circulars/zh';
					$savePath = ROOT_PATH."Public/circulars/zh";  //中文pdf存放路径

					$data['file_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
				if(!empty($_FILES['circular_en']['name'])){
					$file = $_FILES['circular_en'];
					// $savePath = realpath("../home/ir/circulars_en");
						// $savePath = './Public/circulars/en';
					$savePath = ROOT_PATH."Public/circulars/en";  //中文pdf存放路径

					$data['file_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
			}
			$model = M ('circular_2');
        	//保存当前数据对象
       		$data['title']=$_POST['title'];
			$data['title_en']=$_POST['title_en'];
       		if(!isset($_POST['create_time'])){
       			$data['create_time']=date('Y-m-d');
			}else {
				$data['create_time']= $_POST['create_time'];
			}
        	$list=$model->where('id='.$_POST['id'])->save ($data);
        	if($list!==false){
		
				$this->success ('修改成功！',__CONTROL__);
        	}else{
			
				$this->error ('修改失败!');
       		}
		}else{
			
				$this->error ('修改失败!');
		}
	}
    /**
     * CircularAction::autoCheckToken()
     * 令牌验证
     * @param mixed $data
     * @return
     */
    private function autoCheckToken($data) {
        $name   = C('TOKEN_NAME');
        if(isset($_SESSION[$name])) {
        	// list($k,$v) = explode('_',$data);
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