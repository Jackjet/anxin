<?php
/**
 * 投資者關係 控制器
 * author ldm
 * create date:2013-08-16
 */
define("PAGE_ROWS",10);
class InvestorRelationsControl extends CommonControl{
	
	/**
	 * 默認操作 - 公司資料
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}

	/**
	 * 演示文稿
	 */
	function powerpoint(){
		$db = M('ppt_2');
		

		$lang = session('lang');
		if($lang && $lang['_LANG_'] == 'en'){
		        		$desc = array("pre" => " pre", "next" => " next", "first" => " first",
								"end" => " end", "unit" => "unit");
		        		C("PAGE_DESC",$desc);
		}        	

		
		$num = $db->query("SELECT date_format(from_unixtime(create_time),'%Y') AS year FROM ax_ppt_2  where isshow=1 group by year ORDER BY orders desc,year desc");
		$num = count($num);
		$page = new page($num,PAGE_ROWS);
		// $list = $db->field("date_format(from_unixtime(create_time),'%Y')|year")->where()->order("create_time desc,id desc")->all();
		$limit =  $page->limit();
		// p($limit);
		$years = $db->query("SELECT date_format(from_unixtime(create_time),'%Y') AS year FROM ax_ppt_2 where isshow=1  group by year ORDER BY orders desc, year desc"." limit ".$limit['limit']);
		
		// p($years);
		$list = array();
		if(is_array($years)){
			foreach($years as $v){

				$result = $db->query("SELECT * from ax_ppt_2 where date_format(from_unixtime(create_time),'%Y')=".$v['year']." order by orders desc,create_time desc,id desc");
				
				if(is_array($result)){
					foreach($result as $kk=>$vv){
						if(empty($vv['pic_url_en'])){
							$result[$kk]['pic_url_en'] = $vv['pic_url'];
						}
						if(empty($vv['file_url_en'])){
							$result[$kk]['file_url_en'] = $vv['file_url'];
						}
						

					}
				}
				$list[$v['year']] = $result;
			
			}
		}
		$this->assign('list',$list);
		$this->assign('page',$page->show());
		$this->display();
	}
	/**
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
		        	$page = new page($num,PAGE_ROWS);//实例化分页对象
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
		$table = 'ax_announcement_2';
		$this->handle($table);

	}
	/**
	 * 通函
	 * @return [type] [description]
	 */
	function circulars(){
		$table = 'ax_circular_2';
		$this->handle($table);
	}
	/**
	 * 股本申報表
	 * @return [type] [description]
	 */
	function sharecapital(){
		$table = 'ax_sharecapital_2';
		$this->handle($table);
		
	}
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 
	/*************************************************************************************************/ 

	/**
	 * 异步分页 总方法
	 * @return [type] [description]
	 */
	function ajaxShowPage(){
		if($_GET['ajax'] == 1){
			$_GET['page'] = $_POST['page'];

			$channel = $_POST['channel'];

			$db =M($channel);

			$now_year =	$_POST['year']?$_POST['year'] : date('Y');

		
			// $num = $db->where('YEAR(create_time) = '.$now_year)->count();
			$num = $db->where('date_format(from_unixtime(create_time),"%Y")='.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,PAGE_ROWS);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];
			if ($data['data'] = $db->where('date_format(from_unixtime(create_time),"%Y")= '.$now_year)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",$v['create_time']);
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",$v['create_time']);
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
	 * 异步年份分页  总方法
	 */
	function ajaxShowYear(){
		if($_GET['ajax'] == 1){
		
			$channel = $_POST['channel'];
			
			$db =M($channel);
			$now_year =	$_POST['year']?$_POST['year'] : date("Y");

			
			$num = $db->where('date_format(from_unixtime(create_time),"%Y") = '.$now_year)->count();
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$p= new page($num,PAGE_ROWS);

			$data = array();
			$data['lang'] = $_SESSION['lang']['_LANG_'];

			if ($data['data'] = $db->where('date_format(from_unixtime(create_time),"%Y") = '.$now_year)->order("orders desc,create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

				// 格式化输出
				if($data['lang'] == 'en'){
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							$data['data'][$k]['create_time'] = date("Y M d",$v['create_time']);
							$data['data'][$k]['title_en'] = strtoupper(showShort($v['title_en'],60));
						}
					}
				}else{
					if(is_array($data['data'])){
						foreach($data['data'] as $k=>$v){
							
							$data['data'][$k]['create_time'] = date("Y年m月d日",$v['create_time']);
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
	 * 统一的信息数据库查询方法 包括：公告 通函 股本申报 新闻
	 * @return [type] [description]
	 */
	private function handle($table){
		$db = M();
		$sql_years = "SELECT date_format(from_unixtime(create_time),'%Y') as year FROM $table where isshow=1 GROUP BY year ORDER BY orders desc,year DESC";
		// $sql_ann = "SELECT id, title, title_en, file_url,file_url_en,create_time FROM ax_announcement";
		$years = $db->query($sql_years);
		$now_year = $years[0]['year'];
		
		$field = count(`id`) ;
		$str = "SELECT @field FROM  $table where isshow=1 and date_format(from_unixtime(create_time),'%Y')=$now_year  ORDER BY orders desc, create_time desc";
		
		$sql = str_replace('@field',$field,$str);

		// 查询数据总量
		$num = $db->query($sql);
		$num = $num['0']['count(`id`)'];
		include(APP_PATH.'/Extend/Lib/myPage.class.php');
		$page= new page($num,PAGE_ROWS);
		// 查询数据列表
		$field = '*' ;
		$sql = str_replace('@field',$field,$str);
		
		// $sql = "SELECT $field FROM  $table where isshow=1 and date_format(from_unixtime(create_time),'%Y')=$now_year  ORDER BY orders desc, create_time desc";
		
		$result = $db->query($sql.' limit '.$page->firstRow.','.$page->listRows);

				if(is_array($result)){
					foreach($result as $kk=>$vv){
						if(isset($vv['pic_url_en']) && empty($vv['pic_url_en'])){
							$result[$kk]['pic_url_en'] = $vv['pic_url'];
						}
						if(isset($vv['file_url_en']) && empty($vv['file_url_en'])){
							$result[$kk]['file_url_en'] = $vv['file_url'];
						}
					}
				}

		$lang = session('lang');
		if($lang && $lang['_LANG_'] == 'en'){
		     // 英文
			$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
			foreach($config as $k=>$v){
				$page->setConfig($k,$v);
			}
		}

		$this->assign("now_year",$now_year);//当前年份
		$this->assign("years",$years);//所有年份
		$this->assign("list",$result);
		$this->assign("page",$page->show());//中文分页
		$this->display();	
	}



}
?>