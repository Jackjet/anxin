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
		<h1>Urban Safety</h1>

		<h3>Industrial Status</h3>
		<p>In recent years, the state has developed a series of engineering projects closely related with residents’ safety issue. Urban safety project is organized by the Ministry of Public Safety to promote the nationwide urban security surveillance construction, with covering many areas including civilian streets, business buildings, banks, road monitoring, schoolyard, air port, oil depot, power plant, water plant, metro and et al. </p>
		<p>In the accelerated urbanization process, the urban public security becomes people’s major daily concerns. A lot of potential safety hazards, including theft, fire hazard, traffic accident, toxic leakage and et al, constantly threaten the safety of people’s lives and properties. Presently, people need a highly intelligent video surveillance system to prevent the occurrence of accidental cases, or in another saying, to help them to take timely effective measures to reduce the losses to the minimum extent. </p>

		<h3>The Needs</h3>
		<p>In the ongoing process of safe city construction, a lot of local government departments clearly define their requirements of public urban security surveillance while the urban construction needs a surveillance system with a wider monitoring range and larger quantity. Anyway, the video surveillance network is always the center of entire urban security area, to present its key role in the whole social security defense and control system. However, the existing video surveillance network needs to introduce a more advanced and practical modern intelligent video analysis technology, to realize the transformation from artificial monitoring into technology-oriented intelligent surveillance.</p>
		
		<p>The video surveillance is applied in the modern city construction with covering multiple aspects that that building perimeter, shopping mall, museum, exhibition hall, important goods, gas station, urban road traffic conditions, the crowded in the square and et al. </p>

		
		结构图(Structure chart )

		<ul class="app">
			<!-- 監測廣場人員聚集情況 monitor the individuals gathering in the square-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/1.jpg" width="300" alt="">
				<p>monitor the individuals gathering in the square</p>
			</li>
			<!-- 及時發現追逐等情況 timely find the chasing behaviors-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/2.jpg" width="300" alt="">
				<p>timely find the chasing behaviors</p>
			</li>

			<!-- 對重點區域週邊周界徘徊人員進行監測 monitor people lingering around the outside perimeter of major areas-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/3.jpg" width="300" alt="">
				<p>monitor people lingering around the outside perimeter of major areas</p>
			</li>
			<!-- 對體育場館周界翻越進行監控 monitor the behaviors of climbing over the PE perimeter-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/4.jpg" width="300" alt="">
				<p>monitor the behaviors of climbing over the PE perimeter</p>
			</li>

			<!-- 及時監測公共設施盜竊事件 timely monitor the theft action concerning the public equipments-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/5.jpg" width="300" alt="">
				<p>timely monitor the theft action concerning the public equipments</p>
			</li>

			<!-- 及時發現人員快速移動 timely find people’s fast movement-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/6.jpg" width="300" alt="">
				<p>timely find people’s fast movement</p>
			</li>


		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>城市</h1>

		<h3>行業狀況</h3>
		<p>近年來，國家由上而下、循序漸進的開展了一系列與百姓安全息息相關的建設。“平安城市”是公安部組織的旨在全國範圍內全面推動城市治安監控建設的重大工程項目，涵蓋了社會眾多領域，如民用街區、商業建築、銀行、道路監控、校園，機場、油庫、電廠、水廠、地鐵等。</p>
		<p>隨著我國城市化進程的加快，城市公共安全也成為了人們日益關注的焦點。盜竊、火災、交通事故、有毒氣體洩漏等安全隱患時刻威脅著人們的生命財產安全。人們需要一種高智慧化的視頻監控系統來防止安全事故的發生，或在事故發生時採取及時有效的措施把損失減到最小。</p>

		<h3>需求分析</h3>
		<p>隨著“平安城市”建設的不斷深入，各地明確了對城市社會治安監控的需求，城市建設需要監控的範圍更廣、數量更多。而整個城市安防領域的中心必然是視頻監控網路，為切實發揮視頻監控網路在整個社會治安防控體系中的關鍵作用，視頻監控網路需要引用更為先進、更實用的現代化智慧視頻分析技術，實現從“人工”向以科技為主體的“智慧”的轉變。</p>
		
		<p>視頻監控在現代城市中的應用是多方面的，如對建築物周界監控，對商場、博物館、展覽館重要物品監控，對加油站監控，對城市道路交通監控，對廣場人群監控等。</p>

		
		结构图

		<ul class="app">
			<!-- 監測廣場人員聚集情況 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/1.jpg" width="300" alt="">
				<p>監測廣場人員聚集情況</p>
			</li>
			<!-- 及時發現追逐等情況 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/2.jpg" width="300" alt="">
				<p>及時發現追逐等情況</p>
			</li>

			<!-- 對重點區域週邊周界徘徊人員進行監測 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/3.jpg" width="300" alt="">
				<p>對重點區域週邊周界徘徊人員進行監測</p>
			</li>
			<!-- 對體育場館周界翻越進行監控 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/4.jpg" width="300" alt="">
				<p>對體育場館周界翻越進行監控</p>
			</li>

			<!-- 及時監測公共設施盜竊事件 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/5.jpg" width="300" alt="">
				<p>及時監測公共設施盜竊事件</p>
			</li>

			<!-- 及時發現人員快速移動 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/city/6.jpg" width="300" alt="">
				<p>及時發現人員快速移動</p>
			</li>


		</ul>


	</div>


<?php
}
?>
