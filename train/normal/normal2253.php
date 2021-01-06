<?php
defined('IN_PHPCMS') or exit('No permission resources.'); 

$mobile_verify = $_GET['mobile_verify'];
if(!$mobile_verify) 
	exit();
$mobile = $_GET['mobile'];
if($mobile){
	$posttime = time()-600;
	$where = "`mobile`='$mobile' AND `posttime`>'$posttime'";
}else{
	/*用户自发短信验证判断，不再传递mobile值，只判断10分钟内这个验证码是否存在，存在即认为此码对应的手机号为你所有*/
	$posttime = time()-600;
	$where = "`id_code`='$mobile_verify' AND `posttime`>'$posttime'";
}
?>
	