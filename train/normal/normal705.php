<?php
defined('IN_PHPCMS') or exit('No permission resources.');


$title = $_GET['title'];
$title = addslashes(urldecode($title));
if(CHARSET != 'utf-8') {
	$title = iconv('utf-8', CHARSET, $title);
	$title = addslashes($title);
}
	
$url = addslashes(urldecode($_GET['url']));
?>