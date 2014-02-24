/**
 * 中國安芯後臺info js 文件
 */
$(document).ready(function(){
// start
	// 添加文章表单验证
    	checkAddForm();
    
	
	// 判斷并顯示操作項目 （文章信息列表，文章分類等）
	$('#navlist').change(function(){

		var type = $("#navlist").val();
		if(type){
			var murl=window.frames['contentBox'].document.location;
			murl.href = app + '/Info/'+type;
		}
		
	});
	// table 效果
	$('.tr_td').hover(function(){

		$(this).addClass('tron');
	},function(){

		$(this).removeClass('tron');

	});

	// 文章分类显示折叠效果
	var aTr = $('.table tbody tr');//獲得內容所有tr
	var aUnfold = $('.table tbody tr .showSpan');
	aTr.each(function(){
		var span = $(this).find('.showSpan').css({'cursor':'pointer','width':'12px','height':'10px','border':'1px solid #ccc','display':'inline-block','text-align':'center'});
		//獲得class
		var sClass = $(this).attr('class');
		var preg = /pid\_(\d)+?/;
		var level = sClass.match(preg);
		
		var pid = level?parseInt(level[1]):null;

		if(pid>0){
			$(this).hide();
		}
	});
	/**** 切换层级显示隐藏  ****/
	aUnfold.toggle(function(){
		//sonShow.call(this);
		var aSonList = getSonList.call(this);
		
		if(aSonList.size()){
			$(this).html('-');
			aSonList.show();
		}

	},function(){
		var aSonList = getSonList.call(this);
		if(aSonList.size()){
			
			$(this).html('+');
			aSonList.hide();
		}

	});




	/***********获取子集列表**************/
	function getSonList(){

		var oParent = $(this).parents('tr');
		var pid = oParent.attr('cid');
		var sClass = '.pid_' + pid;
		return $('.table tbody').find(sClass);
	}

	// 全选
	$("#sAll").click(function(){
		var sid = $("input[name='sid[]']");
		sid.attr("checked","checked");
	});

	// 反选
	$("#rsAll").click(function(){
		
		var sid = $("input[name='sid[]']");
		for(var i=0;i<sid.length;i++){
			
			if(sid[i].checked){
				sid[i].checked = false;
			}else{
				sid[i].checked = true;
			}
		}
		
	});
	//排序text框
	// 排序
		$("input[name='orders[]']").blur(function(){
			if(isNaN($(this).val())){
				$(this).val(1);
			}
		});
	$("#searchBtn").click(function(){
		if($("#valueword").val()!=''){
			$('#searchForm').submit();
		}else{
			alert("请填写查询内容");
			return false;
		}
	});


	
	
	// 异步分类显示
	$("#listTitle").change(function(){
		var ctype = $(this).val();
		//当前排序方式
		var orders = $("#sort").val();
		

		var url = app + "/Info/ajaxShowList";
			$.post(url,{'ctype':ctype,'orders':orders},function(data){
				if(typeof(data)!='object'){
					data = eval('(' + data + ')');
				}

				showData(data);
			});
	});

	// 异步排序
	$("#sort").change(function(){
		var orders = $(this).val();
		//当前排序方式
		var ctype = $("#listTitle").val();
		

		var url = app + "/Info/ajaxShowList";
			$.post(url,{'ctype':ctype,'orders':orders},function(data){
				if(typeof(data)!='object'){
					data = eval('(' + data + ')');
				}
				showData(data);
			});
	});

	function doAllFun(act){
		//操作的ids
		var sid = $("input[name='sid[]']:checked");
		
		//当前页
		var currentP = $("span.current").html();
		if(!currentP){
			currentP = 1;
		}
		
		//当前分类
		var ctype = $("#listTitle").val();
		//当前排序方式
		var orders = $("#sort").val();

		var sarr = new Array();

		for(var i=0;i<sid.length;i++){
			
			if(sid[i].value){

				sarr.push(sid[i].value);
			}
		}
			if(sarr.length){
			//存在选择数据，进行异步处理
			var url = app + "/Info/ajaxDoAll";
			$.post(url,{'sid':sarr,'act':act,'currentP':currentP,'ctype':ctype,'orders':orders},function(data){
				if(typeof(data)!='object'){
					data = eval('(' + data + ')');
				}
				showData(data);
			});
		}else{
			//没有选中
			alert("请选择操作项");
			return false;
		}
	}
	// 异步批量删除
	$("#sDel").click(function(){
		doAllFun('del');
	});

	// 异步批量显示
	$("#sShow").click(function(){
		doAllFun('show');
	});

	// 异步批量隐藏
	$("#sHide").click(function(){
		doAllFun('hide');
	});

	

// end
});


