 $(document).ready(function(){

	tb_addColor();
	$('#create_time').datepicker({
					inline: true,
					dateFormat:"yy-mm-dd"
				});
			});

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

        url=app+"/Sharecapital/ajaxShowPage/do/list/";

        var html="";

        var html_page="";

        $("#tb_notice").html("加载中...");

        $.post(url,{page:page},function(data){

            var list=data.data;

            var page=data.page;

            var style=data.style;

            var status=data.status;

            if(status==0){

            html+='<tr><th class="sequence">ID</th><th class="td_title">中文标题</th><th class="td_title">英文标题</th><th colspan="2">操作</th></tr>';

            for(var i = 0; i < list.length; i++){

            if(1==i%2) {

            	html+="<tr class='even'>";

            }else {

            	html+="<tr class='odd'>";

            }

            html +='<td class="sequence">'+list[i].id+'</td>';

            html +='<td class="td_title"><a href="'+public+'/announcements/zh/'+list[i].file_url+'" target="_blank">'+list[i].title+'</a></td>';

			html +='<td class="td_title"><a href="'+public+'/announcements/en/'+list[i].file_url_en+'" target="_blank">'+list[i].title_en+'</a></td>';

            html +='<td class="del"><span><a href="javascript:ajax_del_sharecapital('+list[i].id+')">删除</a></span></td>';

            html +='<td class="edit"><span><a href="'+app+'/Sharecapital/toUpdate/id/'+list[i].id+'/">修改</a></span></td>';

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

  function ajax_del_sharecapital(id){

      url=app+"/Sharecapital/ajaxDelSharecapital/do/list/";

      var html="";

      var html_page="";

      var isDelFile="";

      var $page = $("#page_nav .current").text();

      isDelFile = window.confirm("是否删除文件？");

	  if(isDelFile){

		  $("#newslist").html("加载中...");

		  $.post(url,{"page":$page,"id":id},function(data){

			  list=data.data;

			  page=data.page;

			  style=data.style;

			  tip=data.tip;

			  status=data.status;

			  if(status==0){

				 html+='<tr><th class="sequence">ID</th><th class="td_title">中文标题</th><th class="td_title">英文标题</th><th colspan="2">操作</th></tr>';

				for(var i = 0; i < list.length; i++){

				if(1==i%2) {

					html+="<tr class='even'>";

				}else {

					html+="<tr class='odd'>";

				}

				html +='<td class="sequence">'+list[i].id+'</td>';

				html +='<td class="td_title"><a href="'+public+'/announcements/zh/'+list[i].file_url+'" target="_blank">'+list[i].title+'</a></td>';

				html +='<td class="td_title"><a href="'+public+'/announcements/en/'+list[i].file_url+'" target="_blank">'+list[i].title_en+'</a></td>';

				html +='<td class="del"><span><a href="javascript:ajax_del_sharecapital('+list[i].id+')">删除</a></span></td>';

				html +='<td class="edit"><span><a href="'+app+'/Sharecapital/toUpdate/id/'+list[i].id+'/">修改</a></span></td>';

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