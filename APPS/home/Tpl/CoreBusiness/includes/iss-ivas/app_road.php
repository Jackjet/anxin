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
		<h1>Road Transportation</h1>
		<h3>Industrial Status</h3>
		<p>During the state’s 12th Five-Year-Plan period, it’s expected to build a larger scale of highway mileages to perfect the whole highway network, which is supposed to keep a natural growth to a certain level between the highway mileage and vehicle flow. Presently, China’s total highway mileage has arrived at 4 million kilometers. Vehicles on the highway, with the advantage of fast speed and high flow, are the major means of current traffic transportation with undertaking 70% of passenger transportation and 40% of goods transportation in China. The contradiction between vehicle and highway become more and more obvious, which is completely owing to the increasing vehicles and expanded highway scale with bringing out a series of awkward issues, for instance, road congestion, vehicles violating laws and et al. There were totally 26.49 million traffic violation cases with breaking the traffic signal light instruction law in China in 2012, equally 70 thousand cases every day. Thus, the highway security equipments and management forces should be put into rapid combination as the emergency defense measures are further worked out. </p>

		<h3>The Needs</h3>
		<p>The video surveillance system, as one major part of road traffic command system, plays an indispensible role in the smart city construction process. Owing to the surveillance tasks increasing in the modern society, the existing road video surveillance system can’t meet people’s daily security requirements. Accordingly, the traffic department begins to propose higher demands towards the road video surveillance system: a) promote alarm accuracy, reduce mistaken & missing alarms; b) make pre-alerting, improve the response speed of governmental traffic department. The video surveillance on the road consists of the following major functions: road-segment surveillance, road-port monitoring, video records storage & checking and et al; they majorly presents in monitoring and alerting on account of vehicle converse driving, running the red light, illegal parking and et al.</p>

		结构图（Structure chart）

		<ul class="app">
			<!-- 對過往車輛數量進行統計 count driving vehicles -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/1.jpg" width="300" alt="">
				<p>count driving vehicles </p>
			</li>
			<!-- 對車輛違規逆行進行報警 send alerts on account of the vehicles with illegal converse driving-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/2.jpg" width="300" alt="">
				<p>send alerts on account of the vehicles with illegal converse driving</p>
			</li>

			<!-- 及時發現人員穿越隔離帶 timely find people passing through the isolation zone-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/3.jpg" width="300" alt="">
				<p>timely find people passing through the isolation zone</p>
			</li>
			<!-- 及時發現道路車輛違章停留 timely find vehicles with illegal stay-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/4.jpg" width="300" alt="">
				<p>timely find vehicles with illegal stay</p>
			</li>

			<!-- 及時發現車輛擁堵 timely find vehicles in traffic congestion-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/5.jpg" width="300" alt="">
				<p>timely find vehicles in traffic congestion</p>
			</li>

			<!-- 對車輛違規調頭進行報警 send alerts towards the vehicles with illegal turning-back-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/6.jpg" width="300" alt="">
				<p>send alerts towards the vehicles with illegal turning-back</p>
			</li>

			<!-- 對大車在小車道違規行駛進行報警 send alerts towards the big vehicles running in the small-vehicle carriageway-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/7.jpg" width="300" alt="">
				<p>send alerts towards the big vehicles running in the small-vehicle carriageway</p>
			</li>



		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>公路</h1>
		<h3>行業狀況</h3>
		<p>“十二五”期間全國計畫新增通車里程規模增大，隨著公路路網的日趨完善，公路里程及車輛通行量保持一定水準的自然增長，目前我國公路總里程已達400萬公里。公路車速快、流量大，承擔全國70%客運和40%貨運量，是交通運輸的主動脈。隨著車輛數量逐日增加，以及道路規模的不斷擴增，車輛與路面的矛盾越來越突出，出現了如：道路擁堵、車輛違章等棘手問題。2012年，全國共查處不按交通信號燈指示通行交通違法行為2649萬起，平均每天7萬多起。公路安全設施、管理力度亟需加快配套，防範措施急需進一步落實。</p>

		<h3>需求分析</h3>
		<p>作為道路交通指揮系統的一個重要組成部分，道路視頻監控系統在道路交通指揮中有著不可替代的作用。而現有的道路視頻監控系統在監控任務日益加重的情況下，已不能滿足人們對安全保障的需求。針對這種情況，交管部門對道路視頻監控系統提出了更高的要求：提高報警精確度，減少誤報、漏報現象；可進行事前預警，提高交管部門回應速度等。視頻監控在道路交通中的主要功能包括：路段監控、路口監控和錄影存儲取證等，具體表現為對車輛逆向行駛、闖紅燈、違規停車等行為進行監測、報警。</p>

		结构图

		<ul class="app">
			<!-- 對過往車輛數量進行統計 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/1.jpg" width="300" alt="">
				<p>對過往車輛數量進行統計</p>
			</li>
			<!-- 對車輛違規逆行進行報警 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/2.jpg" width="300" alt="">
				<p>對車輛違規逆行進行報警</p>
			</li>

			<!-- 及時發現人員穿越隔離帶 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/3.jpg" width="300" alt="">
				<p>及時發現人員穿越隔離帶</p>
			</li>
			<!-- 及時發現道路車輛違章停留 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/4.jpg" width="300" alt="">
				<p>及時發現道路車輛違章停留</p>
			</li>

			<!-- 及時發現車輛擁堵 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/5.jpg" width="300" alt="">
				<p>及時發現車輛擁堵</p>
			</li>

			<!-- 對車輛違規調頭進行報警 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/6.jpg" width="300" alt="">
				<p>對車輛違規調頭進行報警</p>
			</li>

			<!-- 對大車在小車道違規行駛進行報警 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/road/7.jpg" width="300" alt="">
				<p>對大車在小車道違規行駛進行報警</p>
			</li>



		</ul>


	</div>


<?php
}
?>
