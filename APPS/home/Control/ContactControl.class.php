<?php
/**
 * 联系我们 控制器
 * author ldm
 * create date  2013-08-23
 */
class ContactControl extends CommonControl{

	/**
	 * 默认动作  联系我们
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}

	/**
	 * 网站地图
	 * @return [type] [description]
	 */
	function sitemap(){
		$this->display();
	}
}
?>