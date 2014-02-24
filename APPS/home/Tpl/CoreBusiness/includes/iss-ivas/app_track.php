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
		<h1>Track Infrastructure</h1>

		<h3>Industrial Status</h3>
		<p>China’s urban track traffic construction is entering into the fast, orderly development stage. According to the data provided by State development & reform committee and state construction department, there were 30 urban pathway traffic circles in 10 domestic cities, with the total road length arriving at 813.7 kilometers during the yearended 31 December 2011; it added up to 2,042 kilometers during the year ended 31 December 2012; also, it is expected to reach 6 thousand kilometers during the year ended 31 December 2020.</p>
		<p>Under the influence of rapid urban development, the urban traffic contradiction becomes more and more dominated while the solution of constructing urban pathway traffic is the first-choice to solve the immerse traffic issue. Whereas, in fact, a series of traffic accidents constantly occurred in lots of cities, for instance, Beijing, Shanghai, Guangzhou and et al, which lead a mass of economic losses. Thus, the urban pathway traffic security attracts people’s more attentions. </p>
		<h3>The Needs</h3>
		<p>The track traffic，one brand new means of transportation，is well accepted by more people. Anyway, passengers constantly increase which propose higher demands towards the video surveillance areas, to promise the safety of people’s lives and financial properties. Owing to its own inborn disadvantages, the traditional video surveillance system cannot make the secure defense effect. Thus, it’s urgent for people to exploit a more intelligent video surveillance system to ensure their safe trips.</p>
		<p>The video surveillance consists of the following major functions in the track traffic area: a) monitor the pathway conditions, prevent people from going across the track channels; b) monitor the persons standing on the platform, and prevent people from dropping into the track& alarm line; c) monitor orbit electric cables and other equipments, prevent theft behaviors and et al. </p>


		结构图（Structure chart）

		<ul class="app">
			<!-- 對人員違規穿越鐵路情況進行報警 send alerts towards the individuals illegally passing the rail way-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/1.jpg" width="300" alt="">
				<p>send alerts towards the individuals illegally passing the rail way</p>
			</li>
			<!-- 變電站周界防護 protect transformer substation perimeters-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/2.jpg" width="300" alt="">
				<p>protect transformer substation perimeters</p>
			</li>
			<!-- 及時發現可疑包裹 timely find suspicious package-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/3.jpg" width="300" alt="">
				<p>timely find suspicious package</p>
			</li>
			<!-- 監測站台人員密度 detect thepeople density on the platform-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/4.jpg" width="300" alt="">
				<p>detect thepeople density on the platform</p>
			</li>

			<!-- 及時發現車輛異常停靠 timely find vehicles with abnormal parking-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/5.jpg" width="300" alt="">
				<p>timely find vehicles with abnormal parking</p>
			</li>


		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>軌道</h1>

		<h3>行業狀況</h3>
		<p>中國的城市軌道交通建設正進入快速有序的發展階段，據國家發改委和建設部提供的資料顯示：截至2011年底，國內10座城市已建成運營的30條城市軌道交通線路運營里程已達813.7公里，2012年底，全國軌道交通運營總里程增加到2042公里，而到2020年，軌道交通總長將達到6000公里。</p>
		<p>隨著城市的快速發展，城市交通擁擠、阻塞的矛盾也越來越突出，建設城市軌道交通已成為緩解城市交通問題的首選方案。但近年來全球軌道事故不斷發生，我國北京、上海、廣州等城市地鐵也陸續發生安全事故，造成了重大經濟損失。城市軌道交通的安全性受到人們越來越多的關注。</p>
		<h3>需求分析</h3>
		<p>作為一種新型的交通方式，軌道交通越來越受到人們的歡迎，而乘坐人數的增加也對視頻監控系統提出了更高的要求，以保障人們的生命財產安全。而傳統的視頻監控系統因其監控能力的缺陷，不能完全起到安全防範的作用。人們急需一種更加智慧化的視頻監控網路來保障人們的出行安全。</p>
		<p>視頻監控在軌道交通中的主要功能包括對軌道進行監測，防止人員穿越軌道；對月臺上的人員進行監測，防止由於擁擠而墜入軌道內、警戒線內滯留過久等情況的發生；對軌道電纜及其他設備進行監測，防止偷盜行為的發生等。</p>


		结构图

		<ul class="app">
			<!-- 對人員違規穿越鐵路情況進行報警 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/1.jpg" width="300" alt="">
				<p>對人員違規穿越鐵路情況進行報警</p>
			</li>
			<!-- 變電站周界防護 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/2.jpg" width="300" alt="">
				<p>變電站周界防護</p>
			</li>

			<!-- 及時發現可疑包裹 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/3.jpg" width="300" alt="">
				<p>及時發現可疑包裹</p>
			</li>
			<!-- 監測站台人員密度 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/4.jpg" width="300" alt="">
				<p>監測站台人員密度</p>
			</li>

			<!-- 及時發現車輛異常停靠 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/track/5.jpg" width="300" alt="">
				<p>及時發現車輛異常停靠</p>
			</li>


		</ul>


	</div>


<?php
}
?>
