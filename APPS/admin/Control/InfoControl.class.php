<?php
/**
 * 中国安芯网站后台管理系统 - 文章信息 控制器
 * author ldm
 * update date:2013-09-06
 */
class InfoControl extends BaseControl{

/**
 * ******************************文章内容*************************************************
 */
	// 默认方法 - 显示文章信息列表  
	function index(){
		$this->display();
	}

	// 文章信息列表显示
	function infoShow(){
		$db = K('infolist');
			$slist = $db->getListAll();
			//获得分类列表
			$slist = Data::channel($slist,'id','pid',0,0,2,'--');
		

		$where = " 1 ";
		// 判断是否关键词查询
		if(IS_POST){
			if(isset($_POST['keyword']) && isset($_POST['valueword'])){
				$key = $_POST['keyword'];
				$value = $_POST['valueword'];
				$where .= " and a.$key like '%".$value."%'";
			}
		}

		$db = M("info");

		// $num = $db->count();
		$num = $db->query("select count(a.id) as ids from ax_info as a join ax_infolist as b where a.lid=b.id and $where");
		$num = $num[0]['ids'];

		$page = new page($num,C('PAGE_SHOW_ROW'));
		
		// $result = $db->field("id,title,title_en,lid,addtime,isshow,orders")->order("addtime desc,id desc")->limit($page->firstRow.','.$page->listRows)->all();
		
		//关联infolist表查询
		$query = "select a.id,a.title,a.title_en,a.addtime,a.isshow,a.orders,b.name from ax_info as a join ax_infolist as b where a.lid=b.id and $where order by addtime desc,id desc limit $page->firstRow,$page->listRows";


		// echo $query;


		$result = $db->query($query);

		//dump($result);


			$this->assign('slist',$slist);//分配文章分类列表
			$this->assign('list',$result);//分配获得文章信息内容
			$this->assign('page',$page->show());//分配页码
			$this->display();
			exit;
		
	}

	/**
	 * ajax显示当前分类信息
	 * @return [type] [description]
	 */
	function ajaxShowList(){
		
		$ctype = $_POST['ctype'];//当前分类
		$orders = $_POST['orders'];//排序方式

		$db = M("info");
		$data = array();
		$data['status'] = 0;
		// 设置排序方式
			$order = $orders?$orders." desc":"addtime desc";
			// 设置where条件
			$where = " 1 ";
			if($ctype){
				$db2 = K("infolist");
				$path = $db2->getPath($ctype);
				$rs2 = $db2->query("select id from ax_infolist where id=$ctype or (path like '".$path."%')");
				
				if(is_array($rs2)){
					$ids = '';
					foreach($rs2 as $v){
						$ids .= $v['id'].',';
					}
					$ids = rtrim($ids,',');

					$where .= " and lid in($ids)";
				}
				
			}
			
			// $num = $db->count($where);
			$num = $db->query("select count(a.id) as ids from ax_info as a join ax_infolist as b where a.lid=b.id and $where");
			$num = $num[0]['ids'];
			$page = new page($num,C('PAGE_SHOW_ROW'));
			
			//关联infolist表查询
			$query = "select a.id,a.title,a.title_en,a.addtime,a.isshow,a.orders,b.name from ax_info as a join ax_infolist as b where a.lid=b.id and $where order by $order limit $page->firstRow,$page->listRows";

			$result = $db->query($query);


			// $result = $db->field("id,title,title_en,lid,addtime,isshow,orders")->where($where)->order($order)->limit($page->firstRow.','.$page->listRows)->all();
			if($result){
				foreach($result as $k=>$v){
					
					$result[$k]['addtime'] = date("Y-m-d",$v['addtime']);
				}
				$data['status'] = 1;
				$data['list'] = $result;
				$data['page'] = $page->show();
			}

			echo json_encode($data);
			exit;


	}

