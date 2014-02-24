<?php
/**
 * Author 方振
 * Description Report控制
 */
define("NUM_ONE_PAGE",3);  //每页显示篇数
class ReportControl extends BaseControl {
	private $file_url;
	private $file_url_en;
	private $errorMsg;
	private $error;
	public function index() {
		$report=M('report_2');
        import ( "Lib.Page" ); //导入分页类
		$count = $report->count(); //计算总数
		$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
        $p->setConfig ( 'header', '条財務報告' );
		$list=$report->order('create_year desc,id desc')->limit($p->firstRow.','.$p->listRows)->select();
        $page = $p->show();
		$this->assign('header_title','Report');
		$this->assign('list',$list);
        $this->assign('page',$page);
		$this->display();
	}
    /**
	 * ajax財務報告分页，返回json类型;
	 * return data 分页数据;
	 * return info 分页导航及分页样式
	 * return status 成功返回0，错误返回1
	 */
	public function ajaxShowPage() {
		if ($_GET ['do'] == 'list') {
			$_GET ['page'] = $_POST ['page'];
			$report=M('report_2');
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_page' );
			$count = $report->count ();
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '条財務報告' );
			$data = array();
			if ($data['data'] = $report->order('create_year desc,id desc')->limit($p->firstRow.','.$p->listRows)->select()) {
				$data['status'] = 0;
				$data['style'] = "manu"; //樣式
				$data['page'] = $p->show();
			} else {
				$data['status'] = 1;
			}
			$this->_ajax ( $data );
		}
	}
    public function upload() {
    
    	if((empty($_POST['a_name']) && empty($_POST['i_name'])) && (empty($_FILES['a_url']['name'])) && empty($_FILES['i_url']['name'])){
    		
    		
    		$this->error('请提交非空数据！');
    		exit;
    	}

		if(!empty($_FILES)&&$this->autoCheckToken($_POST['__TOKEN__'])) {

			import("Lib.Upload"); //导入上传类
			// import("ORG.Util.UploadFile");//图片处理类
			$data = array();
			$maxSize =2048000 ; // 讴置附件上传大小

			// 根据提交方式进行表单保存 $_POST['uptype'] 1：ftp上传 2：直接上传
			if($_POST['uptype']==1){//ftp上传


/**********************ftp年报******************************/

				// 年报封面-中文
				if(!empty($_FILES['a_img_zh_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_zh_ftp'];
						// $savePath = "./Public/reports/images/";

						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "a_img_zh_".date('ymdHi');
						
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 年报封面-中文
				if(!empty($_FILES['a_img_en_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_en_ftp'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "a_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}

					// 年报pdf文件名- 中文
					$data['a_url'] = $_POST['a_name']?$_POST['a_name']:'';
					// 年报pdf文件名- 英文
					$data['a_url_en'] = $_POST['a_name_en']?$_POST['a_name_en']:'';

				/**********************ftp中期******************************/
				// 中期封面-中文
				if(!empty($_FILES['i_img_zh_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_zh_ftp'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "i_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期封面-中文
				if(!empty($_FILES['i_img_en_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_en_ftp'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "i_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期pdf文件名- 中文
				$data['i_url'] = $_POST['i_name']?$_POST['i_name']:'';
				// 中期pdf文件名- 中文
				$data['i_url_en'] = $_POST['i_name_en']?$_POST['i_name_en']:'';



			

			}else{ //直接上传
				/**********************年报******************************/
				// 年报封面-中文
				if(!empty($_FILES['a_img_zh']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_zh'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "a_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 年报封面-英文
				if(!empty($_FILES['a_img_en']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_en'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "a_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
				// 年报文档 - 中文
				if(!empty($_FILES['a_url']['name'])){//ftp上传年报封面
						$file = $_FILES['a_url'];
						// $savePath = "./Public/reports/zh/";
						$savePath = ROOT_PATH."Public/reports/zh";  //中文pdf存放路径

						$saveRule = "a_url_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				// 年报文档 - 英文
				if(!empty($_FILES['a_url_en']['name'])){//ftp上传年报封面
						$file = $_FILES['a_url_en'];
						// $savePath = "./Public/reports/en/";
						$savePath = ROOT_PATH."Public/reports/en";  //中文pdf存放路径

						$saveRule = "a_url_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				/**********************中期******************************/
				// 中期封面-中文
				if(!empty($_FILES['i_img_zh']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_zh'];
						// $savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "i_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期封面-英文
				if(!empty($_FILES['i_img_en']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_en'];
						$savePath = "./Public/reports/images/";
						$savePath = ROOT_PATH."Public/reports/images";  //中文pdf存放路径

						$saveRule = "i_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
				//中期文档 - 中文
				if(!empty($_FILES['i_url']['name'])){//ftp上传年报封面
						$file = $_FILES['i_url'];
						// $savePath = "./Public/reports/zh/";
						$savePath = ROOT_PATH."Public/reports/zh";  //中文pdf存放路径

						$saveRule = "i_url_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				// 中期文档 - 英文
				if(!empty($_FILES['i_url_en']['name'])){//ftp上传年报封面
						$file = $_FILES['i_url_en'];
						// $savePath = "./Public/reports/en/";
						$savePath = ROOT_PATH."Public/reports/en";  //中文pdf存放路径

						$saveRule = "i_url_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}


			}



		/**************************保存***************************/

					
					$model = M ('report_2');
		        	
		        	

		       		if(!isset($_POST['create_time'])){
		       			$data['create_year']=date('Y');
					}else {
						$data['create_year']= (int)date("Y",strtotime($_POST['create_time']));
					}
					// dump($data);
					
		        	$list=$model->add ($data);
		        	// echo $model->getLastSql();
		        	// exit;
		        	if($list!==false){
					
						$this->success ('添加成功！');
						exit;
		        	}else{
					
						$this->error ('添加失败!');
						exit;
		       		}
				
			
		}else{
			$this->error('非法提交！');
			exit;
		}
	}

	
	/**
	 * ReportAction::_upload()
	 * 上传附件
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
	public function ajaxDelReport() {
		if ($_GET ['do'] == 'list'&&!empty($_POST['id'])) {
			$_GET ['id'] = $_POST ['id'];
			$_GET ['page'] = $_POST ['page'];
			$report = M ( 'report_2' );
			$result = $report->delete($_POST['id']);
			import ( "Lib.Page" ); //导入分页类      
			// C ( 'PAGE_NUMBERS', '5' ); //显示前后共5页的按钮   
			C ( 'PAGE_VAR', 'page' );
			// C ( 'AJAX_FUNCTION', 'ajax_del_report' );
			$count = $report->count ();
			$p = new Page ( $count, NUM_ONE_PAGE );
			$p->setConfig ( 'header', '篇財務報告' );
			$data = array();
			if ((false !== $result)&&($data['data'] = $report->order('create_year desc ,id desc')->limit($p->firstRow.','.$p->listRows)->select())) {
				$data['status'] = 0;
				$data['style'] = "manu"; //分页样式   
				$data['page'] = $p->show ();
				$data['tip'] = "删除成功.";
				
			} else {
				$data['status'] = 1;
			}
			$this->_ajax ( $data );
		}
	}
	/**
	 * 跳转更新財務報告;
	 * 
	 *
	 */
	public function toUpdate(){
		if(isset($_GET['id'])){
			$report = M ( 'report_2' );
			$result = $report->where('id ='.$_GET['id'])->find();
			$this->assign('title','Report');
			$this->assign('report',$result);
			$this->display();
		}else{
			go(__APP__);
			exit;
		}
	}
	
	/**
	 *根据id更新財務報告
	 *
	 */
	public function update(){
		if(!isset($_POST['id'])){
			go(__CONTROL__);
			exit;
		}
		$data = array();
		

		if($this->autoCheckToken($_POST['__TOKEN__'])) {

			import("Lib.Upload"); //导入上传类
			// import("ORG.Util.UploadFile");//图片处理类
			$data = array();
			
			$maxSize =2048000 ; // 讴置附件上传大小 
			// 根据提交方式进行表单保存 $_POST['uptype'] 1：ftp上传 2：直接上传
			if($_POST['uptype']==1){//ftp上传


/**********************ftp年报******************************/

				// 年报封面-中文
				if(!empty($_FILES['a_img_zh_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_zh_ftp'];
						$savePath = "./Public/reports/images/";
						$saveRule = "a_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 年报封面-中文
				if(!empty($_FILES['a_img_en_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_en_ftp'];
						$savePath = "./Public/reports/images/";
						$saveRule = "a_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}

					// 年报pdf文件名- 中文
					$data['a_url'] = $_POST['a_name']?$_POST['a_name']:'';
					// 年报pdf文件名- 英文
					$data['a_url_en'] = $_POST['a_name_en']?$_POST['a_name_en']:'';

/**********************ftp中期******************************/
				// 中期封面-中文
				if(!empty($_FILES['i_img_zh_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_zh_ftp'];
						$savePath = "./Public/reports/images/";
						$saveRule = "i_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期封面-中文
				if(!empty($_FILES['i_img_en_ftp']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_en_ftp'];
						$savePath = "./Public/reports/images/";
						$saveRule = "i_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期pdf文件名- 中文
				$data['i_url'] = $_POST['i_name']?$_POST['i_name']:'';
				// 中期pdf文件名- 中文
				$data['i_url_en'] = $_POST['i_name_en']?$_POST['i_name_en']:'';



			

			}else{ //直接上传
				/**********************年报******************************/
				// 年报封面-中文
				if(!empty($_FILES['a_img_zh']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_zh'];
						$savePath = "./Public/reports/images/";
						$saveRule = "a_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 年报封面-英文
				if(!empty($_FILES['a_img_en']['name'])){//ftp上传年报封面
						$file = $_FILES['a_img_en'];
						$savePath = "./Public/reports/images/";
						$saveRule = "a_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
				// 年报文档 - 中文
				if(!empty($_FILES['a_url']['name'])){//ftp上传年报封面
						$file = $_FILES['a_url'];
						$savePath = "./Public/reports/zh/";
						$saveRule = "a_url_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				// 年报文档 - 英文
				if(!empty($_FILES['a_url_en']['name'])){//ftp上传年报封面
						$file = $_FILES['a_url_en'];
						$savePath = "./Public/reports/en/";
						$saveRule = "a_url_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['a_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				/**********************中期******************************/
				// 中期封面-中文
				if(!empty($_FILES['i_img_zh']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_zh'];
						$savePath = "./Public/reports/images/";
						$saveRule = "i_img_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img'] = $this->_upload($file,$maxSize,$savePath,$saveRule);

						
				}
				// 中期封面-英文
				if(!empty($_FILES['i_img_en']['name'])){//ftp上传年报封面
						$file = $_FILES['i_img_en'];
						$savePath = "./Public/reports/images/";
						$saveRule = "i_img_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_img_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}
				//中期文档 - 中文
				if(!empty($_FILES['i_url']['name'])){//ftp上传年报封面
						$file = $_FILES['i_url'];
						$savePath = "./Public/reports/zh/";
						$saveRule = "i_url_zh_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_url'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}

				// 中期文档 - 英文
				if(!empty($_FILES['i_url_en']['name'])){//ftp上传年报封面
						$file = $_FILES['i_url_en'];
						$savePath = "./Public/reports/en/";
						$saveRule = "i_url_en_".date('ymdHi');
						// $upload->saveRule = $saveRule;
						// $upload->maxSize  = 2048000 ; // 讴置附件上传大小 
						$data['i_url_en'] = $this->_upload($file,$maxSize,$savePath,$saveRule);
				}


			}



		/**************************保存***************************/

					
					$model = M ('report_2');
		        	
		        	

		       		if(!isset($_POST['create_time'])){
		       			$data['create_year']=date('Y');
					}else {
						$data['create_year']= (int)date("Y",strtotime($_POST['create_time']));
					}
					$data['id'] = $_POST['id'];

					//dump($data);

		        	$list=$model->save($data);
		        	// echo $model->getLastSql();
		        	// var_dump($list);
		        	
		        	if($list){
						
						$this->success ('修改成功！',__CONTROL__);
						exit;
		        	}else{
						
						$this->error ('修改失败,或无数据变动!');
						exit;
		       		}
				
			
		}else{
			$this->error('非法提交！');
			exit;
		}
	


	}
    /**
     * ReportAction::autoCheckToken()
     * 令牌验证
     * @param mixed $data
     * @return
     */
    private function autoCheckToken($data) {
        $name   = C('TOKEN_NAME');
        if(isset($_SESSION[$name])) {
        	// list($k,$v) = explode('_',$data)
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