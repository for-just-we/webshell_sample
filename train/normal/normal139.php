<?php
$settings	= array('PORT'			=> 4001,
			'AUTH'			=> 0,
			'STOPFILE'		=> 'stop.txt',	// create this file
								// to stop the server
			'LOGIN'			=> 'someshit',	// if AUTH == 1
			'PASSWORD'		=> '666',	// if AUTH == 1
			'MAX_CONNECTIONS'	=> 5,
			'LOG_FILE'		=> -1,		// if -1 - no logs
			'AUTH_TIMEOUT'		=> 60,		// sec
			'CONNECT_TIMEOUT'	=> 5,		// Timeout for connection
								// to remote server (sec)
		       );
// Remote hosts, which are not supported for working with
$blocked_hosts  = array('81.177.6.78',
			'88.212.221.34',

		       );
// Client hosts, which are not supported for working with (banned)
$blocked_users  = array('127.0.0.2'
		       );
/*-------------------------------------------------------------------------------------*/

set_time_limit(0) OR DIE('set_time_limit(0) failed');
error_reporting(0);
?>