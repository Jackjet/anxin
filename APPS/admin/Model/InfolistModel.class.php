<?php
/**
 * infolist 文章信息分类扩展模型类
 */

class InfolistModel extends Model{
	

	function delList($id){
		$me = $this->field("id,pid,path")->where("id=$id")->one();
		if($me){
			$dpath = $me['path'].'-'.$me['id'];//删除匹配的路径
			$result = $this->exe("delete from ax_infolist where id=$id or (path like '".$dpath."%')");
			if($result){
				return true;
			}
		}
		dump($me);
		return false;
	}

	function getShow($pid){
		if($pid=='0'){
			return 1;
		}
		$p = $this->field("isshow")->where('id='.$pid)->one();
		
		if($p){
			return $p['isshow'];
		}
	}
	/**
	 * 获得所属分类名称
	 * @param  [type] $list [description]
	 * @return [type]       [description]
	 */
	function getType($list){
		if(is_array($list)){
			foreach($list as $k=>$v){
				$pid = $v['pid'];
				if($pid == 0){
					$v['type'] = "顶级分类";
					$list[$k] = $v;
					continue;
				}
				$result = $this->field('name,id')->where("id=$pid")->one();
				if($result){
					$v['type'] = $result['name'];
					$list[$k] = $v;
				}
			}
			return $list;
		}
		return $list;
	}
	/**
	 * 编辑分类
	 * @param  [type] $pid  [description]
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	function updateList($pid,$path,$replace_p,$isshow){
		
			$s = $this->exe("update ax_infolist set `isshow`=$isshow,`path`=replace(`path`,'$path','$replace_p') where (`path` like '".$path."-".$pid."%')");
			// echo $this->getLastSql();

			// exit;
			if($s){
				return true;
			}
			return false;

	}

	/**
	 * 获得插入的path
	 * @param  [type] $pid [description]
	 * @return [type]      [description]
	 */
	function getPath($pid){
		if($pid == 0){
			return '0';
		}
		$p = $this->where('id='.$pid)->one();
		if($p){
			return $p['path'].'-'.$p['id'];
		}
	}

	/**
	 * 获得所有文章分类
	 * @return [type] [description]
	 */
	function getListAll(){
		$result = $this->query("select id,name,pid,isshow,concat(path,'-',id) as ipath from ax_infolist order by ipath");
		return $result?$result:null;
	}




}











?>