<?php
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

exit;
?>