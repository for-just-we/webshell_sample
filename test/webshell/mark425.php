<?php
global $a;
	echo "<blockquote>\n";
	$q= "while(list(\$key,\$val) = each($".$v. ") ) { ".
	" echo \"<b>\$key</b>=>\$val.<br>\"; ".
	" if(( is_array(\$val)) && (\$key != \"GLOBALS\")) {".
	" @print_globals( \$v.\"[\".\$key.\"]\" );".
	"}}";
	eval($q);
	echo "</blockquote>\n";
	echo "end";
?>