<?php
//中国安芯 控制器基类
class CommonControl extends Control{

	/**
	 * 初始化配置
	 * @return [type] [description]
	 */
	function __init(){
		// 配置多语言
		self::setLanguage();
		
		


	}
    function __empty(){
       go(__APP__);
       exit;
    }

    /**
     * [配置多语言]
     * @param [type] $lang [description]
     */
    static private function setLanguage($lang=null){


    	$file_tw = APP_PATH."Extend/Language/tw.php";
		$file_en = APP_PATH."Extend/Language/en.php";

		//session('lang',include ($file_en));

		// dump($_SESSION);
		// exit;
		$lang_s = session('lang');

		
    	if(isset($_POST['lang'])){
    	
    		$lang = $_POST['lang'];
    		if($lang == 'tw'){//繁体
				if(!$lang_s || $lang_s['_LANG_'] != 'tw'){
					session('lang',include($file_tw));
					L(session('lang'));
				}else{
					L($lang_s);
				}
			}
			if($lang == 'en'){//英文
				
				if(!$lang_s || $lang_s['_LANG_'] != 'en'){
					session('lang',include($file_en));

					L(session('lang'));
				}else{
					L($lang_s);
				}
			}
   		
    	}else{
    		
    		// 没有post参数，默认使用繁体
    		if(!$lang_s){//不存在相关session
    			
				// 没有语言包信息，默认加载繁体中文包
				session('lang',include ($file_tw));
				
				L(session('lang'));
			}else{
				// echo 12345;
				// dump($_SESSION);
				L($lang_s);

			}
    	}
    
				//dump($_SESSION);
    	
    }
}
?>