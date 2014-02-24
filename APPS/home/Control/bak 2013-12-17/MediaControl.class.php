<?php
/**
 * 媒体中心控制器
 * author ldm
 */
class MediaControl extends CommonControl{
	
	/**
	 * 企業新聞
	 * @return [type] [description]
	 */
	function index(){
    $db = M("press_2");
    include_once(APP_PATH.'/Extend/Lib/myPage.class.php');

      // type = 1
    $where = " type = 1";

    $num = $db->where($where)->count();
    $p = new page($num,18);
  
    $result = $db->field("id,title,title_en,file_url,file_url_en,create_time,url")->where($where)->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();



    // echo $db->getLastSql();

    $this->assign('page',$p->show());//中文分頁

    $config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
    foreach($config as $k=>$v){
      $p->setConfig($k,$v);
    }

  
    $this->assign('list',$result);
    $this->assign("epage",$p->show());//英文分页
    

    $this->display();

	}


  /**
   * [企业新闻异步分页]
   */
  function NewsAjaxPage(){

        if($_GET['ajax'] == 1){
          $_GET['page'] = $_POST['page'];
          $type = $_POST['type']?$_POST['type']:1;
          $db =M("press_2");

          include_once(APP_PATH.'/Extend/Lib/myPage.class.php');
          $where = " type = $type";
          $num = $db->where($where)->count();
          $p= new page($num,18);

          $data = array();
          $data['lang'] = $_SESSION['lang']['_LANG_'];
          if ($data['data'] = $db->field("id,title,title_en,file_url,file_url_en,create_time")->where($where)->order("create_time desc,id desc")->limit($p->firstRow.','.$p->listRows)->all()) {

            // 格式化输出
            if($data['lang'] == 'en'){
              if(is_array($data['data'])){
                foreach($data['data'] as $k=>$v){
                  $data['data'][$k]['create_time'] = date("Y M d",strtotime($v['create_time']));
                  $data['data'][$k]['title_en'] = (showShort($v['title_en'],40));

                }
              }
            }else{
              if(is_array($data['data'])){
                foreach($data['data'] as $k=>$v){
                  
                  $data['data'][$k]['create_time'] = date("Y年m月d日",strtotime($v['create_time']));
                  $data['data'][$k]['title'] = showShort($v['title'],80);
                }
              }
            }



            
            if($data['lang'] == 'en'){
              // 英文分页
              $config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
              foreach($config as $k=>$v){
                $p->setConfig($k,$v);
              }
              
            }
            $data['page'] = $p->show();
           
            $data['status'] = 0;
            
          } else {
            $data['status'] = 1;
          }
            $this->_ajax( $data );


    }

  }

