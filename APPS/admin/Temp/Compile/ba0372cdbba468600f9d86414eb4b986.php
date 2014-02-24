<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $header_title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<script language="javascript" type="text/javascript" src="/axChinahttp://anxin.com/APPS/admin/Tpl/Public/js/tablecloth.js"></script>-->
<script type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/jquery.js"></script>
<script type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/jquery-ui.js"></script>

<script type="text/javascript">
    var app = 'http://anxin.com/admin.php';
    var public = 'http://anxin.com/Public';
    
</script>
<script language="javascript" type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/announcement.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/notice.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/tablecloth.css" />

</head>

<body>
    <div id="container">
    	<div id="col_left">
        	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><div><a href="http://anxin.com" target="_blank" style="color:#005CA2;font-weight:bold;padding:5px 22px;">网站首页</a></div>
<div id="leftnav_t"><a href="http://anxin.com/admin.php/Announcement">信息管理</a></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Press" style="color:#f60;font-weight:bold;">发布</a></div></div>


<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Report">财务报告 Report</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Awards">资质荣誉 Awards</a></div></div>


<!-- 
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Announcement">公告 Announcement</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Circular">通函 Circular</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Sharecapital">股本申报表 Sharecapital</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Ppt">演示文稿 PPT</a></div></div> -->

<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Info">文章信息 Info</a></div></div>
<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Code">密碼管理 Code</a></div></div>

<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Search">搜索</a></div></div>

<div id="leftnav_m"><div class="leftnav_s"><a href="http://anxin.com/admin.php/Index/clearCache">更新缓存</a></div></div>

<div id="leftnav_f"></div>		

        </div>
    	<div id="col_right">
    		<div class="ajax_result"></div>
            <div id="li_notice">
                <table cellspacing="0" cellpadding="0" id="tb_notice">
                    <tr>
                        <th class="sequence">ID</th>
                        <th class="td_title">中文标题</th>
                        <th class="td_title">英文标题</th>
                        <th colspan="2">操作</th>
                    </tr>
                    <?php if(is_array($list)):?><?php  foreach($list as $vo){ ?>
                    <tr>
                        <td class="sequence"><?php echo $vo['id'];?></td>
                        <td class="td_title"><a href="http://anxin.com/Public/announcements/zh/<?php echo $vo['file_url'];?>" target="_blank"><?php echo $vo['title'];?></a></td>
                        <td class="td_title"><a href="http://anxin.com/Public/announcements/en/<?php echo $vo['file_url_en'];?>" target="_blank"><?php echo $vo['title_en'];?></a></td>
                        <td class="del"><span><a href="javascript:ajax_del_announcement('<?php echo $vo['id'];?>')">删除</a></span></td>
                        <td class="edit"><span><a href="http://anxin.com/admin.php/Announcement/toUpdate?id=<?php echo $vo['id'];?>">修改</a></span></td>
                    </tr>
                    <?php }?><?php endif;?>																					
                </table>
            </div>
            <div class="blank"></div>
            <div id="page_nav" class="green-black"><?php echo $page;?></div>
            <div class="blank"></div>
            <div id="form_notice">
                <form action="http://anxin.com/admin.php/Announcement/upload" method="POST" enctype="multipart/form-data" class="u_form">
                	<input type="hidden" name="max_file_size" value="2048000"/>
                    <p><label for="creat_time">创建时间</label> <input type="text" id="create_time" name="create_time" value="<?php echo date('Y-m-d');?>"/></p>
                    <p><label for="title">中文标题</label> <input type="text" id="title" name="title" value="<?php echo $title;?>"/></p>
                    <p><label for="title_en">英文标题</label> <input type="text" id="title_en" name="title_en" value="<?php echo $title_en;?>"/></p>
                    <p><label for="notice">中文文件上传</label> <input type="file" id="announcement" name="announcement" /></p>
                    <p><label for="notice">英文文件上传</label> <input type="file" id="announcement_en" name="announcement_en" /></p>
                    <p class="submit"><input type="submit" value="添加公告" /></p>
                <input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo $_SESSION[C("TOKEN_NAME")]?>"/></form>
            </div>
        </div>
    </div>
</body>