<?php
error_reporting(6135);
$fc=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));
if($fc || ini_get("filter.default_flags"))
{
	foreach(array('_GET','_POST','_COOKIE','_SERVER') as $W){
		$dg=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);
		if($dg)
			$$W=$dg;
	}
}if(isset($_GET["file"])){
	header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");
	if($_GET["file"]=="favicon.ico"){
		header("Content-Type: image/x-icon");
	}
}
?>