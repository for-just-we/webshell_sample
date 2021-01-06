<?php
define('VER',			"\x05");
define('CONNECT',		"\x01");
define('AUTH_METHOD',		"\x02");
define('AUTH_NOT_REQ',		"\x00");
define('WRONG_AUTH_METHODS',	"\xFF");
define('REP_SUCCESS',		"\x00");
define('REP_WRONG_COMMAND',	"\x07");
define('REP_SOCKS_ERROR',	"\x01");
define('REP_BLOCKED_HOST',	"\x02");
define('REP_BAD_HOST',		"\x04");
define('IPv4',			"\x01");
define('DOMAIN',		"\x03");
define('CLOSED_SOCKET',		-12);
define('NO_DATA',		-11);
define('NOT_ALL_DATA',		-10);
define('STATUS_RECVSTARTREQ',	-9);
define('STATUS_RECVAUTHREQ',	-8);
define('STATUS_REQUESTRECV',	-7);
define('STATUS_CONNECTING',	-6);
define('STATUS_WORKING',	-5);
?>