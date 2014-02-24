<style type="text/css">
	*{padding:0;margin:0;}
	.thirContent h1{font-size: 30px;line-height: 32px;color:red;border-left: 2px solid #cdcdcd;margin-bottom: 20px;text-indent: 12px;}
	.win8box{position:relative;width:582px;height:612px;margin:0 auto;overflow: hidden;}
	.win8box div{position:absolute;border:1px solid #fff;overflow: hidden;cursor: pointer;}

	.win8box div.w1{width:310px;height:200px;top:5px;left:5px;}
	.win8box div.w2{width:255px;height:250px;top:5px;left:320px;}
	.win8box div.w3{width:310px;height:220px;top:210px;left:5px;}
	.win8box div.w4{width:255px;height:170px;top:260px;left:320px;}
	.win8box div.w5{width:200px;height:170px;top:435px;left:5px;}
	.win8box div.w6{width:180px;height:170px;top:435px;left:210px;}
	.win8box div.w7{width:180px;height:170px;top:435px;left:395px;}
</style>
<script type="text/javascript">
	var win = $(".win8box img");
	win.hover(function(){
		$(this).css({"border":'1px solid #fff'});
	},function(){
		$(this).css({"border":'none'});

	}); 
</script>
<?php
/**
 * iss-ivas
 * 应用领域
 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- 英文内容 -->

	<div class="thirContent">
		<a style="display:inline-block;line-height:35px;text-indent:2em;" href="javascript:change_page('index','iss-ivas');">Back</a>

		<!-- <h1>Industrial Solution </h1> -->
		<div class="win8box">
			<!-- 310*200 公路-->
			<div class="w1">
				<img onclick="change_page('app_road','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="310" height="200" alt="">
			</div>

			<!-- 255*250 轨道-->
			<div class="w2">
				<img onclick="change_page('app_track','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="255" height="250" alt="">
			</div>

			<!-- 310*220 港口-->
			<div class="w3">
				<img onclick="change_page('app_port','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="310" height="220" alt="">
				
			</div>

			<!-- 255*170 城市-->
			<div class="w4">
				<img onclick="change_page('app_city','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="255" height="170" alt="">
				
			</div>

			<!-- 200*170 石油-->
			<div class="w5">
				<img onclick="change_page('app_oil','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="200" height="170" alt="">
				
			</div>

			<!-- 180*170 商業-->
			<div class="w6">
				<img onclick="change_page('app_business','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="180" height="170" alt="">
				
			</div>

			<!-- 180*170 園區-->
			<div class="w7">
				<img onclick="change_page('app_garden','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="180" height="170" alt="">
				
			</div>
		</div>
	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<!-- <h1>行業方案</h1> -->
		<a style="display:inline-block;line-height:35px;text-indent:2em;" href="javascript:change_page('index','iss-ivas');">返回</a>

		<div class="win8box">
			<!-- 310*200 公路-->
			<div class="w1">
				<img onclick="change_page('app_road','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="310" height="200" alt="">
			</div>

			<!-- 255*250 轨道-->
			<div class="w2">
				<img onclick="change_page('app_track','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="255" height="250" alt="">
			</div>

			<!-- 310*220 港口-->
			<div class="w3">
				<img onclick="change_page('app_port','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="310" height="220" alt="">
				
			</div>

			<!-- 255*170 城市-->
			<div class="w4">
				<img onclick="change_page('app_city','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="255" height="170" alt="">
				
			</div>

			<!-- 200*170 石油-->
			<div class="w5">
				<img onclick="change_page('app_oil','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="200" height="170" alt="">
				
			</div>

			<!-- 180*170 商業-->
			<div class="w6">
				<img onclick="change_page('app_business','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="180" height="170" alt="">
				
			</div>

			<!-- 180*170 園區-->
			<div class="w7">
				<img onclick="change_page('app_garden','iss-ivas');" src="<?php echo __PUBLIC__;?>/images/win8s.jpg" width="180" height="170" alt="">
				
			</div>
		</div>
	</div>

<?php
}
?>
