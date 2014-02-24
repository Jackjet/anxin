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
							<div class="whw1"><a href="javascript:change_page('intro','iss-isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/xt-e.jpg" alt=""></a></div>
							<!-- 系統特點 -->
							<div class="whw2"><a href="javascript:change_page('pros','iss-isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/tjcp-e.jpg" alt=""></a></div>
							<!-- 應用領域 -->
							<!-- <div class="wivas3"><a href="javascript:change_page('apparea','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly.jpg" alt=""></a></div> -->
							<div class="whw3"><a href="http://www.cctvhw.com/cn/product.php" target="_blank"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/cx-e.jpg" alt=""></a></div>
						
	</div>

					<!-- issivas 英文E -->

<?php
	}else{
?>
	<!-- 中文内容 -->
	<div id="thirWinBox">
		<!-- 系統簡介 -->
							<div class="whw1"><a href="javascript:change_page('intro','iss-isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/xt.jpg" alt=""></a></div>
							<!-- 系統特點 -->
							<div class="whw2"><a href="javascript:change_page('pros','iss-isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/tjcp.jpg" alt=""></a></div>
							<!-- 應用領域 -->
							<!-- <div class="wivas3"><a href="javascript:change_page('apparea','iss-ivas');"><img src="<?php echo __PUBLIC__;?>/images/business/third/iss/ly.jpg" alt=""></a></div> -->
							<div class="whw3"><a href="http://www.cctvhw.com/cn/product.php" target="_blank"><img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/cx.jpg" alt=""></a></div>
							
	</div>




<?php
}
?>
