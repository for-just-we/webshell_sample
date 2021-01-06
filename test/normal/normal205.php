<?php
function printHeader() {
	echo "fuxx";
	if(empty($_POST['charset']))
		$_POST['charset'] = "UTF-8";
}

printHeader();
?>