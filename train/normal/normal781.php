<?php
/**
 * 
 * 更新缓存类
 *
 */

class cache_api {
	
	private $db;
	
	public function __construct() {
		$this->db = '';
		$this->siteid = get_siteid();
	}
	
	
	/**
	 * 更新栏目缓存方法
	 */
	public function category() {
		$categorys = array();
		$models = getcache('model','commons');
		if (is_array($models)) {
			foreach ($models as $modelid=>$model) {
				$datas = $this->db->select(array('modelid'=>$modelid),'catid,type,items',10000);
				$array = array();
				foreach ($datas as $r) {
					if($r['type']==0) $array[$r['catid']] = $r['items'];
				}
				setcache('category_items_'.$modelid, $array,'commons');
			}
		}
		$array = array();
		$categorys = $this->db->select('`module`=\'content\'','catid,siteid',20000,'listorder ASC');
		foreach ($categorys as $r) {
			$array[$r['catid']] = $r['siteid'];
		}
		setcache('category_content',$array,'commons');
		$categorys = $this->categorys = array();
		$this->categorys = $this->db->select(array('siteid'=>$this->siteid, 'module'=>'content'),'*',10000,'listorder ASC');
		foreach($this->categorys as $r) {
			unset($r['module']);
			$setting = string2array($r['setting']);
			$r['create_to_html_root'] = $setting['create_to_html_root'];
			$r['ishtml'] = $setting['ishtml'];
			$r['content_ishtml'] = $setting['content_ishtml'];
			$r['category_ruleid'] = $setting['category_ruleid'];
			$r['show_ruleid'] = $setting['show_ruleid'];
			$r['workflowid'] = $setting['workflowid'];
			$r['isdomain'] = '0';
			if(!preg_match('/^(http|https):\/\//', $r['url'])) {
				$r['url'] = siteurl($r['siteid']).$r['url'];
			} elseif ($r['ishtml']) {
				$r['isdomain'] = '1';
			}
			$categorys[$r['catid']] = $r;
		}
		setcache('category_content_'.$this->siteid,$categorys,'commons');
		return true;
	}
}
?>