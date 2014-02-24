$(document).ready(function(){
 
	//* 荣誉ajax分类显示
	ajax_type();
	
});

/**
 * 荣誉ajax分类显示
 * @return {[type]} [description]
 */
function ajax_type(){

	$("select[name='atype']").change(function(){

		
			url = app+"/CorporateManagement/AwardAjaxType/do/list";

			var html = '';

			var html_page = '';

			$('.awardshowbox').html('加载中...');

			var type = $('select[name="atype"]').val();

			$.post(url,{'type':type},function(data){
				
				if(data.status){// 成功取得数据，进行输出
					html_page = data.page;
					var list = data.list;
					html += '<ul>';

					// /判断中英文内容输出
					if(data.lang=='tw'){
						for(var i=0; i<list.length;i++){
						html += '<li><div class="aimg"><a href="/Public/'+list[i].pic_url+'" target="_blank"><img src="/Public/'+list[i].pic_url_thumb+'"   alt="'+list[i].title+'"/></a></div><p>'+list[i].title+'</p></li>';
						}
					}else{
						for(var i=0; i<list.length;i++){
						html += '<li><div class="aimg"><a href="/Public/'+list[i].pic_url+'" target="_blank"><img src="/Public/'+list[i].pic_url_thumb+'"   alt="'+list[i].title_en+'"/></a></div><p>'+list[i].title_en+'</p></li>';
						}
					}

					
					html += '</ul>';
					$('.awardshowbox').html(html);
				}else{//获取失败，或者没有数据，进行页面提示
					$('.awardshowbox').html('暂无数据...');
				}
				$('.cpage').html(html_page);
			},'json');
	});
	
}
// awards ajax 分页
function ajax_page(page){

	url = app+"/CorporateManagement/AwardAjaxPage/do/list";

	var html = '';

	var html_page = '';

	$('.awardshowbox').html('加载中...');

	var type = $('select[name="atype"]').val();

	$.post(url,{'page':page,'type':type},function(data){
		
		if(data.status){// 成功取得数据，进行输出
			html_page = data.page;
			var list = data.list;
			html += '<ul>';

			// /判断中英文内容输出
			if(data.lang=='tw'){
				for(var i=0; i<list.length;i++){
				html += '<li><div class="aimg"><a href="/Public/'+list[i].pic_url+'" target="_blank"><img src="/Public/'+list[i].pic_url_thumb+'"   alt="'+list[i].title+'"/></a></div><p>'+list[i].title+'</p></li>';
				}
			}else{
				for(var i=0; i<list.length;i++){
				html += '<li><div class="aimg"><a href="/Public/'+list[i].pic_url+'" target="_blank"><img src="/Public/'+list[i].pic_url_thumb+'"   alt="'+list[i].title_en+'"/></a></div><p>'+list[i].title_en+'</p></li>';
				}
			}

			
			html += '</ul>';
			$('.awardshowbox').html(html);
		}else{//获取失败，或者没有数据，进行页面提示
			$('.awardshowbox').html('暂无数据...');
		}
		$('.cpage').html(html_page);
	},'json');
}