<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_sys_class('model', '', 0);
class comment_setting_model extends model {
	public $table_name;
	
	/**
	 * 按站点ID返回站点配置情况
	 * @param integer $siteid 站点ID
	 */
	public function site($siteid) {
		return $this->get_one(array('siteid'=>$siteid));
	}
}
?>