<?php
// mysql config: [this is for reading files through mysql]
$mysql_use = "yes"; //"yes" or "no"
$mhost = "localhost";
$muser = "kecodoc_forum";
$mpass = "cailon";
$mdb = "kecodoc_hce";


// default mysql_read files [seperated by: ':']:
$mysql_files_str = "/etc/passwd:/proc/cpuinfo:/etc/resolv.conf:/etc/proftpd.conf";
$mysql_files = explode(':', $mysql_files_str);
?>