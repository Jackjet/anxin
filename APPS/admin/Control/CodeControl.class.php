<?php
/**
 * 密碼管理模塊
 */
class CodeControl extends BaseControl{

	/**
	 * 顯示修改項目
	 * @return [type] [description]
	 */
	function index(){
		// 企业宣传
		$file = ROOT_PATH.'APPS/home/Tpl/Public/data/downLoadCode.txt';
		$str = trim(file_get_contents($file));
		$this->assign('mediaCode',$str);





		$this->display();
	}

	/**
	 * 修改
	 * @return [type] [description]
	 */
	function edit(){
		if(IS_POST){
			$status = false;
			// 企业宣传
			$mediaCode = $_POST['mediaCode']?trim($_POST['mediaCode']):'';
			if($mediaCode){
				$file = ROOT_PATH.'APPS/home/Tpl/Public/data/downLoadCode.txt';
				$status = file_put_contents($file, $mediaCode);
			    if($status){
			    	$this->success("修改成功");
			    }else{
			    	$this->success("修改失败");

			    }
			}


		}
	}
}
?>