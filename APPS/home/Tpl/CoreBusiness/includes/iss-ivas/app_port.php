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
		<h1>Port Infrastructure</h1>

		<h3>Industrial Status</h3>
		<p>Port is one of state’s major investment areas, now staying in the accelerated capacity-expansion stage. Moreover, the construction investment always keeps growingas the total numbers of both ports and parking places constantly increase. The national ports have production-usage parking places during the year ended 31 December2011, increasing 334 ones more than the previous year. Moreover, the cargo handling capacity in the national ports arrives at 10.041 billion tons, increasing 12.4% more than the previous year. The rapid development of port business also requires the monitoring ability of video surveillance system to be greatly enhanced. Anyhow, by contrast, the traditional port surveillance is realized through on-duty personnel with limited monitoring efficiency; the human surveillance model has many uncertain potential safety hazards while many occasional incidents are unpredictable.</p>
		
		<h3>The Needs</h3>
		<p>Under the influence of complicated port operation affairs, it’s necessary to reduce the accidental injuries of production personnel and the major losses of port equipments, to make fast and effective emergency rescue in the port’s incidents. Thus, it’s required to execute multi-dimensional surveillance model on the ports to prevent the disastrous influence of expanded accidents. </p>
		

		<h3>Port’s Major Surveillance Aspects: </h3>
		<p><span>Water Area Intrusion Surveillance: </span>Water Area Intrusion Surveillance: the larger the port extent becomes, the more the water areas are; it’s necessary to monitor all unidentified objects and vessels on the water area with potential safety hazards, and to send related alerts in real time. </p>
		<p><span>Navigation channel surveillance: </span>to execute the monitoring alarm at the vessels with irregular navigation lines, driving directions& orders and et al. </p>
		<p><span>Freight yard intrusion surveillance:</span>container terminal and bonded warehouse are the key sites for the customs to monitor, and thus it’s required to implement the monitoring alarm when personnel and vehicles pass in and out of those sites at standby unattended time.</p>
		结构图(Structure chart)

		<ul class="app">
			<!-- 對人員違規翻越碼頭圍欄進行報警 send alarms towards individuals climbing over the port’s fence illegally-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/1.jpg" width="300" alt="">
				<p>send alarms towards individuals climbing over the port’s fence illegally</p>
			</li>
			<!-- 對港口車輛行駛方向進行監控 monitor the vehicle’s driving direction on the spot-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/2.jpg" width="300" alt="">
				<p>monitor the vehicle’s driving direction on the spot</p>
			</li>

			<!-- 對水域進行入侵監控 monitor the intrusion movement on water area-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/3.jpg" width="300" alt="">
				<p>monitor the intrusion movement on water area</p>
			</li>
			<!-- 及時發現貨物跌落 timely find the goods dropping-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/4.jpg" width="300" alt="">
				<p>timely find the goods dropping</p>
			</li>

			<!-- 對港口滯留情況進行監控 monitor the goods or personnel staying on the port-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/5.jpg" width="300" alt="">
				<p>monitor the goods or personnel staying on the port</p>
			</li>


		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>港口</h1>

		<h3>行業狀況</h3>
		<p>港口是國家的重點投資領域，現正處於加速擴容階段，建設投資保持增長態勢，無論是港口數量還是泊位總量都在持續增長。截至2011年底，全國港口擁有生產用碼頭泊位31968個，較2010年底增加334個。全國港口完成貨物輸送量100.41億噸，比上年增長12.4%。港口業務的迅猛發展要求視頻監控系統的監控能力相應提高，而傳統的港口監控主要是通過人員值班的方式來實現，人的監控力度是有限的，而突發事件是難以預見的，因此僅靠人為監控難以保證萬無一失，從而存在眾多的安全隱患。</p>
		
		<h3>需求分析</h3>
		<p>由於港口作業的複雜性，為減少港口生產安全中人員的意外傷害與港口設施、港口機械設備的重大損失，並能在港口安全事故發生時迅速、有效地進行應急救援，防止事故災害擴大而造成的惡劣影響，需要對港口碼頭進行多方面的監控。</p>
		

		<h3>港口的主要監控：</h3>
		<p><span>水域入侵監控：</span>港口範圍大，水域多，對進入存在安全隱患水域的船隻、不明物體進行監測報警。</p>
		<p><span>航道秩序監控：</span>對不按照規定的航線、進出方向、順序等行為進出港的船隻進行監測報警。</p>
		<p><span>貨場入侵監控：</span>集裝箱碼頭、保稅倉庫等是貨物的集散地及海關監管的重點場所，對非工作時間內人員、車輛進入貨場的行為進行監測報警等。 </p>
		结构图

		<ul class="app">
			<!-- 對人員違規翻越碼頭圍欄進行報警 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/1.jpg" width="300" alt="">
				<p>對人員違規翻越碼頭圍欄進行報警</p>
			</li>
			<!-- 對港口車輛行駛方向進行監控 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/2.jpg" width="300" alt="">
				<p>對港口車輛行駛方向進行監控</p>
			</li>

			<!-- 對水域進行入侵監控 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/3.jpg" width="300" alt="">
				<p>對水域進行入侵監控</p>
			</li>
			<!-- 及時發現貨物跌落 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/4.jpg" width="300" alt="">
				<p>及時發現貨物跌落</p>
			</li>

			<!-- 對港口滯留情況進行監控 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/port/5.jpg" width="300" alt="">
				<p>對港口滯留情況進行監控</p>
			</li>


		</ul>


	</div>


<?php
}
?>
