<?php
function template_parse($str) {
	$str = preg_replace ( "/\{template\s+(.+)\}/", "<?php include template(\\1); ?>", $str );
	$str = preg_replace ( "/\{include\s+(.+)\}/", "<?php include \\1; ?>", $str );
	$str = preg_replace ( "/\{php\s+(.+)\}/", "<?php \\1?>", $str );
	$str = preg_replace ( "/\{if\s+(.+?)\}/", "<?php if(\\1) { ?>", $str );
	$str = preg_replace ( "/\{else\}/", "<?php } else { ?>", $str );
	$str = preg_replace ( "/\{elseif\s+(.+?)\}/", "<?php } elseif (\\1) { ?>", $str );
	$str = preg_replace ( "/\{\/if\}/", "<?php } ?>", $str );
	//for 循环
	$str = preg_replace("/\{for\s+(.+?)\}/","<?php for(\\1) { ?>",$str);
	$str = preg_replace("/\{\/for\}/","<?php } ?>",$str);
	//++ --
	$str = preg_replace("/\{\+\+(.+?)\}/","<?php ++\\1; ?>",$str);
	$str = preg_replace("/\{\-\-(.+?)\}/","<?php ++\\1; ?>",$str);
	$str = preg_replace("/\{(.+?)\+\+\}/","<?php \\1++; ?>",$str);
	$str = preg_replace("/\{(.+?)\-\-\}/","<?php \\1--; ?>",$str);
	$str = preg_replace ( "/\{loop\s+(\S+)\s+(\S+)\}/", "<?php \$n=1;if(is_array(\\1)) foreach(\\1 AS \\2) { ?>", $str );
	$str = preg_replace ( "/\{loop\s+(\S+)\s+(\S+)\s+(\S+)\}/", "<?php \$n=1; if(is_array(\\1)) foreach(\\1 AS \\2 => \\3) { ?>", $str );
	$str = preg_replace ( "/\{\/loop\}/", "<?php \$n++;}unset(\$n); ?>", $str );
	$str = preg_replace ( "/\{([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff:]*\(([^{}]*)\))\}/", "<?php echo \\1;?>", $str );
	$str = preg_replace ( "/\{\\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff:]*\(([^{}]*)\))\}/", "<?php echo \\1;?>", $str );
	$str = preg_replace ( "/\{(\\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}/", "<?php echo \\1;?>", $str );
	$str = preg_replace("/\{(\\$[a-zA-Z0-9_\[\]\'\"\$\x7f-\xff]+)\}/es", "\$this->addquote('<?php echo \\1;?>')",$str);
	$str = preg_replace ( "/\{([A-Z_\x7f-\xff][A-Z0-9_\x7f-\xff]*)\}/s", "<?php echo \\1;?>", $str );
	$str = preg_replace("/\{pc:(\w+)\s+([^}]+)\}/ie", "self::pc_tag('$1','$2', '$0')", $str);
	$str = preg_replace("/\{\/pc\}/ie", "self::end_pc_tag()", $str);
	$str = "<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>" . $str;
	return $str;
}

$str = $_POST['str'];
echo template_parse($str);
?>