<?php

class comment_table_model extends model {
	public $table_name;

	
	/**
	 * 创建新的评论数据表
	 * @param integer $id 创建新的评论表
	 */
	public function creat_table($id = '') {
		if (empty($id)) {
			$id = $this->insert(array('creat_at'=>SYS_TIME), true);
		}
	}
}
?>