  /**
   * 媒體報導
   * @return [type] [description]
   */
  function mediareport(){
      $db = M("press_2");
    include_once(APP_PATH.'/Extend/Lib/myPage.class.php');

      // type = 1
    $where = " type = 2";

    $num = $db->where($where)->count();
    $p = new page($num,18);
  
    $result = $db->field("id,title,title_en,file_url,file_url_en,url,create_time")->where($where)->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();


    $this->assign('page',$p->show());//中文分頁

    $config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
    foreach($config as $k=>$v){
      $p->setConfig($k,$v);
    }

 
    $this->assign('list',$result);
    $this->assign("epage",$p->show());//英文分页

    $this->display();
  }


 
  /**
   * 行業信息 3
   * @return [type] [description]
   */
  function analysis(){

       $db = M("press_2");
    include_once(APP_PATH.'/Extend/Lib/myPage.class.php');

      // type = 1
    $where = " type = 3";

    $num = $db->where($where)->count();
    $p = new page($num,18);
  
    $result = $db->field("id,title,title_en,file_url,file_url_en,create_time")->where($where)->order("create_time desc,id desc")->limit($p->firstRow,$p->listRows)->all();


    $this->assign('page',$p->show());//中文分頁

    $config = array('header'=>'item','prev'=>'pre page','next'=>'next page','first'=>'first page','last'=>'last page','theme'=>' %totalRow% %header% %nowPage%/%totalPage% tiems %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
    foreach($config as $k=>$v){
      $p->setConfig($k,$v);
    }

    $this->assign('list',$result);
    $this->assign("epage",$p->show());//英文分页

    $this->display();

  }


  /**
   * 企業宣傳
   * @return [type] [description]
   */
  function publicity(){

    $this->display();

  }

  /**
   * 获得内页新闻显示内容
   * @return [type] [description]
   */
  function getPress(){
        $url = md5_d(__URL__);
        $data = S($url);

        if(!$data){
            // 缓存无效,数据库查询
            $data = array();

            $db = M('press_2');
            /************公告****************/
              $press = $db->field('id,title,title_en,file_url,file_url_en')->order("create_time desc,id desc")->limit(8)->select();

       
            foreach($press as $k=>$v){
              $v['title'] = showShort($v['title'],42);
              $v['title_en'] = strtoupper(showShort($v['title_en'],25));
              $press[$k] = $v;
            }

              $data['press'] = $press;
             
            S($url,$data,C('DATA_CACHE_TIME'));
        }else{
            // 缓存有效
            
        }
        $data['lang'] = L('_LANG_');
        $this->_ajax($data,"JSON");
        exit;
  }
	/**
	 * 获得内页公告通函数据
	 * @return [type] [description]
	 */
	function getAnnCirs(){
		    $url = md5_d(__URL__);
        $data = S($url);

        if(!$data){
            // 缓存无效,数据库查询
            $data = array();

           	$db = M('announcement_2');
            /************公告****************/
              $ann = $db->field('id,title,title_en,file_url,file_url_en,create_time')->order("create_time desc,id desc")->limit(4)->select();

            /*************通函***************/
              $cir = $db->Table('circular_2')->field('id,title,title_en,file_url,file_url_en,create_time')->order("create_time desc,id desc")->limit(4)->select();

            
              //$annCirs = array_merge($ann,$cir);
         		foreach($ann as $k=>$v){
         			$v['title'] = showShort($v['title'],42);
         			$v['title_en'] = strtoupper(showShort($v['title_en'],25));
         			$ann[$k] = $v;
         		}
         		foreach($cir as $k=>$v){
         			$v['title'] = showShort($v['title'],42);
         			$v['title_en'] = strtoupper(showShort($v['title_en'],25));
         			$cir[$k] = $v;
         		}

              $data['ann'] = $ann;
              $data['cir'] = $cir;

       	//$data['annCirs'] = $annCirs;
             
            S($url,$data,C('DATA_CACHE_TIME'));
        }else{
            // 缓存有效
            
        }
        $data['lang'] = L('_LANG_');
        $this->_ajax($data,"JSON");
        exit;
	}

	/**
	 * 获得内页年报数据
	 * @return [type] [description]
	 */
	function getIAReports(){
        $url = md5_d(__URL__);
		
        $data = S($url);

        if(!$data){
            // 缓存无效,数据库查询
            $data = array();
      /**
       * 获得年报数据
       * @var [字段]id,a_img 年报封面 ,i_img 中期封面 ,a_url 年报中文pdf, i_url 中期中文pdf , a_url_en 年报英文pdf , i_url_en中期英文pdf
       */
      $db = M('report_2');
      $report = $db->field('id,a_img,a_img_en,i_img,i_img_en,a_url,i_url,a_url_en,i_url_en,create_year')->order("create_year desc,id desc")->limit(2)->all();
      $report_r = $report;
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
      
      if(empty($report['a_img_en']) || $report['a_img_en'] == ' '){

        $report['a_img_en'] = $report['a_img'];
      }
      if(empty($report['i_img_en']) || $report['i_img_en'] == ' '){
        $report['i_img_en'] = $report['i_img'];
      }


        $data['report'] = $report;
            S($url,$data,C('DATA_CACHE_TIME'));
        }else{
            // 缓存有效
            
        }
        $data['lang'] = L('_LANG_');
        $this->_ajax($data);
        exit;


	}


  /**
   * 企業宣傳下載
   * @return [type] [description]
   */
  function download(){
    $type = @$_GET['type'];
    
        $status = false;
        $downLoadCode = session('downLoadCode');
            if(is_array($downLoadCode)){
              foreach($downLoadCode as $v){
                if($v==$type){
                  $status = true;
                  break;
                }
              }

        }

        //dump($_SESSION);
        
        if(!$status){
          die('permission deny!');
        }

        switch($type){
                case 1:
                 $fileName= "anxin_zh.pdf";
                  
                break;
                case 2:
                  $fileName= "anxin_en.pdf";
                  
                break;
                case 3:
                  $fileName= "IVAS.pdf";
                  
                
                break;
                case 4:
                  $fileName= "ISD.pdf";
                
                break;
        }

        $file = __ROOT__."/Public/download/".$fileName;

        //$f = fopen($file,'r');

        //指定文件类型
        header("Content-type:application/pdf");
        header("Accept-Range:bytes");
        header("Accept-Range:Length".filesize($file));
        // 文件将被称为 downloaded.pdf
        header("Content-Disposition:attachment;filename=downloaded.pdf");
       
        
        
        // fclose($f);
        // PDF 源在 sss.pdf 中
        readfile($file);
        




  }

  /**
   * 检测企業宣傳下載密码
   * @return [type] [description]
   */
  function checkDownLoadCode(){
      $code = @$_GET['code'];
      $type = @$_GET['type'];
      $codefile = APP_PATH.'Tpl/Public/data/downLoadCode.txt';//存在密碼文件
      $str = '';
        if(file_exists($codefile)){
              $str = trim(file_get_contents($codefile));
        }
       
      if($code == $str){
        if(!isset($_SESSION['downLoadCode'][$type])){
           $_SESSION['downLoadCode'][$type] = $type;
        }
          echo 1;
          exit;
      }
        echo 0;
      exit;
  }
  /**
     * 檢測企業宣傳下載权限
     * @return [type] [description]
     */
    function checkDownLoadStatus(){
        if(IS_AJAX){
          // echo __PUBLIC__;
          // exit;
          $type = @$_GET['type'];
          $rarr = array();//返回的數據數組
          $rarr['status'] = 0;//密碼權限狀態，默認 0 禁止下載
          $downLoadCode = session('downLoadCode');
          if(is_array($downLoadCode)){
            foreach($downLoadCode as $v){
              if($v==$type){
                $rarr['status'] = 1;
             
                echo json_encode($rarr);
                exit;
                break;
              }
            }

          }
          echo json_encode($rarr);
          exit; 
        }
    }
}
?>