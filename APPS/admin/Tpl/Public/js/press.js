 $(document).ready(function(){

  //数据提交检测
  checkData(); 
	
  tb_addColor();
      if($("#create_time").length){
         $('#create_time').datepicker({
            inline: true,
            dateFormat:"yy-mm-dd"
          });
      }

 });

// 数据提交前检测
function checkData(){
  $('.u_form').submit(function(){
    if($("input[name='title']").val() == ''){
        alert("请填写中文标题"); 
        return false;
    }
    // if($("textarea[name='des']").val() == ''){
    //     alert("请填写中文描述"); 
    //     return false;
    // }
    // if($("input[name='title_en']").val() == ''){
    //     alert("请填写英文标题"); 
    //     return false;
    // }
    // if($("textarea[name='des_en']").val() == ''){
    //     alert("请填写英文描述"); 
    //     return false;
    // }
    // if($("input[name='pic_url']").val() == ''){
    //     alert("请选择封面图片"); 
    //     return false;
    // }
    // 
    // 
    // if($("input[name='press']").val() == ''){
    //     alert("请选择中文文件"); 
    //     return false;
    // }
    // if($("input[name='press_en']").val() == ''){
    //     alert("请填写英文文件"); 
    //     return false;
    // }
  });
  
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

        url=app+"/Press/ajaxShowPage/do/list/";
        
        var html="";

        var html_page="";

        $("#tb_notice").html("加载中...");

        $.post(url,{page:page},function(data){
							
            var list=data.data;

            var page=data.page;

            var style=data.style;

            var status=data.status;

            //var ptype = "";
            if(status==0){

            html+='<tr><th class="sequence">ID</th><th class="td_title">中文标题</th><th width="180">英文标题</th><th width="80">类型</th><th colspan="2">操作</th></tr>';

            for(var i = 0; i < list.length; i++){

            if(1==i%2) {

            	html+="<tr class='even'>";

            }else {

            	html+="<tr class='odd'>";

            }

            switch(list[i].type){
              case "1":
              var ptype = "企业新闻";
              break;
              case "2":
              var ptype = "媒体报道";

              break;
              case "3":
               var ptype = "行业信息 ";

              break;
              default:
              break;

            }
            html +='<td class="sequence">'+list[i].id+'</td>';

            html +='<td class="td_title"><a href="'+public+'/press/zh/'+list[i].file_url+'" target="_blank">'+list[i].title+'</a></td>';

		      	html +='<td class="td_title"><a href="'+public+'/press/en/'+list[i].file_url_en+'" target="_blank">'+list[i].title_en+'</a></td>';

            html +='<td class="del">'+ptype+'</td>';

            html +='<td class="del"><span><a href="javascript:ajax_del_press('+list[i].id+')">删除</a></span></td>';

            html +='<td class="edit"><span><a href="'+app+'/Press/toUpdate?id='+list[i].id+'">修改</a></span></td>';

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

  function ajax_del_press(id){

      url=app+"/Press/ajaxDelPress/do/list/";

      var html="";

      var html_page="";

      var isDelFile="";

      var $page = $("#page_nav .current").text();

      isDelFile = window.confirm("是否删除文件？");

	  if(isDelFile){

		  $("#newslist").html("加载中...");
		  //alert(page);
		 
		  $.post(url,{"id":id},function(data){

		  		if(data.status=='1'){
					   alert('删除成功');
					   history.go(0);
		  		}else{
		  			alert('删除失败');
		  			return false;
		  		}
			  

		   },"json");

	 }

   }

  function showResult(tip){

		$(".ajax_result").text(tip).addClass('result_tip');

		setTimeout(function(){ $(".ajax_result").removeClass('result_tip').text("");}, 3000);

	}