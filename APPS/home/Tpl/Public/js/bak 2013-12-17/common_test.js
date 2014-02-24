// 中国安芯控股 common.js
//author ldm
$(document).ready(function(){
	


	// 首页 公告/通函等 选项卡效果
	var tab_as = $(".rightBox3 h1 a");

	if(tab_as.length){
		var tab_uls = $(".rightBox4 ul");
		
		tab_as.hover(function(){
			var index = $(this).index();
			$(this).addClass('a_on').siblings().removeClass('a_on');

			tab_uls.eq(index).show().siblings().hide();
		});
	}



	// 内容页win8框图片效果
	var win8Img = $(".fullLeft #thirContent div img");
	if(win8Img.length){
		win8Img.hover(function(){
			// $(this).css({"border":'1px solid #fff'});
			$(this).fadeTo('fast',0.3);
			$(this).fadeTo('slow',1);
		},function(){
			// $(this).css({"border":'none'});

			$(this).fadeTo('normal',1);

		});
	}


	// 实时定时更新首页股票信息
	setStockCode();
	var t = setInterval("setStockCode()",1000*600);//1000*600

	// 获得并设置内页公告/通函
	getAnnCirs();
	// 获得并设置内页年报
	getIARrport();
	// 设置内页新闻展示
	getPress();
	// 三级菜单
	setThirdNav("thirNav");//参数：

	$('#goTop').click(function(){
            scrollTo(0,0);
            this.blur();
            return false;
    });

		// 首页图片轮播
      	var obj = $(".adimg ul"); //操作的对象
      	if(obj.length){
      		setImg(obj,2,5000);
      	}
         
});

/**
 * 限制下載
 * @param  {[type]} type [下載項目 1中国安芯产品画册（中文） 2中国安芯产品画册（英文） 3 iVAS——智能视频分析系统画册 4 ISD畫冊]
 * @return {[type]}      [description]
 */
function download_limit(type){
	
	$.get(app+'/Media/checkDownLoadStatus',{'type':type},function(data){
			
			if(typeof(data)!='object'){
				data = eval('('+data+')');
			}
		if(!data.status){
			var code = prompt('請輸入授權碼 (Please enter authorization code)');
			$.get(app+'/Media/checkDownLoadCode',{'code':code,'type':type},function(allow){
				
				if( allow == 1 && code){
					
					window.open(app + '/Media/download/type/'+type);
					
				}else{
					if(code){
						alert('授權碼有誤!');
					}
				}
			});
			
		}else{
			window.open(app + '/Media/download/type/'+type);
			
		}
		

	});
	
}
// 图片轮播方法
function setImg(obj,num,t){
		var n = num; //一共有几个图片
		var r = Math.random()*n;
		var i = Math.ceil(r); //第几个图片
		var j = i-1; // 图片在li对象中的索引 0 开始
		var obj = obj.find('li');

		
		var m = j;

		obj.eq(m).show();
		iShow(m,n,t);

	}

function iShow(m,n,t){
		var obj = $(".adimg ul").find('li');
		obj.eq(m).siblings().fadeOut(400);
		obj.eq(m).fadeIn(1600);
		if(m==0){
				
				setTimeout("iShow("+(m+1)+","+n+","+t+")",5000);
		}else{
			if(m==n-1){
				setTimeout("iShow(0,"+n+","+t+")",t);
			}else{
				setTimeout("iShow("+(m+1)+","+n+","+t+")",t);

			}
		}
	}

/**
 * 核心业务异步显示
 * @param  {[type]} type [description]
 * @param  {[type]} pro  [description]
 * @return {[type]}      [description]
 */
function change_page(type,pro){
	var url = app + "/CoreBusiness/changePage/ajax/1";

	var html = '';
	$("#thirContent").html('<div style="line-height:33px;padding:10px 0 0 20px;">loading...</div>');

	$.post(url,{'type':type,'pro':pro},function(data){
		html += data;
		$("#thirContent").html(html);
		
	});

}
/**
 * 设置三级菜单效果
 */
function setThirdNav(thead,tcontent){
	var thead = $("#"+thead);
	
	
	
	if(thead.length){
		var tli = thead.find('li');
		tli.click(function(){
			$(this).addClass('on').siblings().removeClass('on');
		});
	}
}

