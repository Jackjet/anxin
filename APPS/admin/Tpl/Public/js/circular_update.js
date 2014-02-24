$hasUpdateFile = false;

$(document).ready(function(){
	$('#create_time').datepicker({
					inline: true,
					dateFormat:"yy-mm-dd"
				});
	$("#update_file").hover(function(){$(this).addClass("hover")}, function(){$(this).removeClass("hover")})

	$("#update_file").click(function(){

		if(!$hasUpdateFile){

			$(this).css("background-image","url(/admin/Tpl/default/style/img/del.png)");

			$p = '<p><label for="circular">中文文件上传</label> <input type="file" id="circular" name="circular" /></p><p><label for="circular_en">英文文件上传</label> <input type="file" id="circular_en" name="circular_en" /></p>';

			$parent = $(this).parent("p");

			$parent.before($p);

			$parent.prev('p').slideDown(250);

			$(this).prev("label").text("取消修改文件");

			$hasUpdateFile = true;

			$(this).blur();

		}else {

			$(this).css("background-image","url(/admin/Tpl/default/style/img/add.png)");

			$willRemove = $(this).parent("p").prev("p");
			$willRemove1 = $(this).parent("p").prev("p").prev("p");
			$willRemove.slideUp(250,function(){$(this).remove()});
			$willRemove1.slideUp(250,function(){$(this).remove()});

			$(this).prev("label").text("修改上传文件");

			$hasUpdateFile = false;

			$(this).blur();

		}

	})												   

})