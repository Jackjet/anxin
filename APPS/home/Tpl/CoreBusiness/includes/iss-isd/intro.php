<?php
/**
 * iss-isd
 * 系統簡介
 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- 英文内容 -->
	<div id="thirContentBox">
		<a href="javascript:change_page('index','iss-isd');">Back</a>
		<div class="blank"></div>
					<p>Intelligent Safety System, namely ISS system, is a powerful security system consisting of intelligent analysis technology and smart security device. It filters the invalid information intelligently, so that personnel can receive the significant information. Thus, ISS system can predict the safety hazards in advance and largely promote the working efficiency of security personnel, to keep the target job safe. </p>
					
					<p>Anxin-China’s intelligent security hardware devices have various functions varying from the front-end data collection & transmission to back-end data storage and processing. Anxin-China owns an abundant of core intelligent products with proprietary intellectual property rights, for instance, image information processing cards, analog HD cameras, digital HD IP cameras,digital IP DVRs, data storage units and other data transmission devices; moreover, those high-end products have multiple patent rights that are greatly advanced in the international security area. </p>

<?php
	}else{
?>
	<!-- 中文内容 -->
	<div id="thirContentBox">
		<a href="javascript:change_page('index','iss-isd');">返回</a>
		<div class="blank"></div>
		
						<p>智能安全系統（Intelligent Safety System，簡稱ISS系統），ISS系統是由智能分析技術與智能安防設備組成的功能強大的安全系統。ISS系統將無效的信息進行智能過濾，只將有意義的信息提供給工作人員。從而極大的提高安全系統的工作效率。ISS系統提前預測安全隱患，對其有效控制以保障安全。</p>
						<br/>
						
						<div>
							<img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/intro1.jpg" width="200" alt="" />
							<img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/intro2.jpg" width="200" alt="" />
							<img src="<?php echo __PUBLIC__;?>/images/business/third/hardware/intro3.jpg" width="200" alt="" />
						</div>
						<br/>
						<p>從前端資料獲取、傳輸，再到後端資料存儲和處理，中國安芯智能安防硬體產品線豐富多樣，擁有了大批具備完全自主智能財產權的核心智能產品，包括圖像信息處理卡、類比高清攝像機、數位網路高清攝像機、網路數位硬碟錄影機、資料記憶體，以及傳輸設備等產品，擁有多項專利，其中部分技術居於全球安防企業領先行列。
						</p>

</div>




<?php
}
?>
