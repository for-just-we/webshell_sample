<?php
defined('IN_PHPCMS') or exit('No permission resources.');

pc_base::load_sys_class('model', '', 0);

class comment_data_model extends model {
	public $table_name;
	
	/**
	 * 设置评论数据表
	 * @param integer $id 数据表ID
	 */
	public function table_name($id) {
		$this->table_name = $this->db_config[$this->db_setting]['tablepre'].'comment_data_'.$id;
		return $this->table_name;
	}
}
?>