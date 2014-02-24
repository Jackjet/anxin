$hasUpdateFile = false;
$(document).ready(function(){
	// 日期选择控件
	if($("#create_time").length){
         $('#create_time').datepicker({
            inline: true,
            dateFormat:"yy-mm-dd"
          });
      }

	// 演示文稿使用隐藏url
	$('form #isurl').click(function(){

		if($(this).attr('checked')){
			$('.surl').addClass('bak');
			$('#url').attr({'disabled':false});

		}else{
			$('.surl').removeClass('bak');
			$('#url').attr({'disabled':true});
		


		}
	});
	// 切换发布页面显示内容
	$("#showChannel").change(function(){
		alert($(this).val());

	});
	// 点击切换栏目类型，如新闻分为企业新闻，媒体报道，行业信息等
	$('#channel').change(function(){
		
		var v = $(this).val();
		if('press_2'==v){
			// 新闻
			$("#type").html('<option value="1">企业新闻</option><option value="2">媒体报道</option><option value="3">行业信息</option>');
			$('#showType').show();

		}else if('awards_2'==v){
			// 资质荣誉
			$("#type").html('<option value="0">全部</option><option value="1">荣誉</option><option value="2">著作权</option><option value="3">专利</option><option value="4">资质</option><option value="5">其它成果</option>');
			$('#showType').show();

		}else{
			// 其它，则隐藏类型项
			$('#showType').hide();
		}
	});
	$("#update_file").hover(function(){$(this).addClass("hover")}, function(){$(this).removeClass("hover")})

	$("#update_file").click(function(){

		if(!$hasUpdateFile){

			$(this).css("background-image","url(/admin/Tpl/default/style/img/del.png)");

			$p = '<p><label for="file_url">中文文件上传</label> <input type="file" id="file_url" name="file_url" /></p><p><label for="file_url_en">英文文件上传</label> <input type="file" id="file_url_en" name="file_url_en" /></p>';

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

	});


});


/**
 * 确认删除
 * @return {[type]} [description]
 */
function ondel(){
	if(!confirm('确定删除吗？')){
		return false;
	}
	return true;
}