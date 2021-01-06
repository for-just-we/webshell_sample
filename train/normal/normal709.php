<?php 
	function checkpasswd($password){
		if (!is_password($password)){
			return false;
		}
		return true;
	}

?>