/**
 * 配置多语言
 * @param {[type]} lang [description]
 */
function setLang(lang){
	if(lang){
		
		$.post(app,{'lang':lang},function(data){
			
			window.location.reload()
		});
	}else{
		alert("對不起，程序出錯，不能更換語言。Sorry,error,can't change language.");
		return;
	}
}

/**
 * 设置内容页新闻显示
 * @return {[type]} [description]
 */
function getPress(){
	if($("#innerPress").length){

		var url = app+"/Media/getPress";
	
		$.get(url,function(data){

		var obj = data;
		if(typeof(obj)!= 'object'){
		    obj = getJsonObj(data);
		}
		// var obj = getJsonObj(data);

		//alert(typeof(obj));
		// 公告，前三条
		var html = '';
		
		// 判断中英文输出
		if(obj.lang == 'en'){
			
			for(var i=0;i<obj.press.length;i++){
			html += '<li><a target="_blank" href="'+root+'/Public'+'/press/en/'+obj.press[i].file_url_en+'">'+obj.press[i].title_en+'</a></li>\r\n';

			}
		}else{
			
			for(var i=0;i<obj.press.length;i++){
			html += '<li><a target="_blank" href="'+root+'/Public'+'/press/zh/'+obj.press[i].file_url+'">'+obj.press[i].title+'</a></li>\r\n';
			}
		}

	
		
		$('#innerPress').html(html);


		});
	}
}
/**
 * 获得并设置内页年报
 * @return {[type]} [description]
 */
function getIARrport(){

	if($("#IAReport").length){

			var url = app+"/Media/getIAReports";

			$.get(url,function(data){

			var obj = data;
			if(typeof(obj)!= 'object'){
		    obj = getJsonObj(data);
			}
			// var obj = getJsonObj(data);
			
			// 公告，前三条
			var reports = '';
			// 判断中英文输出
			if(obj.lang == 'en'){
				if(parseInt(obj.report.iryear) > parseInt(obj.report.aryear)){
					//中期
				reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.i_url_en+'">Interim Report '+obj.report.iryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.i_url_en+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.i_img_en+'" width="100" height="135"/></a></li>';
				
				//年度
				reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.a_url_en+'">Annual Report '+obj.report.aryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.a_url_en+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.a_img_en+'" width="100" height="135"/></a></li>';
				
				}else{
						//年度
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.a_url_en+'">Annual Report '+obj.report.aryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.a_url_en+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.a_img_en+'" width="100" height="135"/></a></li>';
				
						//中期
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.i_url_en+'">Interim Report '+obj.report.iryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/en/'+obj.report.i_url_en+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.i_img_en+'" width="100" height="135"/></a></li>';
				
				
				}
				
				
			}else{
				if(parseInt(obj.report.iryear) > parseInt(obj.report.aryear)){
					//中期
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.i_url+'">中期報告 '+obj.report.iryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.i_url+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.i_img+'" width="100" height="135"/></a></li>';
					
					//年度
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.a_url+'">年度報告 '+obj.report.aryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.a_url+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.a_img+'" width="100" height="135"/></a></li>';
					
				}else{
					//年度
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.a_url+'">年度報告 '+obj.report.aryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.a_url+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.a_img+'" width="100" height="135"/></a></li>';
					//中期
					reports += '<li><p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.i_url+'">中期報告 '+obj.report.iryear+'</a></p><a target="_blank" href="'+root+'/Public'+'/reports/zh/'+obj.report.i_url+'"><img src="'+root+'/Public'+'/reports/images/'+obj.report.i_img+'" width="100" height="135"/></a></li>';
				}
				//alert((parseInt(obj.report.iryear)));
				
				
			}

			
			
			$('#IAReport').html(reports);


			});
	}
	
}

/**
 * [获得并设置内页公告/通函]
 * @return {[type]} [description]
 */
