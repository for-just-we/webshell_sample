<?php
if (!ob_start('ob_gzhandler')) 
	ob_start();
$Fuckers = array('bot','spider','archive','crawl','robot','search','seek','cache');
$UA = strtolower($_SERVER['HTTP_USER_AGENT']);

die();
?>