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
	/*
		
	 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- 英文内容 -->
	<div id="thirWinBox">
							<div class="wisd1"><a href="javascript:change_page('intro','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/jj-e.jpg" alt=""></a></div>
							<div class="wisd2"><a href="javascript:change_page('presentation','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/jm-e.jpg" alt=""></a></div>
							<div class="wisd3"><a href="javascript:change_page('issue','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/wt-e.jpg" alt=""></a></div>
							<div class="wisd4"><a href="javascript:change_page('key_solution','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/dc-e.jpg" alt=""></a></div>
							<div class="wisd5"><a href="javascript:change_page('prospect','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/zw-e.jpg" alt=""></a></div>
		</div>
	
<?php
	}else{
?>
	<!-- 中文内容 -->
	
		
		<div id="thirWinBox">
							<div class="wisd1"><a href="javascript:change_page('intro','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/jj.jpg" alt=""></a></div>
							<div class="wisd2"><a href="javascript:change_page('presentation','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/jm.jpg" alt=""></a></div>
							<div class="wisd3"><a href="javascript:change_page('issue','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/wt.jpg" alt=""></a></div>
							<div class="wisd4"><a href="javascript:change_page('key_solution','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/dc.jpg" alt=""></a></div>
							<div class="wisd5"><a href="javascript:change_page('prospect','isd');"><img src="<?php echo __PUBLIC__;?>/images/business/third/isd/zw.jpg" alt=""></a></div>
		</div>
	
<?php
}
?>
