<?php 
defined('IN_PHPCMS') or exit('No permission resources.'); 

$url_forward = $_REQUEST['url'];
$msg = $_REQUEST['msg'];

echo $msg;
echo strip_tags($url_forward);
?>

