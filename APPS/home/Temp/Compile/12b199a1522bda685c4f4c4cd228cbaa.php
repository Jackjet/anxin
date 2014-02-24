<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?>	
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
	

	<!-- ----------------------------------------------------------------- -->
		<!-- ads图片 S -->
		<div class="adimg">
			<ul>
				<?php if(L("_LANG_")== 'en'){?>
					<li>
						<img src="http://anxin.com/APPS/home/Tpl/Public/images/shipin-e.jpg" width="1000" height="290" alt=""/>
					</li>
					<li>
						<img src="http://anxin.com/APPS/home/Tpl/Public/images/anfang-e.jpg" width="1000" height="290" alt=""/>
					</li>
				
				<?php  }else{ ?>
					<li>
						<!-- <img src="http://anxin.com/APPS/home/Tpl/Public/images/shipin.jpg" width="1000" height="290" alt=""/> -->
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="1000" height="290">
					      <param name="movie" value="http://anxin.com/APPS/home/Tpl/Public/media/ivas.swf" />
					      <param name="quality" value="high" />
					      <param name="wmode" value="transparent" />
					      <param name="BGCOLOR" value="#000000" />
					      <embed src="http://anxin.com/APPS/home/Tpl/Public/media/ivas.swf" width="1000" height="290" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" bgcolor="#000000"></embed>
					    </object>	

					</li>
					<li>
						<img src="http://anxin.com/APPS/home/Tpl/Public/images/anfang.jpg" width="1000" height="290" alt=""/>
					</li>
				<?php }?>
			</ul>
			
		</div>
		<!-- ads图片 E -->
		<div class="blank1"></div>
		<div class="advideoimg">
			<!-- 视频 S-->
			<div class="video1">
					<!-- START OF THE PLAYER EMBEDDING TO COPY-PASTE -->
					 <div id="mediaplayer"></div>
					<?php if(L("_LANG_")== 'en'){?>
						
						<script type="text/javascript" src="http://anxin.com/APPS/home/Tpl/Public/media/jwplayer.js"></script>
                            <script type="text/javascript">
                                jwplayer("mediaplayer").setup({
                                    flashplayer: "http://anxin.com/APPS/home/Tpl/Public/media/player.swf",
                                    file: "http://anxin.com/APPS/home/Tpl/Public/data/anxin_2013_en.flv",
                                    width: 332,
                                    height: 176,
									autostart:true,
                                    image: "http://anxin.com/APPS/home/Tpl/Public/images/ivas_2013.jpg"
                                });
                            </script>

						
					<?php  }else{ ?>
				
						<script type="text/javascript" src="http://anxin.com/APPS/home/Tpl/Public/media/jwplayer.js"></script>
                            <script type="text/javascript">
                                jwplayer("mediaplayer").setup({
                                    flashplayer: "http://anxin.com/APPS/home/Tpl/Public/media/player.swf",
                                    file: "http://anxin.com/APPS/home/Tpl/Public/data/anxin_2013.flv",
                                    width: 332,
                                    height: 176,
									autostart:true,
                                    image: "http://anxin.com/APPS/home/Tpl/Public/images/ivas_2013.jpg"
                                });
                            </script>
					<?php }?>
		
					<!-- END OF THE PLAYER EMBEDDING -->
			</div>
			<!-- 视频 E-->
			<!-- isd ivas鏈接圖S -->
				<?php if(L("_LANG_")== 'en'){?>
					<div class="adimg1"><a href="http://anxin.com/index.php/CoreBusiness" ><img src="http://anxin.com/APPS/home/Tpl/Public/images/isd-e.jpg" width="332" height="176" alt=""></a></div>
					<div class="adimg2"><a href="http://anxin.com/index.php/CoreBusiness/issivas"><img src="http://anxin.com/APPS/home/Tpl/Public/images/iss-e.jpg" width="332" height="176" alt=""></a></div>
				<?php  }else{ ?>
					<div class="adimg1"><a href="http://anxin.com/index.php/CoreBusiness"><img src="http://anxin.com/APPS/home/Tpl/Public/images/isd.jpg" width="332" height="176" alt=""></a></div>
					<div class="adimg2"><a href="http://anxin.com/index.php/CoreBusiness/issivas"><img src="http://anxin.com/APPS/home/Tpl/Public/images/iss.jpg" width="332" height="176" alt=""></a></div>
				<?php }?>
			<!-- isd ivas鏈接圖E -->

		</div>
		<div class="blank1"></div>
		<!-- 主要内容信息 S -->
		<div class="contentbox">
			<!-- 主要内容左 S -->
			<div class="contentboxLeft">
				<!-- 股票信息 -->
				<div class="leftBox1">
					<div class="leftbox1r">
						<p style="color:#9b2322;color:#fff;"><?php echo L("_HKEX_NO_");?></p>
						<p style="color:#fff;font-size:16px;line-height:30px;">01149.HK</p>
					</div>
					<div class="nowprice"><em id="nowPrice"></em> <span><?php echo L("_HK_DOLLAR_");?></span></div>

				</div>
				<div class="leftBox2">
					<ul>
						<li><?php echo L("_OPEN_PRICE_TODAY_");?>：<span id="openPrice"></span></li>
						<li><?php echo L("_CLOSE_PRICE_Y_");?>：<span id="closePriceY"></span></li>
						<li><?php echo L("_HIGHEST_PRICE_");?>：<span id="hightPrice"></span></li>
						<li><?php echo L("_LOWEST_PRICE_");?>：<span id="lowestPrice"></span></li>

					</ul>
				</div>
				<div class="leftBox3">
					<p><?php echo L("_UPDATE_TIME_");?> <span id="updateTime"></span>&nbsp;
						<?php if(L('_LANG_') == 'en'){?>
								<a href="http://anxin.com/APPS/home/Tpl/Public/data/disclaimer_en.html" target="_blank">Disclaimer</a>
							<?php  }else{ ?>
								<a href="http://anxin.com/APPS/home/Tpl/Public/data/disclaimer.html" target="_blank">免責聲明</a>
						<?php }?>

					</p>

				</div>
				<div class="leftBox4"><a href="http://anxin.com/index.php/InvestorRelations/reports"><?php echo L("_REPORT_TXT_");?></a><a href="http://anxin.com/index.php/InvestorRelations/powerpoint"><?php echo L("_POWERPOINT_");?></a></div>

				<div class="leftBox5">
					<!-- 新版年报位置 -->
					<div id="nianbao">
						
						<!--  -->
							<!-- ---------------------------------------------英文年报------------------------------------------- -->

						<?php if(L('_LANG_') == 'en'){?>
							<!-- 年报英文S -->
							
							<?php if($report['iryear'] > $report['aryear']){?>

							
								<!-- 中期报告 -->
								<div>
									<a href="http://anxin.com/Public/reports/en/<?php echo $report['i_url_en'];?>" target="_blank">
									<p><?php echo $report['iryear'];?> <br/><?php echo L("_I_REPORT_");?> </p>
									<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>
								</a>
								</div>
								
								<div>
									<a href="http://anxin.com/Public/reports/en/<?php echo $report['a_url_en'];?>" target="_blank">
										<p><?php echo $report['aryear'];?><br/><?php echo L("_A_REPORT_");?></p>

										<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>

									</a>
								</div>

								<!-- 年报 -->
								
							
							<?php  }else{ ?>
								<div>
									<!-- 年报 -->
									<a href="http://anxin.com/Public/reports/en/<?php echo $report['a_url_en'];?>" target="_blank">
									<p><?php echo $report['aryear'];?> <br/> <?php echo L("_A_REPORT_");?></p>
									<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>

									</a>
								</div>
								
								
								<div>
									<!-- 中期报告 -->
									<a href="http://anxin.com/Public/reports/en/<?php echo $report['i_url_en'];?>" target="_blank">
										<p><?php echo $report['iryear'];?> <br/><?php echo L("_I_REPORT_");?> </p>
										<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>

									</a>
								
								</div>
							
								
								
							<?php }?>
							<!-- 年报英文E -->

							<!-- ---------------------------------------------中文年报------------------------------------------- -->
						<?php  }else{ ?>
						<!-- 年报中文S -->
							<?php if($report['iryear'] > $report['aryear']){?>
								<div>
									<!-- 中期报告 -->
									<a href="http://anxin.com/Public/reports/zh/<?php echo $report['i_url'];?>" target="_blank">
									<p><?php echo $report['iryear'];?> <br/><?php echo L("_I_REPORT_");?> </p>
									<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>


									</a>
								</div>

								<div>
									<!-- 年报 -->
									<a href="http://anxin.com/Public/reports/zh/<?php echo $report['a_url'];?>" target="_blank">
									<p><?php echo $report['aryear'];?><br/><?php echo L("_A_REPORT_");?></p>
									<img src="http://anxin.com/Public/reports/images/nb.jpg" width="32" height="32" alt=""/>
									</a>
								</div>

									
							

							<?php  }else{ ?>
								<div>
									<!-- 年报 -->
									<a href="http://anxin.com/Public/reports/zh/<?php echo $report['a_url'];?>" target="_blank">
									<p><?php echo $report['aryear'];?><br/><?php echo L("_A_REPORT_");?></p>
									<img src="http://anxin.com/Public/reports/images/<?php echo $report['a_img'];?>" width="32" height="32" alt=""/>
									</a>
								</div>
								

								<div>
									<!-- 中期报告 -->
									<a href="http://anxin.com/Public/reports/zh/<?php echo $report['i_url'];?>" target="_blank">
									<p><?php echo $report['iryear'];?><br/><?php echo L("_I_REPORT_");?> </p>
									<img src="http://anxin.com/Public/reports/images/<?php echo $report['i_img'];?>" width="32" height="32" alt=""/>

									</a>
								
								</div>
							<?php }?>
						<!-- 年报中文E -->
						<?php }?>
						<!-- 年报E -->

					</div>
					<!-- 演示文稿 -->
					<div id="powerpoint">
						<?php if(L('_LANG_') == 'en'){?>
							<a href="http://anxin.com/<?php echo $ppt['file_url_en'];?>" target="_blank">
							
							
							<img src="http://anxin.com/<?php echo $ppt['pic_url_en'];?>" width="146" height="110" alt=""/>
							<p><?php echo $ppt['title_en'];?></p>
						</a>

						<?php  }else{ ?>
						<a href="http://anxin.com/<?php echo $ppt['file_url'];?>" target="_blank">
							
							<img src="http://anxin.com/<?php echo $ppt['pic_url'];?>" width="146" height="110" alt=""/>
							<p><?php echo $ppt['title'];?></p>
			
						</a>



						<?php }?>
						

					</div>

					<!-- 旧版年报位置 -->
					

				</div>
				
				
			</div>
			<!-- 主要内容左 E -->

			<div class="contentboxRight">
				<div class="rightBox1">
					<h1><a href="http://anxin.com/index.php/Media"><?php echo L("_COMPANY_NEWS_");?></a></h1>
				</div>
				<div class="rightBox2">
					<!-- 公司新闻内容S -->
					<div class="medias1">
						<!-- 新闻封面图片S -->
						<?php if(L('_LANG_') == 'en'){?>
							<a href="http://anxin.com/<?php echo $news_one['file_url_en'];?>" target="_blank" title="<?php echo $news_one['title_en'];?>"><img src="http://anxin.com/<?php echo $news_one['pic_url'];?>" width="210" height="140" alt=""></a>
						<?php  }else{ ?>
							<a href="http://anxin.com/<?php echo $news_one['file_url'];?>" target="_blank" title="<?php echo $news_one['title'];?>"><img src="http://anxin.com/<?php echo $news_one['pic_url'];?>" width="210" height="140" alt=""></a>
						<?php }?>
						<!-- 新闻封面图片E -->

						<!-- 封面新闻S -->
						<?php if(L('_LANG_') == 'en'){?>
							<div class="medias_one">
								<h3><a href="http://anxin.com/<?php echo $news_one['file_url_en'];?>" target="_blank" title="<?php echo $news_one['title_en'];?>"><?php echo strtoupper($news_one['title_en']);?></a></h3>
								<p><?php echo showShort(ucfirst($news_one['des_en']),200);?></p>
							</div>
						<?php  }else{ ?>
							<div class="medias_one">
								<h3><a href="http://anxin.com/<?php echo $news_one['file_url'];?>" target="_blank" title="<?php echo $news_one['title'];?>"><?php echo $news_one['title'];?></a></h3>
								<p><?php echo showShort($news_one['des'],200);?></p>
							</div>
						<?php }?>

						<!-- 封面新闻E -->
						


					</div>
					<div class="hr1"></div>
				
					<div class="medias2">

						<ul>
							<?php if(L('_LANG_') == 'en'){?>
								<?php if(is_array($newsList)):?><?php  foreach($newsList as $vo){ ?>

									<?php if($vo['url']){?>
										<li><span><?php echo date('d M Y',$vo['create_time']);?></span><a href="<?php echo $vo['url'];?>" target="_blank" title="<?php echo strtoupper($vo['title_en']);?>"><?php echo showShort(strtoupper($vo['title_en']),60);?></a></li>
									<?php  }else{ ?>
										<li><span><?php echo date('d M Y',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url_en'];?>" target="_blank" title="<?php echo strtoupper($vo['title_en']);?>"><?php echo showShort(strtoupper($vo['title_en']),60);?></a></li>
									<?php }?>
								
								
								<?php }?><?php endif;?>
							<?php  }else{ ?>
								<?php if(is_array($newsList)):?><?php  foreach($newsList as $vo){ ?>
									
									<?php if($vo['url']){?>
										<li><span><?php echo date('Y年m月d日',$vo['create_time']);?></span><a href="<?php echo $vo['url'];?>" target="_blank" title="<?php echo $vo['title'];?>"><?php echo showShort($vo['title'],80);?></a></li>
									<?php  }else{ ?>
										<li><span><?php echo date('Y年m月d日',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url'];?>" target="_blank" title="<?php echo $vo['title'];?>"><?php echo showShort($vo['title'],80);?></a></li>
									<?php }?>

								
								
								<?php }?><?php endif;?>
							<?php }?>
							
							<!-- <li><span>2013年12月12日</span><a href="">貴州省納雍縣羅縣長一行在中國安芯</a></li>
							<li><span>2013年12月12日</span><a href="">貴州省納雍縣羅縣長一行在中國安芯</a></li>
							<li><span>2013年12月12日</span><a href="">貴州省納雍縣羅縣長一行在中國安芯</a></li> -->
						</ul>
					</div>
					<!-- 公司新闻内容E -->
				</div>
					<!-- 公告通函 -->
				<div class="rightBox3"><h1><a class="a_on" href="http://anxin.com/index.php/InvestorRelations/announcements"><?php echo L("_ANNOUNCEMENT_");?></a><a href="http://anxin.com/index.php/InvestorRelations/circulars"><?php echo L("_CIRCULAR");?></a>
				<a href="http://anxin.com/index.php/InvestorRelations/sharecapital"><?php echo L("_GBSB_");?></a></h1></div>
				<div class="rightBox4">
					<ul>

						<?php if(L('_LANG_') == 'en'){?>
							
								<?php if(is_array($ann)):?><?php  foreach($ann as $vo){ ?>
								<li><span><?php echo date('d M Y',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url_en'];?>" target="_blank" title="<?php echo strtoupper($vo['title_en']);?>"><?php echo showShort(strtoupper($vo['title_en']),60);?></a></li>
								
								<?php }?><?php endif;?>
								

							<?php  }else{ ?>
								
								<?php if(is_array($ann)):?><?php  foreach($ann as $vo){ ?>
								<li><span><?php echo date('Y年m月d日',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url'];?>" target="_blank" title="<?php echo $vo['title'];?>"><?php echo showShort($vo['title'],80);?></a></li>
								
								<?php }?><?php endif;?>
								
						<?php }?>
					<!-- 公告E -->
						
					</ul>
					<ul style="display:none;">
						<?php if(L('_LANG_') == 'en'){?>
							
								
								<?php if(is_array($cir)):?><?php  foreach($cir as $vo){ ?>
								<li><span><?php echo date('d M Y',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url_en'];?>" target="_blank" title="<?php echo strtoupper($vo['title_en']);?>"><?php echo showShort(strtoupper($vo['title_en']),60);?></a></li>
								
								<?php }?><?php endif;?>

							<?php  }else{ ?>
								
								
								<?php if(is_array($cir)):?><?php  foreach($cir as $vo){ ?>
								<li><span><?php echo date('Y年m月d日',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url'];?>" target="_blank" title="<?php echo $vo['title'];?>"><?php echo showShort($vo['title'],80);?></a></li>
								
								<?php }?><?php endif;?>
						<?php }?>
						<!-- 通函 -->
					</ul>
					<ul style="display:none;">
						<?php if(L('_LANG_') == 'en'){?>
							
								
								<?php if(is_array($share)):?><?php  foreach($share as $vo){ ?>
								<li><span><?php echo date('d M Y',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url_en'];?>" target="_blank" title="<?php echo strtoupper($vo['title_en']);?>"><?php echo showShort(strtoupper($vo['title_en']),60);?></a></li>
								
								<?php }?><?php endif;?>

							<?php  }else{ ?>
								
								
								<?php if(is_array($share)):?><?php  foreach($share as $vo){ ?>
								<li><span><?php echo date('Y年m月d日',$vo['create_time']);?></span><a href="http://anxin.com/<?php echo $vo['file_url'];?>" target="_blank" title="<?php echo $vo['title'];?>"><?php echo showShort($vo['title'],80);?></a></li>
								
								<?php }?><?php endif;?>
						<?php }?>
						<!-- 股本申报表 -->
					</ul>
				</div>
				
			</div>

		</div>
		<!-- 主要内容信息 E -->

	</div>
	<!-- 页面容器 E -->
	
	<!-- 页脚 -->
	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><div class="blank4"></div>
	<!-- 网站地图 & 页脚 S -->
	<div id="footers">
	<!-- 	<div class="maptitle">
			<ul>
				<li><?php echo L("_NAV_GROUP_PRO_");?></li>
				<li><?php echo L("_CORE_BUSINESS_");?></li>
				<li><?php echo L("_INVESTOR_RELATIONS_");?></li>
				<li><?php echo L("_CORPORATE_MANAGEMENT_");?></li>
				<li><?php echo L("_MEDIA_CENTER_");?></li>
				<li><?php echo L("_CONTACT_US_");?></li>
			</ul>
		</div> -->
		<div class="mapcontent">
			<!-- <ul class='maptxt'>
				<li>
					<dl>
						<dt><a href="http://anxin.com/index.php/GrouProfile" ><?php echo L("_COMPANY_PROFILE_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/GrouProfile/statement" ><?php echo L("_CHAIRMAN_STATEMENT_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/GrouProfile/roadmap" ><?php echo L("_ROAD_MAP_");?></a></dt>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="http://anxin.com/index.php/CoreBusiness/" >ISD</a></dt>
						<dt><a href="http://anxin.com/index.php/CoreBusiness/issivas" >ISS-iVAS</a></dt>
						<dt><a href="http://anxin.com/index.php/CoreBusiness/issisd" ><?php echo L("_ISS_ISD_");?></a></dt>
					</dl>
				</li>
				
				<li>
					<dl>
						<dt><a href="http://anxin.com/index.php/InvestorRelations" ><?php echo L("_CORP_INFO");?></a></dt>
						<dt><a href="http://anxin.com/index.php/InvestorRelations/reports" ><?php echo L("_REPORT_TXT_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/InvestorRelations/announcements" ><?php echo L("_ANNOUNCEMENT_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/InvestorRelations/circulars" ><?php echo L("_CIRCULAR");?></a></dt>
						<dt><a href="http://anxin.com/index.php/InvestorRelations/sharecapital" ><?php echo L("_STATEMENT_CHANGE_STOCK_");?></a></dt>
					
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="http://anxin.com/index.php/CorporateManagement" ><?php echo L("_COR_MANAGEMENT_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/CorporateManagement/layers" ><?php echo L("_MANAGEMENT_LAYERS_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/CorporateManagement/awards" ><?php echo L("_ACC_REWARDS_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/CorporateManagement/edges" ><?php echo L("_COM_EDGES_");?></a></dt>
					</dl>
				</li>
				<li>
					<dl>
						<dt><a href="http://anxin.com/index.php/Media" ><?php echo L("_COR_NEWS_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/Media/mediareport" ><?php echo L("_MEDIA_REPORT_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/Media/analysis" ><?php echo L("_INDUS_ANALYSIS_");?></a></dt>
						<dt><a href="http://anxin.com/index.php/Media/publicity" ><?php echo L("_COR_PUBLIC_");?></a></dt>
					</dl>
				</li>
				<li></li>
			</ul> -->
			<div class="linebox"></div>
			<div class="fbottom">
				<p><span><a href="http://anxin.com/index.php/Contact/sitemap" ><?php echo L("_SITEMAP_");?></a>|
						<?php if(L('_LANG_') == 'en'){?>
								<a href="http://anxin.com/APPS/home/Tpl/Public/data/disclaimer_en.html" target="_blank">Disclaimer</a>
							<?php  }else{ ?>
								<a href="http://anxin.com/APPS/home/Tpl/Public/data/disclaimer.html" target="_blank">免責聲明</a>
						<?php }?>
					|<a href='http://ns101.newsbook.net/horde/imp/' target="_blank"><?php echo L("_EMAIL_");?></a></span><?php echo L("_COPYRIGHT_");?></p>
				
			</div>
		</div>
	</div>
	<!-- 网站地图 & 页脚 E -->
</body>
</html>
