<?php
if (isset($_GET['img']))
{
echo base64_decode($images[$_GET['img']]);

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