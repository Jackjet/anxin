<?php
// 空模块
class EmptyControl extends Control{
	function index(){
		header("location:".__APP__);
		exit;
	}

	

}
?>