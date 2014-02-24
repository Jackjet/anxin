<?php
/**
 * 投資者關係 控制器
 * author ldm
 * create date:2013-08-16
 */
class InvestorRelationsControl extends CommonControl{
	
	/**
	 * 默認操作 - 公司資料
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}

	/**
	 * 中期報告/年報
	 * @return [type] [description]
	 */
	function reports(){
		
       		 		$db = M("report_2");
		        	$num = $db->count();

		        	$lang = session('lang');
		        	if($lang && $lang['_LANG_'] == 'en'){
		        		$desc = array("pre" => " pre", "next" => " next", "first" => " first",
								"end" => " end", "unit" => "unit");
		        		C("PAGE_DESC",$desc);
		        	}
		        	$page = new page($num,3);//实例化分页对象
		        	$reports = $db->field('id,a_img,a_img_en,i_img,i_img_en,a_url,i_url,a_url_en,i_url_en,create_year')->order('create_year desc')->limit($page->limit())->all();
		        	if(is_array($reports)){
		        		foreach($reports as $k=>$v){
		        			if(!$v['a_img_en'] || $v['a_img_en'] ==' ' ){

		        				$reports[$k]['a_img_en'] = $v['a_img'];
		        			}
		        			if(!$v['i_img_en'] || $v['i_img_en'] ==' ' ){
		        				$reports[$k]['i_img_en'] = $v['i_img'];
		        			}

		        			// 如果没有年报内容，添加默认显示图片和链接
		        			if(empty($v['a_img']) || empty($v['a_url'])){
		        				$reports[$k]['a_img'] = "wait.jpg";
		        				$reports[$k]['a_img_en'] = "wait.jpg";
		        				$reports[$k]['a_url'] = "#";
		        				$reports[$k]['a_url_en'] = "#";

		        			}
		        		}
		        	}
		        	// dump($reports);
		        	//
		        	
		        	// 数据
		        	$data['list'] = $reports;
		        	// 中文分页
		       		$data['page'] = $page->show();
       
        $this->assign('data',$data);
		$this->display();
	}

	/**
	 * 公告
	 * @return [type] [description]
	 */
	function announcements(){

		$db = M("announcement_2");
		$sql_years = "SELECT YEAR(create_time) as year FROM ax_announcement_2 GROUP BY YEAR(create_time) ORDER BY YEAR(create_time) DESC";

		// $sql_ann = "SELECT id, title, title_en, file_url,file_url_en,create_time FROM ax_announcement";
		$years = $db->query($sql_years);
		$now_year = $years[0]['year'];

		$num = $db->where('YEAR(create_time) = '.$now_year)->count();
		include(APP_PATH.'/Extend/Lib/myPage.class.php');
		$p= new page($num,10);
		// $list=$press->order('id desc,create_time desc')->limit($p->firstRow.','.$p->listRows)->select();
		$ann = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all();

		$this->assign("now_year",$now_year);//当前年份
		$this->assign("years",$years);//所有年份
		$this->assign("ann",$ann);
		$this->assign("page",$p->show());//中文分页

		$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		foreach($config as $k=>$v){
			$p->setConfig($k,$v);
		}
		$this->assign("epage",$p->show());//英文分页

		$this->display();
	}
	/**
	 * 公告异步分页
	 */
	function AnnajaxShowPage(){
		if($_GET['ajax'] == 1){
			$_GET['page'] = $_POST['page'];
			$db =M("announcement_2");
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("announcement_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}

	
	/**
	 * 公告异步年份分页
	 */
	function AnnajaxShowYear(){
		if($_GET['ajax'] == 1){
			
			$db =M("announcement_2");
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("announcement_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}
	/**
	 * 通函
	 * @return [type] [description]
	 */
	function circulars(){

		$db = M("circular_2");
		$sql_years = "SELECT YEAR(create_time) as year FROM ax_circular_2 GROUP BY YEAR(create_time) ORDER BY YEAR(create_time) DESC";

		// $sql_ann = "SELECT id, title, title_en, file_url,file_url_en,create_time FROM ax_announcement";
		$years = $db->query($sql_years);
		$now_year = $years[0]['year'];

		$num = $db->where('YEAR(create_time) = '.$now_year)->count();
		include(APP_PATH.'/Extend/Lib/myPage.class.php');
		$p= new page($num,10);
		// $list=$press->order('id desc,create_time desc')->limit($p->firstRow.','.$p->listRows)->select();
		$cir = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all();

		$this->assign("now_year",$now_year);//当前年份
		$this->assign("years",$years);//所有年份
		$this->assign("cir",$cir);
		$this->assign("page",$p->show());//中文分页

		$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		foreach($config as $k=>$v){
			$p->setConfig($k,$v);
		}
		$this->assign("epage",$p->show());//英文分页
		
		$this->display();	
	}
	/**
	 * 通函异步分页
	 */
	function CirajaxShowPage(){
		if($_GET['ajax'] == 1){
			$_GET['page'] = $_POST['page'];
			
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("circular_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}

	/**
	 * 通函异步年份分页
	 */
	function CirajaxShowYear(){
		if($_GET['ajax'] == 1){
			
			
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("circular_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}
	/**
	 * 股本申報表
	 * @return [type] [description]
	 */
	function sharecapital(){
		$db = M("sharecapital_2");
		$sql_years = "SELECT YEAR(create_time) as year FROM ax_sharecapital_2 GROUP BY YEAR(create_time) ORDER BY YEAR(create_time) DESC";

		// $sql_ann = "SELECT id, title, title_en, file_url,file_url_en,create_time FROM ax_announcement";
		$years = $db->query($sql_years);
		$now_year = $years[0]['year'];

		$num = $db->where('YEAR(create_time) = '.$now_year)->count();
		include(APP_PATH.'/Extend/Lib/myPage.class.php');
		$p= new page($num,10);
		// $list=$press->order('id desc,create_time desc')->limit($p->firstRow.','.$p->listRows)->select();
		$cir = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all();

		$this->assign("now_year",$now_year);//当前年份
		$this->assign("years",$years);//所有年份
		$this->assign("cir",$cir);
		$this->assign("page",$p->show());//中文分页

		$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		foreach($config as $k=>$v){
			$p->setConfig($k,$v);
		}
		$this->assign("epage",$p->show());//英文分页
		
		$this->display();	
	}

	/**
	 * 股本异步分页
	 */
	function ShareajaxShowPage(){
		if($_GET['ajax'] == 1){
			$_GET['page'] = $_POST['page'];
			
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("sharecapital_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}

	/**
	 * 股本异步年份分页
	 */
	function ShareajaxShowYear(){
		if($_GET['ajax'] == 1){
			
			
			$now_year =	$_POST['year']?$_POST['year'] : 2013;

			$db = M("sharecapital_2");
			$num = $db->where('YEAR(create_time) = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,10);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('YEAR(create_time) = '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
							$data['data'][$k]['title'] = showShort($v['title'],80);
						}
					}
				}



				
				if($data['lang'] == 'en'){
					// 英文分页
					$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
					foreach($config as $k=>$v){
						$p->setConfig($k,$v);
					}
					
				}
				$data['page'] = $p->show();
				
				$data['year'] = $now_year;
				$data['status'] = 0;
				
			} else {
				$data['status'] = 1;
			}
				$this->_ajax( $data,"JSON");


		}
		
		
		exit;
	}
}
?>