function getAnnCirs(){
	if($('#annCirs').length){
		var url = app+"/Media/getAnnCirs";
			
		$.get(url,function(data){

		var obj = data;
		if(typeof(obj)!= 'object'){
		    obj = getJsonObj(data);
		}
		// var obj = getJsonObj(data);
		//alert(typeof(obj));
		
		// 公告，前三条
		var annCirs = '';
		
		// 判断中英文输出
		if(obj.lang == 'en'){
			
			for(var i=0;i<obj.ann.length;i++){
			annCirs += '<li><a target="_blank" href="'+root+'/Public'+'/announcements/en/'+obj.ann[i].file_url_en+'">'+obj.ann[i].title_en+'</a></li>\r\n';

			}
		}else{
			
			for(var i=0;i<obj.ann.length;i++){
			annCirs += '<li><a target="_blank" href="'+root+'/Public'+'/announcements/zh/'+obj.ann[i].file_url+'">'+obj.ann[i].title+'</a></li>\r\n';
			}
		}

		// 通函，前三条
		//alert(obj.lang);
		// 判断中英文输出
		if(obj.lang == 'en'){
			
			for(var i=0;i<obj.cir.length;i++){
			annCirs += '<li><a target="_blank" href="'+root+'/Public'+'/circulars/en/'+obj.cir[i].file_url_en+'">'+obj.cir[i].title_en+'</a></li>\r\n';

			}
		}else{
			for(var i=0;i<obj.cir.length;i++){
			annCirs += '<li><a target="_blank" href="'+root+'/Public'+'/circulars/zh/'+obj.cir[i].file_url+'">'+obj.cir[i].title+'</a></li>\r\n';
			}
		}
		
		
		$('#annCirs').html(annCirs);


		});
	}
	
}


function getJsonObj(data){
	return eval("("+data+")");
}
/**
 * 设置股票信息
 */
function setStockCode(){
	if($('#nowPrice').length && $('#updateTime').length){

		var url = app+"/Index/getStockCode";

		$.post(url,{},function(data){
			
				if(typeof data == 'string'){
					
					eval(data);
				}
			
			var d = hq_str_hk01149;
			var darr = [];
			// 获得数据信息数组
			if(d){
				darr = d.split(',');

			}
			
			
			// 获得数据信息数组
			
			
			// 判断数据是否有效
			if(darr && darr[2]==0.000){
				
				// 数据无效，从上一次有效数据加载显示，并停止自动更新setInterval
				$.post(app+"/Index/getStaticCode",{},function(sdata){
						var obj = sdata;

					if(typeof(sdata)!='object'){
						obj = eval('('+sdata+')');
					}
					

					if(obj){
						eval(obj);
						var d2 = hq_str_hk01149;
						var darr2 = [];
						// 获得数据信息数组
						darr2 = d2.split(',');
						var nowPrice = darr2[6];//当前价格
						var openPrice = darr2[2];//今开盘
						var closePriceY = darr2[3];//昨收盘
						var hightPrice = darr2[4];//今日最高
						var lowestPrice = darr2[5];//今日最低
						var updateTime = darr2[17]+' '+darr2[18];//当前时间

						
						$('#nowPrice').html(nowPrice); 
						$('#openPrice').html(openPrice); 
						$('#closePriceY').html(closePriceY); 
						$('#hightPrice').html(hightPrice); 
						$('#lowestPrice').html(lowestPrice); 
						$('#updateTime').html(updateTime); 
					}

					
					if(typeof(t) != 'undefined'){
						clearInterval(t);
					}
				});
				
				
			}else{
				
				
				// 数据有效，正常更新
				var nowPrice = darr[6];//当前价格
				var openPrice = darr[2];//今开盘
				var closePriceY = darr[3];//昨收盘
				var hightPrice = darr[4];//今日最高
				var lowestPrice = darr[5];//今日最低
				var updateTime = darr[17]+' '+darr[18];//当前时间
				
				
				$('#nowPrice').html(nowPrice); 
				$('#openPrice').html(openPrice); 
				$('#closePriceY').html(closePriceY); 
				$('#hightPrice').html(hightPrice); 
				$('#lowestPrice').html(lowestPrice); 
				$('#updateTime').html(updateTime); 
				// 保存本次数据到服务器
				
				saveData(data);
				
			}

		});
	
	}
	
}


/**
 * 保存股票信息到服务器，以备调用
 * @return {[void]} []
 */
function saveData(data){
	
	if(data){
		var url = app+"/Index/saveStockCode";
		
		$.post(url,{'data':data},function(rdata){
			
		});	
	}
}