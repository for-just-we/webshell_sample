<?php 
	/**
	 * 检查管理员名称
	 * @param array $data 管理员数据
	 */
	function checkuserinfo($data) {
		if(!is_array($data)){
			showmessage(L('parameters_error'));return false;
		} elseif (!is_username($data['username'])){
			showmessage(L('username_illegal'));return false;
		} elseif (empty($data['email']) || !is_email($data['email'])){
			showmessage(L('email_illegal'));return false;
		} elseif (empty($data['roleid'])){
			return false;
		}
		return $data;
	}
?>