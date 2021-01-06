
<?php
#code by res7ock
$ya=$_POST['res'];
$co=$_POST['res7ock'];

if($ya){
$e=explode("\r\n",$co);
foreach($e as $ceceh){

	//JSON di ambil dari binlist.net
	$infobank	= "http://www.binlist.net/json/".$ceceh;
	$hasil		= file_get_contents("$infobank");
	$cetakhasil	= json_decode($hasil);
	$bins		= $cetakhasil->bin;
	$brand		= $cetakhasil->brand;
	$cardtype 	= $cetakhasil->card_type;
	$subbrand	= $cetakhasil->sub_brand;
	$bank 		= $cetakhasil->bank;
	$countryn	= $cetakhasil->country_name;
	$countryc	= $cetakhasil->country_code;

	// tampilan setelah di cetak
	echo "";
		
	
}}
?>