
$(document).ready(function(){

    // 异步显示年份
    ajax_year(); 
});

/**
 * ann异步显示年份
 * @return {[type]} [description]
 */
function ajax_year(){
   
    $("select[name='year']").change(function(){
        url=app+"/InvestorRelations/ShareajaxShowYear/ajax/1/";

        var html="";

        var html_page="";
        var year = $("select[name='year']").val();
        

        $(".annBox").html("加载中...");

        $.post(url,{year:year},function(data){
                                    
            var list=data.data;
            var year = data.year;
            var page = data.page;
            var status=data.status;
            var lang = data.lang;

            
            if(status==0){
               html += '<h4>'+year+'</h4>';
               html += '<table id="annBoxContent" cellspacing="0" cellpadding="0" border="0">';
               html += '<tbody>';

               if(lang == 'en'){//英文输出
            
                    for(var i = 0; i < list.length; i++){
                       html += '<tr>';
                            html += '<td width="120">'+list[i].create_time+'</td>';
                            html += '<td ><a target="_blank" href="'+root+'/Public/circulars/en/'+list[i].file_url_en+'">'+list[i].title_en+'</a></td>';
                       html += '</tr>';
                    }

                }else{//中文输出
                    for(var i = 0; i < list.length; i++){
                       html += '<tr>';
                            html += '<td width="120">'+list[i].create_time+'</td>';
                            html += '<td ><a target="_blank" href="'+root+'/Public/circulars/zh/'+list[i].file_url+'">'+list[i].title+'</a></td>';
                       html += '</tr>';
                    }
                }
               html += '</tbody>';
               html += '</table>';

               html += '<div class="cpage"></div>';
               html_page+="<div class='epage' >"+page+"</div>";

            }else{

               html+="无数据！";

            }

             $(".annBox").html(html);

             $(".cpage").html(html_page);

         },"json");
    });
}
/**
 * ann异步分页
 * @param  {[type]} page [description]
 * @return {[type]}      [description]
 */
function ajax_page(page){

        url=app+"/InvestorRelations/ShareajaxShowPage/ajax/1/";

        var html="";

        var html_page="";
        var year = $("select[name='year']").val();
        

        $(".annBox").html("加载中...");

        $.post(url,{page:page,year:year},function(data){
          				 			
            var list=data.data;
            var year = data.year;
            var page = data.page;
            var status=data.status;
            var lang = data.lang;

            
            if(status==0){
               html += '<h4>'+year+'</h4>';
               html += '<table id="annBoxContent" cellspacing="0" cellpadding="0" border="0">';
               html += '<tbody>';

               if(lang == 'en'){//英文输出
            
                    for(var i = 0; i < list.length; i++){
                       html += '<tr>';
                            html += '<td width="120">'+list[i].create_time+'</td>';
                            html += '<td ><a target="_blank" href="'+root+'/Public/circulars/en/'+list[i].file_url_en+'">'+list[i].title_en+'</a></td>';
                       html += '</tr>';
                    }

                }else{//中文输出
                    for(var i = 0; i < list.length; i++){
                       html += '<tr>';
                            html += '<td width="120">'+list[i].create_time+'</td>';
                            html += '<td ><a target="_blank" href="'+root+'/Public/circulars/zh/'+list[i].file_url+'">'+list[i].title+'</a></td>';
                       html += '</tr>';
                    }
                }
               html += '</tbody>';
               html += '</table>';

               html += '<div class="cpage"></div>';
               html_page+="<div class='epage' >"+page+"</div>";

            }else{

               html+="无数据！";

            }

             $(".annBox").html(html);

             $(".cpage").html(html_page);

         },"json");

     }