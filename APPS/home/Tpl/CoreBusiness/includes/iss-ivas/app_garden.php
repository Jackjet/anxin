<style type="text/css">
	*{padding:0;margin:0;}
	.thirContent h1{font-size:30px;line-height:38px;border-left:3px solid #f00;text-indent: 10px;}
	.thirContent h2{margin-bottom: 15px;}
	.thirContent h2 a{font-size:15px;line-height: 33px;color:#f80;}
	.thirContent h3{font-size:14px;line-height: 28px;}
	.thirContent ul.app li {float:left;width:300px;height:240px;margin: 0 8px 10px 0;}
	.thirContent ul.app li p{display:inline-block;width:300px;text-align: center;text-indent: 0;}
</style>
<?php
/**
 * iss-ivas
 * 系統特點
 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- 英文内容 -->

	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">Back</a></h2>
		<h1>Industrial Park</h1>
		<h3>Industrial Status</h3>
		<p>In recent years, a variety of industrial parks including export processing zones, free trade zones, bonded zone, industrial zones, science and technology parks, tourism scenic areas and et al, have respectively sprung up. As the park’s economic development becomes the main driver in China’s economic growth, the data from State commerce department indicates that the gross regional production value reached 1,773 billion RMB in 54 state economic technological development areas in 2009, with total industrial output value as high as 5,127.1 billion RMB. The development of technology-park promotes our economy to become more and more prosperous, while a variety of security accidents also increase. Despite of the surveillance effect at a limited extent, the traditional video surveillance system cannot realize the expected goal of security and defense.</p>

		<h3>The Needs</h3>
		<p>Gradually, people pay more attention to the security problem in the prosperous development of technology park construction. It is necessary to strengthen the park’s security defense due to the security incidents of abruptness and consequent severity and et al. The traditional video surveillance system can only support the function of recording more than pre-alerts, so that the video surveillance cannot realize the timely prevention. It’s required to introduce another advanced intelligent video analysis system to strengthen the security protection of the technology park, for instance, dangerous products, major equipments, perimeter surveillance, warehouse monitoring and et al.</p>

		结构图(Structure chart)

		<ul class="app">
			<!-- 及時發現翻越圍欄行為 timely find someone climbing over the fence-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/1.jpg" width="300" alt="">
				<p>timely find someone climbing over the fence</p>
			</li>
			<!-- 及時發現違停車輛 timely find vehicles illegally parking-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/2.jpg" width="300" alt="">
				<p>timely find vehicles illegally parking</p>
			</li>

			<!-- 監測設備間人員闖入情況 monitor individual intruding in the equipment room-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/3.jpg" width="300" alt="">
				<p>monitor individual intruding in the equipment room</p>
			</li>
			<!-- 監測室內物體移走 monitor object being removed in the room-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/4.jpg" width="300" alt="">
				<p>monitor object being removed in the room</p>
			</li>

			<!-- 及時發現人員突然出現 timely find individual suddenly appearing-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/5.jpg" width="300" alt="">
				<p>timely find individual suddenly appearing</p>
			</li>

			<!-- 及時發現園區車輛逆行 timely find vehicles conversely running in the industrial park-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/6.jpg" width="300" alt="">
				<p>timely find vehicles conversely running in the industrial park</p>
			</li>

		

		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>園區</h1>
		<h3>行業狀況</h3>
		<p>近些年我國各行業園區(出口加工區、自由貿易區、保稅區、工業園、科技園、旅遊景區等)如雨後春筍般湧現。園區經濟的發展成為了我國經濟增長的主要動力之一，據商務部資料顯示，2011年，全國131個國家開發區實現地區生產總值（GDP）41357億元人民幣，工業增加值30034億元，工業總產值123529億元。 工業園區的發展促進了我國經濟的繁榮，但各類安全事故也隨之增加。而傳統的視頻監控系統雖然能起到一定的監控作用，但不能完全達到安全防範的效果。</p>

		<h3>需求分析</h3>
		<p>在園區建設蓬勃發展的同時，人們也加強了對其中的安全問題的重視。安全事故具有突發性、後果嚴重性等特點，如何加強對園區的安全防範顯得尤為重要。傳統的視頻監控系統只能起到錄影的作用，而不能進行事前預警，顯然難以真正發揮視頻監控防範于未然的作用。 為加強對園區的安全防護，必須引入一種更先進的，智慧化的視頻分析系統對園區進行有效的監控。如園區內危險品、重要設備監控，園區周界監控，倉庫監控、重要場所監控等。</p>

		结构图

		<ul class="app">
			<!-- 及時發現翻越圍欄行為 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/1.jpg" width="300" alt="">
				<p>及時發現翻越圍欄行為</p>
			</li>
			<!-- 及時發現違停車輛 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/2.jpg" width="300" alt="">
				<p>及時發現違停車輛</p>
			</li>

			<!-- 監測設備間人員闖入情況 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/3.jpg" width="300" alt="">
				<p>監測設備間人員闖入情況</p>
			</li>
			<!-- 監測室內物體移走 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/4.jpg" width="300" alt="">
				<p>監測室內物體移走</p>
			</li>

			<!-- 及時發現人員突然出現 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/5.jpg" width="300" alt="">
				<p>及時發現人員突然出現</p>
			</li>

			<!-- 及時發現園區車輛逆行 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/6.jpg" width="300" alt="">
				<p>及時發現園區車輛逆行</p>
			</li>

		

		</ul>


	</div>


<?php
}
?>