	/**
	 * 异步分页
	 * @return [type] [description]
	 */
	function ajaxPage(){
		$_GET[C("PAGE_VAR")] =$_POST['page'];
		$ctype = $_POST['ctype'];//当前分类
		$orders = $_POST['orders'];//排序方式

		$db = M("info");
		$data = array();
		$data['status'] = 0;

		// 设置排序方式
			$order = $orders?$orders." desc":"addtime desc";
			// 设置where条件
			$where = " 1 ";
			if($ctype){
				$db2 = K("infolist");
				$path = $db2->getPath($ctype);
				$rs2 = $db2->query("select id from ax_infolist where id=$ctype or (path like '".$path."%')");
				
				if(is_array($rs2)){
					$ids = '';
					foreach($rs2 as $v){
						$ids .= $v['id'].',';
					}
					$ids = rtrim($ids,',');

					$where .= " and lid in($ids)";
				}
				
			}
			
			// $num = $db->count($where);
			$num = $db->query("select count(a.id) as ids from ax_info as a join ax_infolist as b where a.lid=b.id and $where");
			$num = $num[0]['ids'];
			$page = new page($num,C('PAGE_SHOW_ROW'));
			
			//关联infolist表查询
			$query = "select a.id,a.title,a.title_en,a.addtime,a.isshow,a.orders,b.name from ax_info as a join ax_infolist as b where a.lid=b.id and $where order by $order limit $page->firstRow,$page->listRows";

			$result = $db->query($query);

			if(is_array($result)){
				foreach($result as $k=>$v){
					
					$result[$k]['addtime'] = date("Y-m-d",$v['addtime']);
				}
				$data['status'] = 1;
				$data['list'] = $result;
				$data['page'] = $page->show();
			}
			
			echo json_encode($data);
			exit;


	}

