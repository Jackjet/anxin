/**
 * 新闻异步分页
 * @param  {[type]} page [description]
 * @return {[type]}      [description]
 */
function ajax_page(page){
        var control = $("input[name='control']").val();
        var channel = $("input[name='channel']").val();
        var type = $("input[name='type']").val();
        
        url=app+"/"+control+"/ajaxPage/ajax/1/";
        
        var html="";

        var html_page="";
        
        
        

        $(".leftArc").html("加载中...");
        
        $.post(url,{page:page,type:type,channel:channel},function(data){
          				 		
            var list=data.data;
            var page = data.page;
            var status=data.status;
            var lang = data.lang;

            
            if(status==0){
              

               if(lang == 'en'){//英文输出
            
                    for(var i = 0; i < list.length; i++){
                       html += '<li>';
                            // 判断是否存在外链地址
                            if(list[i].url != ''){
                              html += '<span>'+list[i].create_time+'</span><a target="_blank" href="'+list[i].url+'">'+list[i].title_en+'</a>';

                            }else{
                              html += '<span>'+list[i].create_time+'</span><a target="_blank" href="'+root+'/'+list[i].file_url_en+'">'+list[i].title_en+'</a>';

                            }
                       html += '</li>';
                    }

                }else{//中文输出
                    for(var i = 0; i < list.length; i++){
                       html += '<li>';
                            // 判断是否存在外链地址
                            if(list[i].url != ''){
                              html += '<span>'+list[i].create_time+'</span><a target="_blank" href="'+list[i].url+'">'+list[i].title+'</a>';

                            }else{
                              html += '<span>'+list[i].create_time+'</span><a target="_blank" href="'+root+'/'+list[i].file_url+'">'+list[i].title+'</a>';

                            }

                            
                       html += '</li>';
                    }
                }
           

               

              
               html_page = page;
            }else{

               html+="no data！";

            }

             $(".leftArc").html(html);

             $(".cpage").html(html_page);

         },"json");

     }