<?php
function sayFood($food='aaaa'){
	echo $food.'bbbb';
}
	// 调用
sayFood('abcd');// 如果传入参数,就使用传入的参数
sayFood();// 如果不传入参数,直接使用默认值
?>