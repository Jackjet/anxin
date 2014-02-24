<?php
/**
 * 企業管治控制器
 * author ldm
 * create date:2013-08-23
 * 
 */
class CorporateManagementControl extends CommonControl{

	/**
	 * 默認顯示頁面 - 企業管理
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}

	/**
	 * 公司管理層
	 * @return [type] [description]
	 */
	function layers(){
		$this->display();
	}

	/**
	 * 嘉獎，榮譽
	 * @return [type] [description]
	 */
	function awards(){
		$db = M("awards_2");

		include(APP_PATH.'/Extend/Lib/myPage.class.php');
		$num = $db->count();
		$p = new page($num,9);
		$result = $db->field("id,title,title_en,pic_url,pic_url_thumb")->where("isshow = 1")->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();


		$this->assign('page',$p->show());//中文分頁

		$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
		foreach($config as $k=>$v){
			$p->setConfig($k,$v);
		}

		$this->assign('list',$result);
		$this->assign("epage",$p->show());//英文分页

		$this->display();
	}

	/**
	 * 榮譽ajax分頁
	 */
	function AwardAjaxPage(){
		if($_GET['do'] == 'list'){
			$_GET['page'] = $_POST['page'];
			$type = $_POST['type'];

			$where = " 1 and isshow=1 ";//查询条件，根据
			if($type){
				$where .= " and type=$type ";
			}

			$db = M("awards_2");
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$num = $db->where($where)->count();
			$p = new page($num,9);

			$result = $db->field("id,title,title_en,pic_url,pic_url_thumb")->where($where)->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();

			$page = $p->show();//中文分頁
				// 英文分页
				$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
				foreach($config as $k=>$v){
					$p->setConfig($k,$v);
				}
			$epage = $p->show();

				$data['status'] = 1; //状态成功
				if($_SESSION['lang']['_LANG_']=='en'){//英文
					$data['lang'] = 'en';
					$data['page'] = $epage;  // 返回的英文分页
					
				}else{//中文
					$data['lang'] = 'tw';
					$data['page'] = $page;  // 返回的中文分页

				}
				// 格式输出内容标题长度
				if(is_array($result)){
					foreach($result as $k=>$v){
						$result[$k]['title'] = showShort($v['title'],30);
						$result[$k]['title_en'] = strtoupper(showShort($v['title_en'],22));
					}
				}
				$data['list'] = $result;

				$this->_ajax($data,"JSON");
		}
	}

	/**
	 * 榮譽ajax分类显示
	 */
	function AwardAjaxType(){
		if($_GET['do'] == 'list'){
			
			$type = $_POST['type'];

			$where = " 1 and isshow=1 ";//查询条件，根据
			if($type){
				$where .= " and type=$type ";
			}

			$db = M("awards_2");
			include(APP_PATH.'/Extend/Lib/myPage.class.php');
			$num = $db->where($where)->count();
			$p = new page($num,9);

			$result = $db->field("id,title,title_en,pic_url,pic_url_thumb")->where($where)->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();

			$page = $p->show();//中文分頁
				// 英文分页
				$config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
				foreach($config as $k=>$v){
					$p->setConfig($k,$v);
				}
			$epage = $p->show();

				$data['status'] = 1; //状态成功
				if($_SESSION['lang']['_LANG_']=='en'){//英文
					$data['lang'] = 'en';
					$data['page'] = $epage;  // 返回的英文分页
					
				}else{//中文
					$data['lang'] = 'tw';
					$data['page'] = $page;  // 返回的中文分页

				}
				// 格式输出内容标题长度
				if(is_array($result)){
					foreach($result as $k=>$v){
						$result[$k]['title'] = showShort($v['title'],30);
						$result[$k]['title_en'] = strtoupper(showShort($v['title_en'],22));
					}
				}
				$data['list'] = $result;

				$this->_ajax($data,"JSON");
		}
	}
	/**
	 * 競爭優勢
	 * @return [type] [description]
	 */
	function edges(){
		$this->display();
	}
}
?>