<?php
$login = "redhat"; //login
//DON'T FORGOT ABOUT PASSWORD!!!
$pass = "root"; //password
$md5_pass = ""; //md5-cryped pass. if null, md5($pass)

$host_allow = array("*"); //array ("{mask}1","{mask}2",...), {mask} = IP or HOST e.g. array("192.168.0.*","127.0.0.1")
$login_txt = "Restricted area"; //http-auth message.
$accessdeniedmess = "redhat  v.".$shver."</a>: access denied";

$gzipencode = TRUE; //Encode with gzip?

$filestealth = TRUE; //if TRUE, don't change modify- and access-time
die();
?>