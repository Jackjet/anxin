<?php
/**
 * 聯繫我們模塊
 * author ldm
 */
class GrouProfileControl extends CommonControl{

	/**
	 * 公司简介
	 * @return [type] [description]
	 */
	function index(){
		$this->display();
	}
	
	/**
	 * 主席報告書
	 * @return [type] [description]
	 */
	function statement(){
		$this->display();
	}

	/**
	 * 公司歷程
	 * @return [type] [description]
	 */
	function roadmap(){
		
		$this->display();
	}
}
?>