//异步删除单条记录
function delOne(id){
	var con = confirm("是否删除这条信息？");

		if(con){
		
		//当前页
		var currentP = $("span.current").html();
		if(!currentP){
			currentP = 1;
		}
		var ctype = $("#listTitle").val();
		//当前排序方式
		var orders = $("#sort").val();
		

		var url = app + "/Info/ajaxDelOne";
		
		$.post(url,{'id':id,'page':currentP,'ctype':ctype,'orders':orders},function(data){

				if(typeof(data)!='object'){
					data = eval('(' + data + ')');
				}
				showData(data);
		});
			
		
		}

		return false;


	
}

//显示异步获取的文章信息数据 
function showData(darr){
			var data = darr;
				if(data.status == 1){
					$("#infoContent").html('正在加载...');
					var html = '';
					
					if(data.list.length){
						for(var i=0;i<data.list.length;i++){
							html += '<tr class="tr_td">';

							html += '<td><input type="checkbox" size="2" value="'+data.list[i].id+'" name="sid[]" /></td>';
							
							html += '<td>'+ data.list[i].id+'</td>';
							html += '<td></td>';
							html += '<td><p><span>中文标题：</span>'+data.list[i].title+'</p><p><span>英文标题：</span>'+data.list[i].title_en+'</p></td>';
							html += '<td>'+data.list[i].name+'</td>';
							html += '<td>'+data.list[i].addtime+'</td>';
							var isshow = data.list[i].isshow;
							if(isshow==1){
							 	html += '<td>显示</td>';
							}else{
								html += '<td><span style="color:#f60;">隐藏</span></td>';
							}

							html += '<td><a href="'+app+'/Info/editInfo/id/'+data.list[i].id+'">编辑</a> \| <a href="javascript:void(0);" onclick="delOne('+data.list[i].id+')">删除</a></td>';

							html += '</tr>';
							
						}
						html += '<tr class="tr_td"><td></td><td colspan="7">'+data.page+'</td></tr>';

						$("#infoContent").html(html);
					}

				}else{
					
					return false;
				}
}
// 添加文章表单验证
	function checkAddForm(){
		// 排序
		$("#setOrder").blur(function(){
			if(isNaN($(this).val())){
				$(this).val(1);
			}
		});

		$("#addInfo").submit(function(){
			// 中文标题和内容必须
    		var title = $("input[name='title']").val();
    		if(!title || title.length < 2){
    			alert("请输入两个字以上中文标题");
    			return false;
    		}
    		// var content = $("textarea[name='content']").val();
    		// if(!content || content.length < 10){
    		// 	alert("请输入10个字以上中文内容");
    		// 	return false;
    		// }
    	});
		
		
	}
/**
 * 删除确认
 * @param  {[type]} id [description]
 * @return {[type]}    [description]
 */
function delConfirm(id){
	
	var con = confirm("是否删除此分类");
	if(con){
		location.href = app + "/Info/delList/id/" + id;
	}
}

// 异步分页
	function ajax_page(page){

		var ctype = $(this).val();
		//当前排序方式
		var orders = $("#sort").val();
		
		var url = app + "/Info/ajaxPage";
			$.post(url,{'ctype':ctype,'orders':orders,'page':page},function(data){
				
				if(typeof(data)!='object'){
					data = eval('(' + data + ')');
				}

				showData(data);
			});
	}