	/**
	 * 异步删除单条信息
	 * @return [type] [description]
	 */
	function ajaxDelOne(){
		
		$id = $_POST['id'];
		
		if(!$id){
			return false;
		}

		$_GET[C("PAGE_VAR")] =$_POST['page'];
		$ctype = $_POST['ctype'];//当前分类
		$orders = $_POST['orders'];//排序方式

		$db = M("info");
		$data = array();
		$data['status'] = 0;

		$result = $db->where("id=$id")->del();
		
		if($result){
			// $data['status'] =1;

			// 设置排序方式
			$order = $orders?$orders." desc":"addtime desc";
			// 设置where条件
			$where = " 1 ";
			if($ctype){
				$db2 = K("infolist");
				$path = $db2->getPath($ctype);
				$rs2 = $db2->query("select id from ax_infolist where id=$ctype or (path like '".$path."%')");
				
				if(is_array($rs2)){
					$ids = '';
					foreach($rs2 as $v){
						$ids .= $v['id'].',';
					}
					$ids = rtrim($ids,',');

					$where .= " and lid in($ids)";
				}
				
			}
			
			// $num = $db->count($where);
			$num = $db->query("select count(a.id) as ids from ax_info as a join ax_infolist as b where a.lid=b.id and $where");
			$num = $num[0]['ids'];
			$page = new page($num,C('PAGE_SHOW_ROW'));
			
			//关联infolist表查询
			$query = "select a.id,a.title,a.title_en,a.addtime,a.isshow,a.orders,b.name from ax_info as a join ax_infolist as b where a.lid=b.id and $where order by $order limit $page->firstRow,$page->listRows";

			$result = $db->query($query);

			if(is_array($result)){
				foreach($result as $k=>$v){
					
					$result[$k]['addtime'] = date("Y-m-d",$v['addtime']);
				}
				$data['status'] = 1;
				$data['list'] = $result;
				$data['page'] = $page->show();
			}

		}

		
			
			echo json_encode($data);
			exit;
	}
	/**
	 * 异步批量删除
	 * @return [type] [description]
	 */
	function ajaxDoAll(){
		$sid = $_POST['sid'];//操作的id集合
		$act = $_POST['act'];//操作方法
		$currentP = $_POST['currentP'];//当前显示页
		$ctype = $_POST['ctype'];//当前分类
		$orders = $_POST['orders'];//排序方式

		$str = implode($sid,',');

		$db = M("info");
		$data = array();
		$data['status'] = 0;
		switch($act){
			case "del":
				// 批量删除
				$result = $db->in($sid)->del();
				if($result){
					$data['status'] = 1;
				}
			break;

			case "show":
				$result = $db->in($sid)->update(array("isshow"=>1));
				if($result){
					$data['status'] = 1;
				}
			break;
			case "hide":
				$result = $db->in($sid)->update(array("isshow"=>0));
				if($result){
					$data['status'] = 1;
				}
			break;
			case "setOrder":

			break;
			default :
			break;
		}
		if($data['status']){
			// 操作成功，返回新数据列表
			// 设置排序方式
			$order = $orders." desc";
			// 设置where条件
			$where = " 1 ";
			if($ctype){
				$db2 = K("infolist");
				$path = $db2->getPath($ctype);
				$rs2 = $db2->query("select id from ax_infolist where id=$ctype or (path like '".$path."%')");
				
				if(is_array($rs2)){
					$ids = '';
					foreach($rs2 as $v){
						$ids .= $v['id'].',';
					}
					$ids = rtrim($ids,',');

					$where .= " and lid in($ids)";
				}
				
			}
			$_GET[C("PAGE_VAR")] =$currentP;
			// $num = $db->count($where);
			$num = $db->query("select count(a.id) as ids from ax_info as a join ax_infolist as b where a.lid=b.id and $where");
			$num = $num[0]['ids'];
			$page = new page($num,C('PAGE_SHOW_ROW'));
			
			//关联infolist表查询
			$query = "select a.id,a.title,a.title_en,a.addtime,a.isshow,a.orders,b.name from ax_info as a join ax_infolist as b where a.lid=b.id and $where order by $order limit $page->firstRow,$page->listRows";

			$result = $db->query($query);
			// $num = $db->count($where);
			// $page = new page($num,2);
			// $_GET[C("PAGE_VAR")] = $currentP;
			// $result = $db->field("id,title,title_en,lid,addtime,isshow,orders")->where($where)->order($order)->limit($page->firstRow.','.$page->listRows)->all();

			if(is_array($result)){
				foreach($result as $k=>$v){
					
					$result[$k]['addtime'] = date("Y-m-d",$v['addtime']);
				}
			}
			$data['list'] = $result;
			$data['page'] = $page->show();
		}
		echo json_encode($data);
		
	}
	/**
	 * 添加文章信息
	 * @return [type] [description]
	 */
	function addInfo(){
		if(IS_GET){

			$db = K('infolist');
			$slist = $db->getListAll();
			$slist = Data::channel($slist,'id','pid',0,0,2,'--');
		
			$this->assign('slist',$slist);
			$this->display();
			exit;


		}
		if(IS_POST){
			$data = array();//插入的数据

			import("Lib.Upload");
			//中英文封面图，不生成缩略图
			if(!empty($_FILES['coverimg']['name']) || !empty($_FILES['coverimg']['name'])){

				// $obj = new upload(ROOT_PATH."/Public/info",array("jpg","jpeg","png"),2048000,0,1,array(150,120,6));
				$obj = new upload(ROOT_PATH."/Public/info/images",array("jpg","jpeg","png"),2048000,0,0);
				
				
				$info = $obj->upload();
				
				if(!$info){
					$this->error($obj->getError());
					exit;
				}
				
				if(is_array($info)){
					foreach($info as $k=>$v){
						// 中文图
						if($v['fieldname']=='coverimg'){
							$data['coverimg'] = $info[$k]['path'];
						}
						// 英文图
						if($v['fieldname'] == 'coverimg_en'){
							$data['coverimg_en'] = $info[$k]['path'];
						}
					}
				}
				
				

			}
		

			// 获得其它表单数据
			// 
			$data['lid'] = $_POST['lid'];//所属分类id
			$data['isshow'] = $_POST['isshow'];//是否显示
			$data['istop'] = $_POST['istop'];//是否置顶
			$data['addtime'] = empty($_POST['addtime'])?time():strtotime($_POST['addtime']);//发布时间
			$data['orders'] = empty($_POST['orders'])?1:(int)$_POST['orders'];
			// 
			// 中文
			$data['title'] = $_POST['title'];//中文标题
			$data['file_url'] = $_POST['file_url'];//中文外部文件链接
			$data['des'] = $_POST['des'];//中文描述
			$data['content'] = $_POST['content'];//中文内容

			//英文
			$data['title_en'] = $_POST['title_en'];
			$data['file_url_en'] = $_POST['file_url_en'];
			$data['des_en'] = $_POST['des_en'];
			$data['content_en'] = $_POST['content_en'];


			
			$db = M('info');

			if($db->add($data)){
				$this->success("添加文章信息成功",U('infoShow'));
				exit;
			}else{

				$this->error("添加文章信息失败");
				exit;
			}





		}
	
	}


