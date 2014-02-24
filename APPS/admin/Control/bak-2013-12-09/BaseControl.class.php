<?php

class BaseControl extends Control {
	protected function __init(){
		
		$user = M('user');
         if(!(isset($_SESSION['admin_id'])&&($user->where("id='".$_SESSION['admin_id']."'")->find())))
         {
			$this->error("没有登录，或登录超时，請重新登錄!",__APP__.'/Index/login');
			return;
         }                
	}

}

?>