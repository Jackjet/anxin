<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta property="qc:admins" content="35773612776160165301616375" />
	<title>中國安芯控股有限公司 - www.anxin-china.com.hk</title>
	<link rel="stylesheet" type="text/css" href="http://anxin.com/APPS/home/Tpl/Public/css/common.css"/>
	<link rel="shortcut icon" href="/favicon.ico"/>
	<script type="text/javascript" src="http://anxin.com/APPS/home/Tpl/Public/js/jquery-1.7.1.js"></script>
	<!--[if lte IE 6]> 
		<script src="http://anxin.com/APPS/home/Tpl/Public/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script> 
		<script type="text/javascript"> 
		DD_belatedPNG.fix('div, ul, img, li, input , a, .secOn'); 
		/* 将 .png_bg 改成你应用了透明PNG的CSS选择器*/ 
		</script> 
	<![endif]--> 
	<script type="text/javascript">
						function change_lang(lang){
							var url = 'http://anxin.com/index.php';
							if(lang){
								
								$.post(url+'/Index/change_lang',{'lang':lang},function(data){

									window.location.reload()});
							}else{
								alert("對不起，程序出錯，不能更換語言。Sorry,error,can't change language.");
								return
							}
							
						}		
						var root = "http://anxin.com";
						var app = "http://anxin.com/index.php";
						var pub = "http://anxin.com/APPS/home/Tpl/Public";	

	</script>
	<script type="text/javascript" src="http://anxin.com/APPS/home/Tpl/Public/js/common.js"></script>


</head>
<body>
	<!-- 页面容器 S -->
	<div id="main">
		<!-- 头部容器：logo & ... S -->
		<div class="headbox">
			<!-- logo S -->
			<div class="logo">
				<img src="http://anxin.com/APPS/home/Tpl/Public/images/logo.png" width="360" height="50" alt="">
			</div>
			<!-- logo E -->
			
			<!-- logoRight S -->
			
		
				<ul class="logoRight">
					<li><a href="http://anxin.com/index.php"><?php echo L("_NAV_HOME_");?></a></li>
					
					
					<li>&nbsp;&nbsp;</li>
					<li><a href="javascript:setLang('tw');">中文</a></li>
					<li>|</li>

					<li><a href="javascript:setLang('en');">English</a></li>
				
				</ul>
			

			<!-- logoRight S -->
		</div>
		<!-- 头部容器：logo & ... E -->
		<!-- 导航菜单 S -->
		<div id="navs">
			<?php if(L('_LANG_') == 'en'){?>
				<!-- 导航英文样式S -->
					<ul class="navs_en">
						<li><a href="http://anxin.com/index.php/GrouProfile"><?php echo L("_NAV_GROUP_PRO_");?></a></li>
						<li><a href="http://anxin.com/index.php/CoreBusiness"><?php echo L("_CORE_BUSINESS_");?></a></li>
						<li><a href="http://anxin.com/index.php/InvestorRelations"><?php echo L("_INVESTOR_RELATIONS_");?></a></li>
						<li><a href="http://anxin.com/index.php/CorporateManagement"><?php echo L("_CORPORATE_MANAGEMENT_");?></a></li>
						<li><a href="http://anxin.com/index.php/Media"><?php echo L("_MEDIA_CENTER_");?></a></li>
						<li><a href="http://anxin.com/index.php/Contact"><?php echo L("_CONTACT_US_");?></a></li>

					</ul>
				<!-- 导航英文样式E -->

			<?php  }else{ ?>
				<!-- 导航中文样式S -->

					<ul class="navs_tw">
						<li><a href="http://anxin.com/index.php/GrouProfile"><?php echo L("_NAV_GROUP_PRO_");?></a></li>
						<li><a href="http://anxin.com/index.php/CoreBusiness"><?php echo L("_CORE_BUSINESS_");?></a></li>
						<li><a href="http://anxin.com/index.php/InvestorRelations"><?php echo L("_INVESTOR_RELATIONS_");?></a></li>
						<li><a href="http://anxin.com/index.php/CorporateManagement"><?php echo L("_CORPORATE_MANAGEMENT_");?></a></li>
						<li><a href="http://anxin.com/index.php/Media"><?php echo L("_MEDIA_CENTER_");?></a></li>
						<li><a href="http://anxin.com/index.php/Contact"><?php echo L("_CONTACT_US_");?></a></li>

					</ul>
				<!-- 导航中文样式E -->

			<?php }?>
			
		</div>
		<!-- 导航菜单 E -->
	<!-- -------------------------------------------------------------------- -->