<?php 
if(!empty($_GET['city'])) {
	$city = urldecode(trim($_GET['city']));
	echo $city;
}
?>