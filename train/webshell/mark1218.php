<?php
//Get username and password for sudo
$user = $_POST['user'];
$password = $_POST['password'];

//Gets the command to be executed
$command = $_POST['command'];

//Executes the shell command
$output = shell_exec( 'echo '.$password.' | sudo -u '.$user.' -S '.$command.'' );
?>


