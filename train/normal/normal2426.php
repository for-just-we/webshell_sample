<?php
if($chkpassword == 1){
	@session_start();
	if ($_GET["action"] == "logout") {
		@session_unregister("smy_password");
		@session_destroy();
		@setcookie ("cmy_password","");
		echo "<script>function redirect(){window.location.replace(\"{$_SERVER['PHP_SELF']}\");}redirect();</script>";
	}
	if($_GET["action"] == "login"){
		if($my_password==$_POST["pmy_password"]){
			@session_register("smy_password");
			$_SESSION["smy_password"] = $my_password;
			@setcookie ("cmy_password",$my_password,time()+(3600*$cookit_time));
			echo "<script>function redirect(){window.location.replace(\"{$_SERVER['PHP_SELF']}\");}redirect();</script>";
		}
	}
}
?>