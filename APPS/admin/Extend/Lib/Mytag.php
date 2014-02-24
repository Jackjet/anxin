<?php
/*
自定义标签
 */
class Mytag{

	public $tag = array(
		'jqueryeasyui'=>array("block"=>0,),

	);







	public function _jqueryeasyui($attr, $content)
    {
        $path = __HDPHP_EXTEND__ . '/Org/jqueryeasyui/';
        $str = '';
        $str .= '<link href="' . $path . 'easyui.css" rel="stylesheet">';
        $str .= '<link href="' . $path . 'icon.css" rel="stylesheet">';
        $str .= '<script src="' . $path . 'jquery.min.js"></script>';
        $str .= '<script src="' . $path . 'jquery.easyui.min.js"></script>';
        return $str;
    }

}







?>