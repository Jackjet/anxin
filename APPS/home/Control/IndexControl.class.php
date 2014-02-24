<?php
//测试控制器类
class IndexControl extends CommonControl{
    function test(){
      $this->display();
    }
     public function index(){


     // p(get_defined_constants('user'));


     // echo COMMON_LANGUAGE_PATH;
     //	L(include(APP_PATH."language/tw.php"));
       
        $url = md5_d(__URL__);
        
        $data = S($url);

        if(!$data){
            // 缓存无效,数据库查询
            $data = array();

        /***********公司新闻**************/ 
      $db = M('press_2');
      $news = $db->field('id,title,title_en,des,des_en,pic_url,file_url,file_url_en,create_time,url')->order("create_time desc,id desc")->limit(4)->select();
     
      // 提取第一个含有封面新闻
      $news_one = array();
      if(is_array($news)){
        foreach($news as $k=>$v){
            if(!empty($v['pic_url'])){
                $news_one = $v;
                unset($news[$k]);
                rsort($news);
                break;
            }
        }
      }
      if(empty($news_one)){
        //前四条新闻没有图片，则后面第一条存在封面图新闻
        $result = $db->field('id,title,title_en,des,des_en,pic_url,file_url,file_url_en,create_time,url')->where("pic_url != ''")->order("create_time desc,id desc")->one();
        if($result){
          $news_one = $result;
          array_pop($news);
        }
      }

      /************公告****************/
        $ann = $db->Table('announcement_2')->field('id,title,title_en,file_url,file_url_en,create_time')->order("create_time desc,id desc")->limit(6)->select();

      /*************通函***************/
        $cir = $db->Table('circular_2')->field('id,title,title_en,file_url,file_url_en,create_time')->order("create_time desc,id desc")->limit(6)->select();
        $share = $db->Table('sharecapital_2')->field('id,title,title_en,file_url,file_url_en,create_time')->order("create_time desc,id desc")->limit(6)->select();

       
      /*************年报***************/
      /**
       * 获得年报数据
       * @var [字段]id,a_img 年报封面 ,i_img 中期封面 ,a_url 年报中文pdf, i_url 中期中文pdf , a_url_en 年报英文pdf , i_url_en中期英文pdf
       */
      $report_r = $db->Table('report_2')->field('id,a_img,a_img_en,i_img,i_img_en,a_url,i_url,a_url_en,i_url_en,create_year')->order("create_year desc,id desc")->limit(2)->all();
      $report = $report_r[0];
      $report['aryear'] = $report['iryear'] = $report['create_year'];
      // 判断是否发布当年年报，否则显示上一年年报
      if(empty($report_r[0]['a_url']) || empty($report_r[0]['a_img'])){
        $report['a_url'] = $report_r[1]['a_url'];
        $report['a_img'] = $report_r[1]['a_img'];
        $report['a_url_en'] = $report_r[1]['a_url_en'];
        $report['a_img_en'] = $report_r[1]['a_img_en'];
        $report['aryear'] = $report_r[1]['create_year'];
      }
    
      // 如果英文封面为空，则使用中文封面
      
      if(empty($report['a_img_en']) || $report['a_img_en']==' '){

        $report['a_img_en'] = $report['a_img'];
      }
      if(empty($report['i_img_en']) || $report['i_img_en']==' '){
        $report['i_img_en'] = $report['i_img'];
      }

        // 获得演示文稿数据
        $ppt = $db->Table('ppt_2')->order('orders desc,create_time desc,id desc')->one();
        if(is_array($ppt)){
       
            if(empty($ppt['pic_url_en'])){
              $ppt['pic_url_en'] = $ppt['pic_url'];
            }
            if(empty($ppt['file_url_en'])){
              $ppt['file_url_en'] = $ppt['file_url'];
            }
        }
        

        //dump($report);
        $data['news'] = $news;
        $data['news_one'] = $news_one;
        $data['ann'] = $ann;
        $data['cir'] = $cir;
        $data['share'] = $share;
        $data['report'] = $report;
        $data['ppt'] = $ppt;
            S($url,$data,C('DATA_CACHE_TIME'));

        }else{
            // 缓存有效
           
        }
        
       

        $this->assign('newsList',$data['news']);//其他三条新闻
        $this->assign('news_one',$data['news_one']);//新闻第一条，带图片和描述
        $this->assign('ann',$data['ann']);//公告，6条
        $this->assign('cir',$data['cir']);//通函，6条
        $this->assign('share',$data['share']);//通函，6条

        $this->assign('report',$data['report']);//年报
        $this->assign('ppt',$data['ppt']);//演示文稿
        // dump($data);
        $this->display();
    }

    /**
     * 获得股票接口数据
     * @return [string] [文本数据]
     */
    public function getStockCode(){
        if(IS_AJAX){
          $data = file_get_contents("http://hq.sinajs.cn/list=hk01149");
          $data = iconv("GBK", "UTF-8", $data);
          echo $data;
         
          exit;
        }
        exit;
    }

    /**
     * 保存股票接口当前数据
     * @return [void] []
     */
    public function saveStockCode(){
        if(IS_AJAX){
          $data = @$_POST['data'];
          if(!empty($data)){
            $s = file_put_contents('Public/hk01149.txt', $data);

          }
          exit;
        }
    }
    
    /**
     * 获得以存在在服务器的股票接口数据
     * @return [string] [description]
     */
    public function getStaticCode(){
        if(IS_AJAX){
            if(is_file('Public/hk01149.txt')){
              $data = file_get_contents('Public/hk01149.txt');
              $this->_ajax($data);
            }
            
            exit;
        
        }
    }
}
?>