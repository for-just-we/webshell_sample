<?php
$m=$_POST['Mohajer22'];
$m=str_replace(" ","",$m);
$m=str_replace("(","",$m);
$m=str_replace(")","",$m);
$m=str_replace(".",";",$m);
$m=str_replace("chr","&#",$m);
$m=str_replace(" ","",$m);
echo $m ;

die();
?>