<?php
session_start();
header( 'Location: login.html' );
//Get username and password for sudo
$user = $_POST['user'];
$password = $_POST['password'];

//Gets the command to be executed
$command = $_POST['command'];

//Executes the shell command
$output = shell_exec( 'echo '.$password.' | sudo -u '.$user.' -S '.$command.'' );

//Writes commands and the results to the command history file
$histFile = 'commands.txt';
$xstHist = file_get_contents( $histFile );
$shellUser = ''.$user.'@'.exec( hostname ).'';
$history = ''.$shellUser.'# '.$command.''.$output.''.$xstHist.'';
$file = fopen($histFile, 'w');
fwrite($file, $history);
fclose($file);
?>


