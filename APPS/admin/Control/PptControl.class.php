<?php
/**
 * Author ldm
 * 演示文稿控制器
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数

class PptControl extends BaseControl {

	/**
	 * 显示演示文稿列表
	 */
	function index(){
		if(IS_POST){
			
	    	// 参数：（数据表，文件上传目录，图片上传目录，允许文件类型，最大文件大小，是否水印，是否缩略图，缩略图参数）
	    	$result = $this->uploads('ppt_2','add','添加演示文稿','Public/powerpoint/'.date('Ym'),'images',array("jpg","jpeg","png",'pdf'),0,1,array(146,110,6));
	    	

		}else{//显示列表信息
			$db=M('ppt_2');
			
			$count = $db->count(); //计算总数
			import ( "Lib.Page2" ); //导入分页类
			$p = new Page ( $count, NUM_ONE_PAGE );//显示N条记录
			
	        
			$list=$db->order('id desc,create_time desc')->limit($p->limit())->select();
	       
			$this->assign('header_title','powerpoint');
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
	    	$result = $this->uploads('ppt_2','save','修改id为'.$id.'演示文稿','Public/powerpoint/'.date('Ym'),'images',array("jpg","jpeg","png",'pdf'),0,1,array(146,110,6),array('pic_url','pic_url_t','pic_url_en','pic_url_en_t','file_url','file_url_en'));
	    	
		}else{
			$this->error('非法操作');
		}
	}

	/**
	 * 修改信息显示页面
	 * @return [type] [description]
	 */
	public function toupdate(){
		if(IS_GET){
			$id = $this->_get('id');
			$db = M( 'ppt_2' );
			$result = $db->where('id ='.$id)->find();
			
			
			$this->assign('title',$result['title']);
			$this->assign('data',$result);
			$this->display();
		}else{
			$this->error('非法访问');
			exit;
		}
	}
	/**
	 * 删除信息
	 * @function [dels] 删除单条记录及附属文件，参数(表名，显示信息，删除id)
	 * @return [type] [description]
	 */
	public function del(){
		if(IS_GET){
			$id = $this->_get('id');
			$msg = "删除id为$id ppt";
			$result = $this->dels('ppt_2',$msg,$id);
			if($result){

			
				$this->success($msg.' 成功');
            	exit;
			}else{

				 $this->error($msg.' 失败');
            	exit;
			}
		}else{
			$this->error('非法访问');
			exit;
		}
		
	}
	


}