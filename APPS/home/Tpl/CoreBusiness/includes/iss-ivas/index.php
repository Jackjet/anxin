<script type="text/javascript">

	$(document).ready(function(){
		// 内容页win8框图片效果
		var win8Img = $("#thirWinBox div img");
		if(win8Img.length){
			win8Img.hover(function(){
				$(this).fadeTo('normal',0.3);
			},function(){
				$(this).fadeTo('normal',1);

			});
		}
	});
	
</script>
<?php
/**
 * iss-ivas
 * 系統簡介
 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- issivas 英文S -->
	<div id="thirWinBox">
		<!-- 系統簡介 -->
							<div class="wivas1"><a href="javascript:change_page('intro','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/xtjj-e.jpg" alt=""></a></div>
							<!-- 系統特點 -->
							<div class="wivas2"><a href="javascript:change_page('feature','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/td-e.jpg" alt=""></a></div>
							<!-- 應用領域 -->
							<!-- <div class="wivas3"><a href="javascript:change_page('apparea','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly.jpg" alt=""></a></div> -->
							<div class="wivas3"><a href="<?php echo __PUBLIC__;?>/data/apparea_en.pdf" target="_blank"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly-e.jpg" alt=""></a></div>
							<!-- 規則介紹 -->
							<div class="wivas4"><a href="javascript:change_page('rule','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/gz-e.jpg" alt=""></a></div>
							<!-- 成功案例 -->
							<div class="wivas5"><a href="javascript:change_page('success','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/al-e.jpg" alt=""></a></div>
							
	</div>

					<!-- issivas 英文E -->

<?php
	}else{
?>
	<!-- 中文内容 -->
	<div id="thirWinBox">
		<!-- 系統簡介 -->
							<div class="wivas1"><a href="javascript:change_page('intro','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/xtjj.jpg" alt=""></a></div>
							<!-- 系統特點 -->
							<div class="wivas2"><a href="javascript:change_page('feature','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/td.jpg" alt=""></a></div>
							<!-- 應用領域 -->
							<!-- <div class="wivas3"><a href="javascript:change_page('apparea','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly.jpg" alt=""></a></div> -->
							<div class="wivas3"><a href="<?php echo __PUBLIC__;?>/data/apparea.pdf" target="_blank"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly.jpg" alt=""></a></div>
							<!-- 規則介紹 -->
							<div class="wivas4"><a href="javascript:change_page('rule','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/gz.jpg" alt=""></a></div>
							<!-- 成功案例 -->
							<div class="wivas5"><a href="javascript:change_page('success','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/al.jpg" alt=""></a></div>
							
	</div>




<?php
}
?>
