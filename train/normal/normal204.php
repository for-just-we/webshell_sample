<?php
function printHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = "UTF-8";
}

if(empty( $_POST['ajax'] ))
	printHeader();
?>