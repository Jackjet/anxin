<style tyle="text/css">

	h4{font-size:14px;line-height: 22px;margin-top: 15px;}
	h4 span{color:#b01800;font-size:18px;padding-right:8px;}
	/*.ruleimg{padding-top: 20px;}
	.ruleimg li{float:left;margin:0 13px 20px 0;}*/
	#ruleimg li{display: inline-block;width:100%;padding: 10px 0;}
	#ruleimg li img{float:left;display:block;margin:0;margin-right:10px;}
	#ruleimg li p{text-indent: 0;}
	#ruleimg li p span{font-weight: bold;color:#f10;}

	
	/*符合規則*/
	.rulecomplex li{display: inline-block;border-top:1px dashed #ccc;padding-top:15px;}
	.rulecomplex .left{width:200px;float:left;display: inline-block;}
	.rulecomplex .left img{display:block;margin-bottom: 10px;}
	.rulecomplex .right{width:420px;display:inline-block;float:left;}
	.rulecomplex .right h3{font-size:23px;font-weight:normal;}
	.rulecomplex .right h3 span{font-size:30px;font-weight:bold;color:#f10;}
	.rulecomplex .right p{text-indent: 0;}

</style>

<?php
/**
 * iss-ivas
 * 規則簡介
 */ 
	if(L('_LANG_') == 'en'){
?>
	<!-- 英文内容 -->

	<div id="thirContentBox">
		<a href="javascript:change_page('index','iss-ivas');"></a>
		<div class="blank"></div>
	<p>iVAS system supports 32 video streams at the same time so that users can confirm the single or composite surveillance rules to realize the reliable 24/7 surveillance model, withlargely promoting its “safety defense” function. 
	</p>
	<h4><span>11Alarm Rules</span></h4>

	<ul id="ruleimg">
		<!-- 1 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/1.jpg" alt="">
		<p ><span>Object Removal Alarm:</span>monitor the goals bursting into the alert areas. </p>
		<p><span>Applied Area:</span>perimeter monitoring</p>
		</li>
		<!-- 2 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/2.jpg" alt="">
		<p ><span>Directional Motion Alarm: </span>monitor the movement direction of goals.</p>
		<p><span>Applied Area:</span> sidewalk, crossroads</p>
		</li>
		<!-- 3 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/3.jpg" alt="">
		<p ><span>Presence Alarm:</span>monitor the goals appearing in the hatchway.</p>
		<p><span>Applied Area:</span> stairway, doorway or window</p>
		</li>
		<!-- 4 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/4.jpg" alt="">
		<p ><span>Object Start Alarm:</span>monitor multi-goals leave away in the surveillance area.</p>
		<p><span>Applied Area:</span>parking lot, goods shelf(displaying commodity)</p>
		</li>
		<!-- 5 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/5.jpg" alt="">
		<p ><span>Object Removal Alarm: </span>monitor whether the objects are removed.</p>
		<p><span>Applied Area:</span>museum, exhibition center</p>
		</li>

		<!--6 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/6.jpg" alt="">
		<p ><span>Motion Path Alarm:</span>monitor the moving goals between two areas</p>
		<p><span>Applied Area:</span>important place and facility, crossroad, and perimeter fence.</p>
		</li>

		<!--7 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/7.jpg" alt="">
		<p ><span>Speed Alarm: </span>monitor the goals’ speed.</p>
		<p><span>Applied Area:</span>road and parking lot</p>
		</li>
		<!--8 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/8.jpg" alt="">
		<p ><span>Loitering Alarm：</span>monitor the goal tramping or staying.</p>
		<p><span>Applied Area:</span>Applied Area: bank, ATM machine, building perimeter</p>
		</li>
		<!--9 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/9.jpg" alt="">
		<p ><span>Motion activity Alarm:</span>monitor the motion activities of individuals</p>
		<p><span>Applied Area:</span>parking lot, road</p>
		</li>

		<!--10 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/10.jpg" alt="">
		<p ><span>Static Object Alarm:</span>monitor the static goals in the surveillance coverage area</p>
		<p><span>Applied Area:</span>road(vehicle),  track(luggage), train station (left package)</p>
		</li>
		<!--11 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/11.jpg" alt="">
		<p ><span>Area Coverage Alarm:</span>monitor the area coverage</p>
		<p><span>Applied Area:</span>large-scale shopping mall, exhibition center, vehicles on the road</p>
		</li>
	</ul>
	<h4><span>2Count Rules</span></h4>
	<ul id="ruleimg">
		<!--12 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/12.jpg" alt="">
		<p ><span>Car Flow Counting:</span>count the quantity of vehicle flow in the image</p>
		<p><span>Applied Area:</span>parking lot, road</p>
		</li>

		<!--13 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/13.jpg" alt="">
		<p ><span>CustomerFlow Counting:</span>count the quantity of customer flow in the image</p>
		<p><span>Applied Area:</span>shopping mall, supermarket, stadium</p>
		</li>

	</ul>



	<h4><span>3Compound Rules</span></h4>
	<P>
	Compound rules refer to the complicated alarm model changing a single alarm model into another one with sophisticated logic relationship, while drawing features of different incidents to meet the special requirements of combing different alarm models in real application. 
	</P>

	<ul class="rulecomplex">
		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/and A.jpg" width="160" alt="">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/and B.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>And</span> Model</h3>
				<p style="height:60px;">The system will send alerts if two preset rules are triggered without order in the regulated time.</p>
				<p>For instance, in the preset area, the bigger the personnel density, the smaller the personnel’s motion extent; the system will send alerts as those two values meet the preset ones; the system will not send alerts if one of those values just meets a particular preset value. </p>

			</div>
		</li>

		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/then A.jpg" width="160" alt="">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/then B.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>Then</span> Model</h3>
				<p style="height:60px;">The system will send alerts as two preset rules are respectively triggered in a time order. </p>
				<p>For instance, after someone appears for 3 minutes, the system will send alerts as one vehicle moves; anyway, the system will not send alerts if someone appears and no vehicle moves.</p>

			</div>
		</li>

		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/repeat A.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>Repeat</span> Model</h3>
				<p style="height:48px;">Within the preset time period, the system will send alerts if one particular alarm rule is repeatedly triggered more than preset times. </p>
				<p>For instance, within a particular period, the system will send alerts if several individuals run through two preset areas; the system will not send alerts if only either time value or individual value matches the pre-set value.</p>

			</div>
		</li>
	</ul>

</div>

<?php
	}else{
?>
	<!-- 中文内容 -->
<div id="thirContentBox">
		<a href="javascript:change_page('index','iss-ivas');"></a>
		<div class="blank"></div>
	<p style="font-weight:bold;">iVAS系統單台伺服器最大可同時支援32路視頻，使用者可根據實際需要預設單一或複合監測規則，實現對室內、外場景進行24×7全天候可靠監控，讓視頻監控真正發揮其“安全防範”的作用。
	</p>
	<h4><span>11種報警規則</span></h4>
	<ul id="ruleimg">
		<!-- 1 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/1.jpg" alt="">
		<p ><span>物體移動監測：</span>監測闖入警戒區域內的目標</p>
		<p><span>典型應用場景：</span>周界</p>
		</li>
		<!-- 2 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/2.jpg" alt="">
		<p ><span>定向移動監測：</span>監測目標的移動方向</p>
		<p><span>典型應用場景：</span>單行道、十字路口</p>
		</li>
		<!-- 3 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/3.jpg" alt="">
		<p ><span>突然出現監測：</span>以最大靈敏度監測區域內出現的目標</p>
		<p><span>典型應用場景：</span>倉庫、樓梯口、通道口、門窗口</p>
		</li>
		<!-- 4 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/4.jpg" alt="">
		<p ><span>物體起動監測：</span>監測區域內多目標離開或取走</p>
		<p><span>典型應用場景：</span>停車場、貨架（展示商品）</p>
		</li>
		<!-- 5 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/5.jpg" alt="">
		<p ><span>移走物體監測：</span>監測固定目標是否被移走</p>
		<p><span>典型應用場景：</span>博物館、展覽館重要展品或戶外無人值守設備</p>
		</li>

		<!--6 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/6.jpg" alt="">
		<p ><span>移動路徑監測：</span>監測目標在兩個區域內的移動方向</p>
		<p><span>典型應用場景：</span>重要區域、交通路口、周界圍欄</p>
		</li>

		<!--7 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/7.jpg" alt="">
		<p ><span>速度監測：</span>監測目標速度</p>
		<p><span>典型應用場景：</span>道路、停車場</p>
		</li>
		<!--8 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/8.jpg" alt="">
		<p ><span>徘徊監測：</span>監測目標徘徊或逗留</p>
		<p><span>典型應用場景：</span>銀行、ATM機、建築物周界</p>
		</li>
		<!--9 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/9.jpg" alt="">
		<p ><span>活動監測：</span>監測畫面內物體或人員的活躍度</p>
		<p><span>典型應用場景：</span>商場通道、道路</p>
		</li>

		<!--10 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/10.jpg" alt="">
		<p ><span>物體滯留監測：</span>監測警戒區域內滯留目標</p>
		<p><span>典型應用場景：</span>路面(車輛)、通道(箱包)、 月臺(遺留包裹)</p>
		</li>
		<!--11 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/11.jpg" alt="">
		<p ><span>密度監測：</span>監測畫面內人員或物體覆蓋原始參考畫面的程度</p>
		<p><span>典型應用場景：</span>大型商場、會展中心、道路車輛</p>
		</li>
	</ul>
	<h4><span>2種計數規則</span></h4>

	<ul id="ruleimg">
		<!--12 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/12.jpg" alt="">
		<p ><span>車流統計：</span>統計畫面內車輛進出數量</p>
		<p><span>典型應用場景：</span>停車場、道路</p>
		</li>

		<!--13 -->
		<li>
		<img src="<?php echo __PUBLIC__;?>/images/business/rule/13.jpg" alt="">
		<p ><span>客流統計：</span>統計畫面內進出人員數量</p>
		<p><span>典型應用場景：</span>商場、超市、體育場館</p>
		</li>

	</ul>

	<h4><span>3种複合規則</span> </h4>
	<P>
	複合規則可將單一報警模式組合成具有複雜邏輯關係的報警模式，提取事件特徵，滿足使用者在實際應用中將不同報警模式結合的特殊需求。
	</P>

	<ul class="rulecomplex">
		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/and A.jpg" width="160" alt="">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/and B.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>And</span> 模式</h3>
				<p style="height:80px;">即當兩個預設規則在規定時間內不分先後都被觸發，系統將會報警。</p>
				<p>如：在設定的區域內，若人員密度大，且人員活動幅度小，兩數值均符合預設值，系統將會報警；若人員密度與人員活動係數其中一項符合預設值，系統則不會報警。</p>

			</div>
		</li>

		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/then A.jpg" width="160" alt="">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/then B.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>Then</span> 模式</h3>
				<p style="height:80px;">即當兩個預設規則在規定時間內按照先後順序依次被觸發，系統將會報警。</p>
				<p>如：當有人員出現三分鐘後有車輛移動，則系統發出報警；僅有人員出現，系統不會發出報警。</p>

			</div>
		</li>

		<li>
			<div class="left">
				<img src="<?php echo __PUBLIC__;?>/images/business/rule/repeat A.jpg" width="160" alt="">
			</div>
			<div class="right">
				<h3><span>Repeat</span> 模式</h3>
				<p >在設定時間段內，在某個報警規則被重複觸發設定的次數後，系統將會報警。</p>
				<p>如：在一定時間內，當多人前後追逐通過兩個設定區域，系統將會報警；若時間值與人數值僅有一項符合預設值，系統則不會報警。</p>

			</div>
		</li>
	</ul>

</div>
<?php
}
?>
