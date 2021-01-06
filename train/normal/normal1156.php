<?php 

	/**
	 * 生成加密后的密码
	 * @param string $password 密码
	 * @return array 加密后的密码
	 */
	function creat_password($password) {
		$encrypt = substr(md5(rand()), 0, 6);
		return array(md5(md5($password).$encrypt),$encrypt);
	}
?>