	/**
	 * 编辑文章信息内容
	 * @return [type] [description]
	 */
	function editInfo(){
		if(IS_GET){
			$id = @$_GET['id'];
			if(!$id){
				$this->go(__APP__);
				exit;
			}

			$db = K('infolist');
			$slist = $db->getListAll();
			$slist = Data::channel($slist,'id','pid',0,0,2,'--');
			
			$db = M("info");

			$data = $db->where("id=$id")->one();

			$this->assign('data',$data); 
			$this->assign('slist',$slist);
			$this->display();
			exit;


		}
		if(IS_POST){
			$id = @$_POST['id'];
			if(!$id){
				go(__APP__);
				exit;
			}
			$data = array();//插入的数据

			import("Lib.Upload");
			//中英文封面图，不生成缩略图
			if(!empty($_FILES['coverimg']['name']) || !empty($_FILES['coverimg']['name'])){

				// $obj = new upload(ROOT_PATH."/Public/info",array("jpg","jpeg","png"),2048000,0,1,array(150,120,6));
				$obj = new upload(ROOT_PATH."/Public/info/images",array("jpg","jpeg","png"),2048000,0,0);
				
				
				$info = $obj->upload();
				
				if(!$info){
					$this->error($obj->getError());
					exit;
				}
				
				if(is_array($info)){
					foreach($info as $k=>$v){
						// 中文图
						if($v['fieldname']=='coverimg'){
							$data['coverimg'] = $info[$k]['path'];
						}
						// 英文图
						if($v['fieldname'] == 'coverimg_en'){
							$data['coverimg_en'] = $info[$k]['path'];
						}
					}
				}
				
				

			}
		

			// 获得其它表单数据
			// 
			$data['id'] = $_POST['id'];
			$data['lid'] = $_POST['lid'];//所属分类id
			$data['isshow'] = $_POST['isshow'];//是否显示
			$data['istop'] = $_POST['istop'];//是否置顶
			$data['addtime'] = empty($_POST['addtime'])?time():strtotime($_POST['addtime']);//发布时间
			$data['orders'] = empty($_POST['orders'])?1:(int)$_POST['orders'];
			// 
			// 中文
			$data['title'] = $_POST['title'];//中文标题
			$data['file_url'] = $_POST['file_url'];//中文外部文件链接
			$data['des'] = $_POST['des'];//中文描述
			$data['content'] = $_POST['content'];//中文内容

			//英文
			$data['title_en'] = $_POST['title_en'];
			$data['file_url_en'] = $_POST['file_url_en'];
			$data['des_en'] = $_POST['des_en'];
			$data['content_en'] = $_POST['content_en'];


			
			$db = M('info');

			if($db->update($data)){
				// echo $db->getLastSql();
				// dump($data);

				// exit;
				$this->success("添加文章信息成功",U('infoShow'));
				exit;
			}else{

				$this->error("添加文章信息失败");
				exit;
			}





		}
	}























/**
 * ******************************文章分类*************************************************
 */
	/**
	 * 文章分類列表
	 * @return [type] [description]
	 */
	function infoList(){
		$db = K('infolist');
		$list = $db->getListAll();

		$list = Data::channel($list,'id','pid',0,0,2,'--');

		$list = $db->getType($list);//获得所属分类

		// dump($list);
		$this->assign('list',$list);
		$this->display();
	}

