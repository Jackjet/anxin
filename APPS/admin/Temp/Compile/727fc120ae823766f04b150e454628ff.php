<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $header_title;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<script language="javascript" type="text/javascript" src="/axChinahttp://anxin.com/APPS/admin/Tpl/Public/js/tablecloth.js"></script>-->
<script type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/jquery-ui.js"></script>

<script type="text/javascript">
    var app = 'http://anxin.com/admin.php';
    var public = 'http://anxin.com/Public';
   
</script>


<script language="javascript" type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/press.js"></script>
<script language="javascript" type="text/javascript" src="http://anxin.com/APPS/admin/Tpl/Public/js/common.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/notice.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://anxin.com/APPS/admin/Tpl/Public/css/tablecloth.css" />

</head>

<body>
    <div id="container">
    	<div id="col_left">
        	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><div><a href="http://anxin.com" target="_blank" style="color:#005CA2;font-weight:bold;padding:5px 22px;">网站首页</a></div>
<div id="leftnav_t"><a href="http://anxin.com/admin.php/Press">信息管理</a></div>
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
            222
            <div id="li_notice">
                <table cellspacing="0" cellpadding="0" id="tb_notice">
                    <tr>
                        <th class="sequence">ID</th>
                        <th class="td_title">中文标题</th>
                        <th width="180">英文标题</th>
                        <th width="80">类型</th>
                        <th colspan="2">操作</th>
                    </tr>
                    <?php if(is_array($list)):?><?php  foreach($list as $k=>$vo){ ?>
                    <tr>
                        <td class="sequence"><?php echo $vo['id'];?></td>
                        <td class="td_title">
                            <?php if($vo['istop'] == 1){?>
                                <span style="color:#f60">[置頂]</span>
                            <?php }?>
                            <a href="http://anxin.com/Public/press/zh/<?php echo $vo['file_url'];?>" target="_blank"><?php echo $vo['title'];?></a></td>
                        <td class="td_title"><a href="http://anxin.com/Public/press/en/<?php echo $vo['file_url'];?>" target="_blank"><?php echo $vo['title_en'];?></a></td>
                        <td>
                            <?php if($vo['type'] == 1){?>
                                企业新闻
                                <?php  }else{ ?>
                                <?php if($vo['type'] == 2){?>
                                媒体报道
                                <?php  }else{ ?>
                                行业信息
                                <?php }?>
                            <?php }?>
                        </td>
                        <td class="del"><span><a href="http://anxin.com/admin.php/Press/del?id=<?php echo $vo['id'];?>" onclick="return ondel();">删除</a></span></td>
                        <td class="edit"><span><a href="http://anxin.com/admin.php/Press/toUpdate?id=<?php echo $vo['id'];?>">修改</a></span></td>
                    </tr>
                    <?php }?><?php endif;?>																					
                </table>
            </div>
            <div class="blank"></div>
            <div id="page_nav" class="green-black"><?php echo $page;?></div>
            <div class="blank"></div>
            <div id="form_notice">
                <h3>发布信息：</h3>
                <form action="http://anxin.com/admin.php/Press" method="POST" enctype="multipart/form-data" class="u_form">
                	<!-- <input type="hidden" name="max_file_size" value="2048000"/> -->

                    <p><label for="creat_time">创建时间</label> <input type="text" id="create_time" name="create_time" value="<?php echo date('Y-m-d');?>"/></p>
                    <p><label for="channel">发布栏目</label> 
                        <select name='channel' id="channel">
                            <option value="press_2">新闻press</option>
                            <option value="announcement_2">公告Announcement</option>
                            <option value="circular_2">通函Circular</option>
                            <option value="sharecapital_2">股本申报表Sharecapital</option>
                            <option value="ppt_2">演示文稿ppt</option>
                            <option value="awards_2">资质荣誉Awards</option>
                        </select>
                    </p>
                    <p id="showType"><label for="type">类型</label> 
                        <select name='type' id="type">
                            <option value="1">企业新闻</option>
                            <option value="2">媒体报道</option>
                            <option value="3">行业信息</option>
                        </select>
                    </p>
       

                    <p><label for="istop">是否置頂</label><input type="radio" value='0' name="istop" checked="checked"/>否&nbsp;<input type="radio" value="1" name="istop"/>是</p>
                    
                    <p><label for="isshow">是否显示</label><input type="radio" value='0' name="isshow" />否&nbsp;<input type="radio" value="1" name="isshow" checked="checked"/>是</p>

                    <!-- <p><label for="url">鏈接地址</label> <input type="text" id="url" name="url" value="" size="28"/></p> -->
                    <p class='surl'><label for="url" ><input  type="checkbox" name="isurl" id="isurl" />鏈接地址</label> <input class='d' type="text" id="url" name="url" value="" size="28" disabled/></p>
                   
                    <p><label for="orders">排序</label> <input type="text" id="orders" name="orders" value="1" size="3"/></p>


                    <p><label for="title">中文标题</label> <input type="text" id="title" name="title" value=""/></p>
                    <p><label for="des">中文描述</label> <textarea name="des"></textarea></p>

                    <p><label for="title_en">英文标题</label> <input type="text" id="title_en" name="title_en" value=""/></p>
                    <p><label for="des_en">英文描述</label> <textarea name="des_en"></textarea></p>


                    <p><label for="pic_url">中文图片</label> <input type="file" id="pic_url" name="pic_url" /></p>
                    <p><label for="pic_url">英文图片</label> <input type="file" id="pic_url_en" name="pic_url_en" /></p>



                    <p><label for="press">中文文件上传</label> <input type="file" id="file_url" name="file_url" /></p>
                    <p><label for="press_en">英文文件上传</label> <input type="file" id="file_url_en" name="file_url_en" /></p>
                    <p class="submit"><input type="submit" value="添加新闻" /></p>
                <input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo $_SESSION[C("TOKEN_NAME")]?>"/></form>
            </div>
        </div>
    </div>
</body>