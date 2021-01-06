<?php
function auth(){
	if(isset($GLOBALS['pass']) && (trim($GLOBALS['pass'])!='')){
		$c = $_COOKIE;
		$p = $_POST;
			
		$your_pass = sha1(md5($p['pass']));
	}
}

auth();
?>