	function delList(){
		if(IS_GET){
			$id = @$_GET['id'];
			if(!$id){
				$this->error("错误操作！",U('Index'));
				exit;
			}
			$db = K('infolist');
			if($db->delList($id)){
				
				$this->success("删除分类成功");
			}
		}
	}
	/**
	 * 编辑分类
	 * @return [type] [description]
	 */
	function editList(){
		if(IS_GET){
			$id = @$_GET['id'];
			$db = K('infolist');
			$slist = $db->getListAll();
			$slist = Data::channel($slist,'id','pid',0,0,2,'--');
			//dump($slist);

			$data = $db->field('id,name,isshow,path,pid')->where("id=$id")->one();

			$this->assign('data',$data);
			$this->assign('slist',$slist);
			$this->display();
			exit;
		}else{
			if(IS_POST){
				
				$db = K('infolist');
				$id = $_POST['id'];
				$pid = $_POST['pid'];
				
				


				if($id == $pid){
					$this->error("不能添加为自身子栏目！");
					exit;
				}
				$ypath = $_POST['path']; //原分类path

				$replace_p = $db->getPath($pid);//更新的当前分类path

				$_POST['path'] = $replace_p;

				//根据栏目显示按钮决定显示
				if(!$_POST['isshow']){
					$isshow = 0;

				}else{
					$isshow = $db->getShow($pid);//获得所属分类的isshow，用来决定自身显示情况
					p($isshow);
					// 根据父栏目决定子栏目显示
					if(!$isshow){
						
						$_POST['isshow'] = $isshow;
					}

				}
				
				
				// var_dump($isshow);
				// var_dump($_POST['isshow']);
				// exit;
				// echo $ypath;
				// echo "<br/>";
				// echo $replace_p;

				// dump($_POST);
				
				if($db->update()){
					echo $db->getLastSql();
					//$id当前更新分类id，用作，子栏目pid参数传入 $ypath 当前修改分类路径 $replace_p 当前分类修改后路径
					if($db->updateList($id,$ypath,$replace_p,$isshow)){
					echo $db->getLastSql();
					exit;

						$this->success("更新分类成功！",U('infoList'));
						exit;
					}else{
						echo $db->getLastSql();
					exit;

						$this->error("更新分类失败！");
						exit;
					}

					
					
				}
			
				$this->success("更新分类失败！");
				exit;

			}
		}
	}
	/**
	 * 添加分类
	 * 
	 */
	function addList(){
		if(IS_GET){
			$db = K('infolist');
			$slist = $db->getListAll();
			$slist = Data::channel($slist,'id','pid',0,0,2,'--');
		
			$this->assign('slist',$slist);
			$this->display();
			exit;
		}else{
			if(IS_POST){
				$db = K('infolist');
				$pid = intval($_POST['pid']);
				$path = $db->getPath($pid);
				
				$_POST['path'] = $path;
				if($db->add()){
					// dump($_POST);
					// echo $db->getLastSql();
					// exit;
					$this->success('添加分类成功',U('infoList'));
					exit;
				}else{
					$this->error('添加分类失败');
					exit;
				}
			}
		}

		
	}
}
?>