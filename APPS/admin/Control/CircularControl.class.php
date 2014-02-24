<?php
/**
 * Author 方振
 * Description 通函控制
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数
class CircularControl extends BaseControl {

	public function index() {


		if(IS_POST){
			// p($_POST);
			// p($_FILES);
			// exit;
			// 参数：（数据表，文件上传目录，图片上传目录，允许文件类型，最大文件大小，是否水印，是否缩略图，缩略图参数）
	    	$result = $this->uploads('circular_2','add','添加通函','Public/circulars','images',array("jpg","jpeg","png",'pdf'),0,1,array(146,110,6));
		
		}else{
			$circular=M('circular_2');
	        import ( "Lib.Page2" ); //导入分页类
			$count = $circular->count(); //计算总数
			$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
	       
			$list=$circular->order('create_time desc,id desc')->limit($p->limit())->select();
	        
			$this->assign('header_title','Circular');
			$this->assign('list',$list);
	        $this->assign('page',$p->show());
			$this->display();
		}
		
	}

	/**
	 * 更新操作
	 * @return [type] [description]
	 */
	public function update(){
		if(IS_POST){
			$id = $this->_post('id');
			$id || die('非法数据');
			// 参数：（数据表，文件上传目录，图片上传目录，允许文件类型，最大文件大小，是否水印，是否缩略图，缩略图参数）
	    	$result = $this->uploads('circular_2','save','修改id为'.$id.'通函','Public/circulars/'.date('Ym'),'images',array("jpg","jpeg","png",'pdf'),0,1,array(146,110,6),array('pic_url','file_url','file_url_en'));
	    	
		}else{
			$this->error('非法操作');
		}
	}

   /**
    * 更新页面
    * @return [type] [description]
    */
	public function toUpdate(){

		if(IS_GET){
			$id = $this->_get('id');
			$db = M( 'circular_2' );
			$result = $db->where('id ='.$id)->find();
			
			
			$this->assign('title',$result['title']);
			$this->assign('data',$result);
			$this->display();
		}else{
			$this->error('非法访问');
			exit;
		}

	}
	

 













}
 
 ?>