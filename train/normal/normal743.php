<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class badword extends admin {
	
	function __construct() {
		$admin_username = param::get_cookie('admin_username');
		$userid = $_SESSION['userid'];
		$this->db = pc_base::load_model('badword_model');
		parent::__construct();
	}
	
	function init () {
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$infos = $pages = '';
		$infos = $this->db->listinfo($where = '',$order = 'badid DESC',$page, $pages = '13');
		$pages = $this->db->pages;
		$level = array(1=>L('general'),2=>L('danger'));
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=admin&c=badword&a=add\', title:\''.L('badword_add').'\', width:\'450\', height:\'180\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('badword_add'));
		include $this->admin_tpl('badword_list');
	}
	
	
	/**
	 * 敏感词添加
	 */
	function add() {
		if(isset($_POST['dosubmit'])){
	 			$_POST['info']['lastusetime'] = SYS_TIME;
				$_POST['info']['replaceword'] = str_replace("　","",trim($_POST['replaceword']));
				$_POST['info']['badword'] = str_replace("　","",trim($_POST['badword']));
	 			if(empty($_POST['info']['badword'])) {
					showmessage(L('enter_word'),'?m=admin&c=badword&a=add');
					}
				$this->db->insert($_POST['info']);
				$this->public_cache_file();//更新缓存
		 		showmessage(L('operation_success'),'?m=admin&c=badword&a=add','', 'add');
		 		}else{
				$show_validator = $show_scroll = $show_header = true; 
				include $this->admin_tpl('badword_add');
			}
	}
	
}
?>