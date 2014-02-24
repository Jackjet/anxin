<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $header_title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/notice.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/tablecloth.css" />

</head>

<body>
    <div id="container">
    	<div id="col_left">
        	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><div><a href="http://anxin.com" target="_blank" style="color:#005CA2;font-weight:bold;padding:5px 22px;">网站首页</a></div>
<div id="leftnav_t"><a href="http://anxin.com/admin.php/Index">信息管理</a></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Press">新闻 Press</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Announcement">公告 Announcement</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Report">财务报告 Report</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Circular">通函 Circular</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Sharecapital">股本申报表 Sharecapital</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Awards">资质荣誉 Awards</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Ppt">演示文稿 PPT</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Info">文章信息 Info</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Code">密碼管理 Code</a></div></div>

<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Search">搜索</a></div></div>

<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Index/clearCache">更新缓存</a></div></div>

<div id="leftnav_f"></div>		
        </div>
    	<div id="col_right">
            <div class="ajax_result"></div>
            <div id="li_notice" style="height:520px">
                <table cellspacing="0" cellpadding="0" id="tb_notice">
                    <tr>
                        <th class="sequence">序号</th>
                        <th class="create_year">年份</th>
                        <th class="td_title1">年报</th>
                        <th class="td_title1">中期报告</th>
                        <th colspan="2">操作</th>
                    </tr>
                    																				
                </table>
            </div>
           
        </div>
    </div>
</body>