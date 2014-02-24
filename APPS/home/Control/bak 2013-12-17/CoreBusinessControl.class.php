<?php
/**
 * 核心业务 控制器
 * author ldm
 * create date  2013-08-23
 * 
 */
class CoreBusinessControl extends CommonControl{

	/**
	 * 默认动作 ISD
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}

	/**
	 * ISS-iVAS
	 * @return [type] [description]
	 */
	function issivas(){
		$this->display();

	}

	/**
	 * ISS-智慧安防設備
	 */
	function issisd(){
		$this->display();

	}


	/**
	 * 异步显示产品内容
	 * @return [type] [description]
	 */
	function changePage(){
		if($_GET['ajax'] == 1){
			$type = $_POST['type'];
			$pro = $_POST['pro'];

			$file = TPL_PATH.CONTROL.'/includes/'.$pro.'/'.$type.'.php';
			if(is_file($file)){
				include($file);
			}
	
		}
	}


}
?>