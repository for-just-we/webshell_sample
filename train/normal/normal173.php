<?php
$path="c:/windows/system32/canimei";
session_start();
if(!empty($_POST['submit'])){
setcookie("connect");
setcookie("connect[host]",$_POST['host']);
setcookie("connect[user]",$_POST['user']);
setcookie("connect[pass]",$_POST['pass']);
setcookie("connect[dbname]",$_POST['dbname']);
echo "<script>location.href='?action=connect'</script>";
}
die();
?>
