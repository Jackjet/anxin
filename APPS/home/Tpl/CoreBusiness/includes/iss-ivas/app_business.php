<style type="text/css">
	*{padding:0;margin:0;}
	.thirContent h1{font-size:30px;line-height:38px;border-left:3px solid #f00;text-indent: 10px;}
	.thirContent h2{margin-bottom: 15px;}
	.thirContent h2 a{font-size:15px;line-height: 33px;color:#f80;}
	.thirContent h3{font-size:14px;line-height: 28px;}
	.thirContent ul.app li {float:left;width:300px;margin: 0 8px 10px 0;}
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
		<h1>Business Entity</h1>
		<h3>Industrial Analysis</h3>
		<p>With the social economy and business industry constantly developing in China, the business area become one of the most centralized activity areas. According to the file that “State Business Department’s guidance on promoting the development of retail industry during the twelfth-five period”, the total scale of China’s products will keep a rapid, stable development, and the average annual growth rate of consumers’ goods will arrive at 15%. It’s predicted that the total retail sales will arrive at 2000 billion RMB during the yearended on 31 December 2020. Despite of its speedy development, a lot of issues, fire hazards, thefts, stampede incidents and et al, occur in shopping malls and supermarkets with bringing damages to people’s lives and financial properties. Although most malls have already installed traditional or digital video surveillance system, it’s still not enough to display its security defense function properly because of its inherent drawbacks. </p>

		<h3>The Needs</h3>
		<p>Due to its particular features, the retail industry has proposed a series of requirements towards the video surveillance: a) monitor expensive goods in the shopping mall to prevent theft actions; b) monitor export, import and parking lot channels, and send alerts while finding the left-behind objects; c) to monitor the perimeter of shopping mall; immediately send alerts as soon as the non-staffs presents in the mall in non-business time; d) monitor the individuals getting in and out of the mall to make human counting, and et al.</p>

		结构图(Structure chart)

		<ul class="app">
			<!-- 出入口人流量統計 customer flow counting in the doorway-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/1.jpg" width="300" alt="">
				<p>customer flow counting in the doorway</p>
			</li>
			<!-- 大廳突然加速奔跑監測 monitor the abrupt speed-increasing run in the lobby-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/2.jpg" width="300" alt="">
				<p>monitor the abrupt speed-increasing run in the lobby</p>
			</li>

			<!-- 對重要陳列商品進行監控 monitor major products on display-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/3.jpg" width="300" alt="">
				<p>monitor major products on display</p>
			</li>
			<!-- 及時發現收銀通道逆行人員 timely find individuals conversely running in the bank channel-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/4.jpg" width="300" alt="">
				<p>timely find individuals conversely running in the bank channel</p>
			</li>

			<!-- 對人員密度進行監測 monitor individual density-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/5.jpg" width="300" alt="">
				<p>monitor individual density</p>
			</li>

			<!-- 及時發現收銀台隊伍過長 timely find the queue too long in the cashier desk-->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/6.jpg" width="300" alt="">
				<p>timely find the queue too long in the cashier desk</p>
			</li>

		

		</ul>


	</div>


<?php
	}else{
?>
	<!-- 中文内容 -->
	<div class="thirContent">
		<h2><a href="javascript:change_page('apparea','iss-ivas');">返回</a></h2>
		<h1>商業</h1>
		<h3>行業狀況</h3>
		<p>隨著社會經濟的不斷增長，商貿行業在我國蓬勃發展，商業區域成為人們最集中的活動場所之一。商務部在《商務部關於“十二五”時期促進零售業發展的指導意見》裡提出“十二五”時期，我國商品零售規模將保持穩定較快增長，社會消費品零售總額年均將增長15%預計到2020年，零售總額將超過20萬億元。伴隨著零售業的快速發展，零售行業中的問題也凸顯出來。近些年在購物中心，商場超市頻頻發生的火災、盜竊、踩踏等事故直接對人們的生命財產安全造成了損害。目前，大部分商場已經安裝了傳統或數位視訊監控網路，但無論是從視頻監控網路本身還是從監控人員來說，都存在著固有的缺陷，並不能充分發揮安全防範作用。 </p>

		<h3>需求分析</h3>
		<p>面對日益顯著的公共安全問題，商場需要高度重視自身的安全防範，既要保障顧客的安全，也要保護商場的財產安全。 </p>
		<p>由於零售行業本身的特點，它對視頻監控也有相應的要求：如對商場內的一些貴重商品進行監控，防止偷盜行為發生；對需要保持通暢的進出口通道和停車場通道進行監測，發現不明遺留物體即發出報警；對商場周界進行監測，對非營業時間非工作人員進入商場報警；對進出商場的人數進行統計等。</p>

		结构图

		<ul class="app">
			<!-- 出入口人流量統計 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/1.jpg" width="300" alt="">
				<p>出入口人流量統計</p>
			</li>
			<!-- 大廳突然加速奔跑監測 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/2.jpg" width="300" alt="">
				<p>大廳突然加速奔跑監測</p>
			</li>

			<!-- 對重要陳列商品進行監控 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/3.jpg" width="300" alt="">
				<p>對重要陳列商品進行監控</p>
			</li>
			<!-- 及時發現收銀通道逆行人員 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/4.jpg" width="300" alt="">
				<p>及時發現收銀通道逆行人員</p>
			</li>

			<!-- 對人員密度進行監測 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/5.jpg" width="300" alt="">
				<p>對人員密度進行監測</p>
			</li>

			<!-- 及時發現收銀台隊伍過長 -->
			<li>
				<img src="<?php echo __PUBLIC__;?>/images/business/app/business/6.jpg" width="300" alt="">
				<p>及時發現收銀台隊伍過長</p>
			</li>

		

		</ul>


	</div>


<?php
}
?>
