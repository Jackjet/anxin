 $(document).ready(function(){

 	$("select[name='type']").change(function(){
 		ajax_type($(this).val());
 	});
 	// 排序输入过滤
 	setOrderNum();

 	// 表单提交检测提示
 	checkInfo();

 	// table颜色效果
	tb_addColor();
	$('#create_time').datepicker({
					inline: true,
					dateFormat:"yy-mm-dd"
				});
			});


// ajax分类显示
function ajax_type(type){
	   
        url=app+"/Awards/ajaxType/do/list/";

        var html="";

        var html_page="";

        $("#tb_notice").html("加载中...");
 	

        $.post(url,{type:type},function(data){
			
            var list=data.data;

            var page=data.page;

            var style=data.style;

            var status=data.status;

            if(status==0){

            html+='<tr><th class="sequence">ID</th><th width="100">缩略图</th><th style="width:120px;">中文标题</th><th style="width:120px;">英文标题</th style="width:100px;"><th>分类</th><th colspan="2">操作</th></tr>';

            var itype='';
            for(var i = 0; i < list.length; i++){

            if(1==i%2) {

            	html+="<tr class='even'>";

            }else {

            	html+="<tr class='odd'>";

            }

            switch(list[i].type){
            	case '1':
            	itype='荣誉';
            	break;
            	case '2':
            	itype='著作权';
            	break;
            	case '3':
            	itype='专利';
            	break;
            	case '4':
            	itype='资质';
            	break;
            	case '5':
            	itype='其它成果';
            	break;

            }
            html +='<td class="sequence">'+list[i].id+'</td>';
            html+='<td ><a target="_blank" href="'+public+'/'+list[i].pic_url+'"><img src="'+public+'/'+list[i].pic_url_thumb+'" width="100"/></a></td>';
            html +='<td >'+list[i].title+'</td>';

			html +='<td >'+list[i].title_en+'</td>';

			html +='<td >'+itype+'</td>';
            
            html +='<td class="del"><span><a href="javascript:ajax_del_awards('+list[i].id+')">删除</a></span></td>';

            html +='<td class="edit"><span><a href="'+app+'/Awards/toUpdate?id='+list[i].id+'">修改</a></span></td>';

            html +='</tr>';

            }

               html_page+="<div id='page' class='"+style+"'>"+page+"</div>";

            }else{

               html+="无数据！";

             }

             $("#tb_notice").html(html);

             $("#page_nav").html(html_page);

             $("#tb_notice").show();

			 tb_addColor();

         },"json");

 		

}
 function tb_addColor(){

 	$("tr:odd").addClass("odd");

	$("tr:even").addClass("even");

	$("td").mouseover(function(){$(this).addClass("over")})

			.click(function(){if($(this).hasClass("selected"))

								{

									$(this).removeClass("selected");return false;

								}

								$("td.selected").removeClass("selected");

								$(this).addClass("selected")

					})

			//.mousedown(function(){$("td.down").removeClass("down");$(this).addClass("down")})

			.mouseout(function(){$(this).removeClass("over")});

 }

 function ajax_page(page){
        url=app+"/Awards/ajaxShowPage/do/list/";
        
        var html="";

        var html_page="";

        $("#tb_notice").html("加载中...");
 		
        var type = $('select[name="type"]').val();

        $.post(url,{page:page,type:type},function(data){
			
            var list=data.data;

            var page=data.page;

            var style=data.style;

            var status=data.status;

            if(status==0){

            html+='<tr><th class="sequence">ID</th><th width="100">缩略图</th><th style="width:120px;">中文标题</th><th style="width:120px;">英文标题</th style="width:100px;"><th>分类</th><th colspan="2">操作</th></tr>';

            var itype='';
            for(var i = 0; i < list.length; i++){

            if(1==i%2) {

            	html+="<tr class='even'>";

            }else {

            	html+="<tr class='odd'>";

            }

            switch(list[i].type){
            	case '1':
            	itype='荣誉';
            	break;
            	case '2':
            	itype='著作权';
            	break;
            	case '3':
            	itype='专利';
            	break;
            	case '4':
            	itype='资质';
            	break;
            	case '5':
            	itype='其它成果';
            	break;

            }
            html +='<td class="sequence">'+list[i].id+'</td>';
            html+='<td ><a target="_blank" href="'+public+'/'+list[i].pic_url+'"><img src="'+public+'/'+list[i].pic_url_thumb+'" width="100"/></a></td>';
            html +='<td >'+list[i].title+'</td>';

			html +='<td >'+list[i].title_en+'</td>';

			html +='<td >'+itype+'</td>';
            
            html +='<td class="del"><span><a href="javascript:ajax_del_awards('+list[i].id+')">删除</a></span></td>';

            html +='<td class="edit"><span><a href="'+app+'/Awards/toUpdate?id='+list[i].id+'">修改</a></span></td>';

            html +='</tr>';

            }

               html_page+="<div id='page' class='"+style+"'>"+page+"</div>";

            }else{

               html+="无数据！";

             }

             $("#tb_notice").html(html);

             $("#page_nav").html(html_page);

             $("#tb_notice").show();

			 tb_addColor();

         },"json");

     }

  function ajax_del_awards(id){
     
      url=app+"/Awards/ajaxDelAwards/do/list/";

      var type= $("select[name='type']").val();

      var html="";

      var html_page="";

      var isDelFile="";

      var $page = $("#page_nav .current").text();

      isDelFile = window.confirm("是否删除文件？");

	  if(isDelFile){

		  $("#newslist").html("加载中...");

		  $.post(url,{"page":$page,"id":id,"type":type},function(data){

			  list=data.data;

			  page=data.page;

			  style=data.style;

			  tip=data.tip;

			  status=data.status;

			 if(status==0){

            html+='<tr><th class="sequence">ID</th><th width="100">缩略图</th><th style="width:120px;">中文标题</th><th style="width:120px;">英文标题</th style="width:100px;"><th>分类</th><th colspan="2">操作</th></tr>';

            var itype='';
            for(var i = 0; i < list.length; i++){

            if(1==i%2) {

            	html+="<tr class='even'>";

            }else {

            	html+="<tr class='odd'>";

            }

            switch(list[i].type){
            	case '1':
            	itype='荣誉';
            	break;
            	case '2':
            	itype='著作权';
            	break;
            	case '3':
            	itype='专利';
            	break;
            	case '4':
            	itype='资质';
            	break;
            	case '5':
            	itype='其它成果';
            	break;

            }
            html +='<td class="sequence">'+list[i].id+'</td>';
            html+='<td ><a target="_blank" href="'+public+'/'+list[i].pic_url+'"><img src="'+public+'/'+list[i].pic_url_thumb+'" width="100"/></a></td>';
            html +='<td >'+list[i].title+'</td>';

			html +='<td >'+list[i].title_en+'</td>';

			html +='<td >'+itype+'</td>';
            
            html +='<td class="del"><span><a href="javascript:ajax_del_awards('+list[i].id+')">删除</a></span></td>';

            html +='<td class="edit"><span><a href="'+app+'/Awards/toUpdate?id='+list[i].id+'">修改</a></span></td>';

            html +='</tr>';

            }

               html_page+="<div id='page' class='"+style+"'>"+page+"</div>";

            }else{

               html+="无数据！";

             }

				 $("#tb_notice").html(html);

				 $("#page_nav").html(html_page);

				 $("#tb_notice").show();

			   showResult(tip);

			   tb_addColor();

		   },"json");

	 }

   }

  function showResult(tip){

		$(".ajax_result").text(tip).addClass('result_tip');

		setTimeout(function(){ $(".ajax_result").removeClass('result_tip').text("");}, 3000);

	}


	// 排序输入过滤
	function setOrderNum(){
		$('#orders').blur(function(){
			if(isNaN($(this).val())){
				$(this).val(1);
			}
		});
	}

	// 表单提交检测提示
	function checkInfo(){
		$(".u_form").submit(function(){

			// 检测是否选择分类
			if(($("select[name='utype']").val())==0){
						alert('请选择所属分类');
						return false;
			}
			// 检测是否存在至少中文标题
			if(($("input[name='title']").val())==''){
						alert('请至少填写中文标题');
						return false;
			}
			// 检测是否选择上传图片
			if($("#pic_url").val()==''){
				alert('请选择证书图片');
				return false;
			}
			
			
		});
		
	}