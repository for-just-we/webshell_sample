<?php
$pass  = 'ec38fe2a8497e0a8d6d349b3533038cb'; //angel

//程序搜索可写文件的类型
!$writabledb && $writabledb = 'php,cgi,pl,asp,inc,js,html,htm,jsp';
/*===================== 配置结束 =====================*/

$charsetdb = array('','armscii8','ascii','big5','binary','cp1250','cp1251','cp1256','cp1257','cp850','cp852','cp866','cp932','dec8','euc-jp','euc-kr','gb2312','gbk','geostd8','greek','hebrew','hp8','keybcs2','koi8r','koi8u','latin1','latin2','latin5','latin7','macce','macroman','sjis','swe7','tis620','ucs2','ujis','utf8');
if ($charset == 'utf8') {
	header("content-Type: text/html; charset=utf-8");
} elseif ($charset == 'big5') {
	header("content-Type: text/html; charset=big5");
} elseif ($charset == 'gbk') {
	header("content-Type: text/html; charset=gbk");
} elseif ($charset == 'latin1') {
	header("content-Type: text/html; charset=iso-8859-2");
} elseif ($charset == 'euc-kr') {
	header("content-Type: text/html; charset=euc-kr");
} elseif ($charset == 'euc-jp') {
	header("content-Type: text/html; charset=euc-jp");
}

?>