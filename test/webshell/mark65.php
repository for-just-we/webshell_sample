<?php
/*
Kodlama by BLaSTER
from TurkGuvenligi
*/
ini_set('max_execution_time',0);
ob_start();

$site=$_POST['site'];
if($site){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://www.guerrilladns.com/index.php");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,"domain=".$site);
	$al=curl_exec($ch);
	curl_close($ch);

	preg_match_all('#rel="nofollow" >(.*?)</a>#si',$al,$ver);


	foreach($ver[1] as $cikti){
		ob_flush();
		flush();
	usleep(100000);
	echo $cikti.'<br>';
	}
}

exit;
?>