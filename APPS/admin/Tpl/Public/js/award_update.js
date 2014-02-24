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

			$p = '<p><label for="pic_url">图片</label> <input type="file" id="pic_url" name="pic_url" /></p></p>';

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