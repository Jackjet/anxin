$hasUpdateFile = false;

$(document).ready(function(){

	
	// 点击切换上传方式
 	changeUpType();


	$('#create_time').datepicker({
					inline: true,
					dateFormat:"yy-mm-dd"
				});
	$("#update_file").hover(function(){$(this).addClass("hover")}, function(){$(this).removeClass("hover")})

	$("#update_file").click(function(){

		if(!$hasUpdateFile){

			$(this).css("background-image","url(/axChina/admin/Tpl/default/style/img/del.png)");

			$p = '<p style="display:none"><label for="sharecapital">上传文件</label> <input type="file" id="sharecapital" name="sharecapital" /></p>';

			$parent = $(this).parent("p");

			$parent.before($p);

			$parent.prev('p').slideDown(250);

			$(this).prev("label").text("取消修改文件");

			$hasUpdateFile = true;

			$(this).blur();

		}else {

			$(this).css("background-image","url(/axChina/admin/Tpl/default/style/img/add.png)");

			$willRemove = $(this).parent("p").prev("p");

			$willRemove.slideUp(250,function(){$(this).remove()});

			$(this).prev("label").text("修改上传文件");

			$hasUpdateFile = false;

			$(this).blur();

		}

	});										   

});



 // 切换报告上传方式
 function changeUpType(){
 	


 	$("input[name='uptype']").click(function(){
 		var a = $("input[name='uptype']:checked").val();

 		if(a==2){
 			$('.updirectly').show();
 			$('.up_ftp').hide();
 		}else{
 			$('.updirectly').hide();
 			$('.up_ftp').show();
 		}



 	});
 	
 }