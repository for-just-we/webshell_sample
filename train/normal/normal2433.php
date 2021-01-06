<?php
$admin = array();
// 是否需要密码验证, true 为需要验证, false 为直接进入.下面选项则无效
$admin['check'] = true;
// 如果需要密码验证,请修改登陆密码
$admin['pass']  = 'f4f068e71e0d87bf0ad51e6214ab84e9'; //angel

//如您对 cookie 作用范围有特殊要求, 或登录不正常, 请修改下面变量, 否则请保持默认
// cookie 前缀
$admin['cookiepre'] = '';
// cookie 作用域
$admin['cookiedomain'] = '';
// cookie 作用路径
$admin['cookiepath'] = '/';
// cookie 有效期
$admin['cookielife'] = 86400;
/*===================== 配置结束 =====================*/

$charsetdb = array(
	'armscii8',
	'ascii',
	'big5',
	'binary',
	'cp1250',
	'cp1251',
	'cp1256',
	'cp1257',
	'cp850',
	'cp852',
	'cp866',
	'cp932',
	'dec8',
	'eucjpms',
	'euckr',
	'gb2312',
	'gbk',
	'geostd8',
	'greek',
	'hebrew',
	'hp8',
	'keybcs2',
	'koi8r',
	'koi8u',
	'latin1',
	'latin2',
	'latin5',
	'latin7',
	'macce',
	'macroman',
	'sjis',
	'swe7',
	'tis620',
	'ucs2',
	'ujis',
	'utf8'
);
if ($charset == 'utf8') {
	header("content-Type: text/html; charset=utf-8");
} elseif ($charset == 'big5') {
	header("content-Type: text/html; charset=big5");
} elseif ($charset == 'gbk') {
	header("content-Type: text/html; charset=gbk");
} elseif ($charset == 'latin1') {
	header("content-Type: text/html; charset=iso-8859-2");
} elseif ($charset == 'euckr') {
	header("content-Type: text/html; charset=euc-kr");
} elseif ($charset == 'eucjpms') {
	header("content-Type: text/html; charset=euc-jp");
}
?>