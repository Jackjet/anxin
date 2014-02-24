<?php 
class SearchControl extends BaseControl {
	/**
	 * 显示搜索页面
	 * @return [type] [description]
	 */
	function index(){
		// var_dump($_POST);
		if(!empty($_POST)){
			$type = $this->_post('searchType');//搜索表
			$field = $this->_post('searchField');//搜索字段
			$keyword = $this->_post('keyword');//搜索关键字

			$typeFolder = '';
			switch($type){
            case 'press':
				$typeFolder = 'press';
            break;
            case 'announcement':
				$typeFolder = 'announcements';
            break;
            case "circular":
				$typeFolder = 'announcements';
            break;
            case "sharecapital":
				$typeFolder = 'announcements';
            break;
          }


			$stable = $type.'_2';
			$db = M($stable);

			$result = $db->where($field.' like "%'.$keyword.'%"')->all();

			// p($result);
			
			$this->assign('typeFolder',$typeFolder);//文件夹名称
			$this->assign('type',$type);//表
			$this->assign('data',$result);	//数据		
			$this->display('doSearch.html');
		}else{


			$this->display();
		}
		
	}

	
	/**
	 * 删除id内容
	 * @return [type] [description]
	 */
	function del(){
		$id = $this->_post('id');
		$type=$this->_post('type');
		$do = $this->_get('do');
		if(!$id && $do!='list'){
			$this->_ajax(array('status'=>'0'));
			exit;
		}
		$type = $type.'_2';
		$db = M($type);
		$result = $db->where("id=$id")->del();
		if($result){
			$this->_ajax(array('status'=>'1'));
			exit;
		}
			$this->_ajax(array('status'=>'0'));

	}
}
 ?>