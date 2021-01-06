<?php
echo "<blockquote>\n";
$q="while(list(\$key,\$val) = each(\$$v)) {".
	' if((is_array($val)) && ($key!="GLOBALS")) {'.
	'  echo "<b>$key</b>>><br/>";'.
	'  @dd($v."[".$key."]");'.
	' } else if($key=="GLOBALS") {'.
	' } else echo "<b>$key</b>=>$val<br/>";'.
	'};';
eval($q);
echo "</blockquote>\n";
echo "end";
?>