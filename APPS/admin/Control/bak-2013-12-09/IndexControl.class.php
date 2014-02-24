<?php

class IndexControl extends Control{
    public function index(){
		
        $this->assign('header_title','Manager');
		if(!isset($_SESSION['admin_id']))
         {	
			 $this->display('login');
			 return;
         }else $this->display();
			
    }
	
	public function login(){
		if(isset($_SESSION['admin_id']))
         {
			go(__APP__);
			return;
         } else{
         	
			$this->display();

         }
	}
	
	public function load(){
		if(isset($_SESSION['admin_id']))
         {
			go(__APP__);
			return;
         } 
		// unset($_SESSION['admin_id']);
		if(isset($_POST['verify'])){
			// echo $_SESSION['code'];
			// echo $_POST['verify'];
			if(strtolower($_SESSION['code']) != strtolower($_POST['verify'])) {
				$this->assign('message','验证码错误！');
				$this->display("login");
			}else {

				$user = M("user");
				$map['username'] = $_POST['username'];
				$map['password'] = $_POST['password'];
				$q_user = $user -> where($map)->find();
				if(isset($q_user)){
					$_SESSION['admin_id'] = $q_user['id'];
					if(!isset($_SESSION['jumpUrl'])){ 
						$this->assign('jumpUrl',__APP__);
					}else {
						$this->assign('jumpUrl',$_SESSION['jumpUrl']);
					}
					$this->success ('登陆成功！');
				}else {
					$this->display("login");
				}
			}
		}else {
			go(__APP__.'/Index/login');
			return;
		}
	}
	
	/*生成验证码*/
	Public function verify(){
		$code = new code();
		$code->show();
		
	}

	public function clearCache(){
		$path_admin = APP_PATH.'Temp/';
		//echo $path_admin;
		Dir::del($path_admin);

		$path = ROOT_PATH.'APPS/home/Temp/';
		
		if(Dir::del($path)){

			$this->success ('缓存更新成功');
		}else{
			$this->error ('缓存更新失败');
		}

		
	}

}
?>