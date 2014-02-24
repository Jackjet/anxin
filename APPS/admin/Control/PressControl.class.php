<?php
/**
 * Author ldm
 * Press媒体中心
 */
define("NUM_ONE_PAGE",5);  //每页显示新闻篇数

class PressControl extends BaseControl {

	public function index() {
		if(IS_POST){
			$channel = $this->_post('channel');
			$path = '';
			// 判断设置上传目录
			switch ($channel) {
				case 'press_2':
					$path = 'press';
					break;
				case 'announcement_2':
					$path = 'announcements';
					break;
				case 'circular_2':
					$path = 'circulars';
					break;
				case 'sharecapital_2':
					$path = 'sharecapital';
					break;
				case 'ppt_2':
					$path = 'powerpoint';
					break;
				case 'awards_2':
					$path = 'awards';
					break;
				default:
					break;
			}
	
			// 参数：（数据表，文件上传目录，图片上传目录，允许文件类型，最大文件大小，是否水印，是否缩略图，缩略图参数）
	    	$result = $this->uploads($channel,'add','添加数据表 '.$channel.' 信息','Public/'.$path.'/'.date('Ym'),'images',array("jpg","jpeg","png",'pdf'),0,1,array(210,140,6));

		}else{
			
			$channel = $this->_get('channel');

			$table = !$channel?'press_2':$channel.'_2';

			$db=M($table);
	        import ( "Lib.Page2" ); //导入分页类

			$count = $db->count(); //计算总数
			$page = new Page ( $count, NUM_ONE_PAGE );//显示N条记录

			$list=$db->order('id desc,create_time desc')->limit($page->limit())->select();
	      
	     
			$this->assign('header_title','Press');
			$this->assign('list',$list);
	        $this->assign('page',$page->show());
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
	    	$result = $this->uploads('press_2','save','修改id为'.$id.'新闻','Public/press/'.date('Ym'),'images',array("jpg","jpeg","png",'pdf'),0,1,array(210,140,6),array('pic_url','file_url','file_url_en'));
	    	
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
			$db = M( 'press_2' );
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

			$msg = "删除id为$id 新闻";
			$result = $this->dels('press_2',$msg,$id,array('pic_url','file_url','file_url_en'));
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




	

    /**
     * AnnouncementAction::autoCheckToken()
     * 令牌验证
     * @param mixed $data
     * @return
     */
    private function autoCheckToken($data) {
        $name = C('TOKEN_NAME');

     	if(isset($_SESSION[$name])) {
        	
            // 当前需要令牌验证
            if(empty($data) || $_SESSION[$name] != $data) {
            	
                // 非法提交
                return false;
            }
            
            // 验证完成销毁session
            //unset($_SESSION[$name]);
        }else {
        	return false;
        }
        
        return true;
    }


    /**
     * 删除指定文件
     * @param  [type] $file [description]
     * @return [type]       [description]
     */
   private function delPressFile($file){
    	if(is_file($file)){
							
		 unlink($file);
		}
    }

}
 
 ?>