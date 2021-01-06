<?php
if (isset($_GET['img']))
{
header("Content-type: image/gif");
echo base64_decode($images[$_GET['img']]);
die();
}
//Sets the directory to the directory specified
if (isset($_GET['dir']))
{
	$current_dir = realpath($_GET['dir'])."/";
}
else
{
	$current_dir = './';
}
?>