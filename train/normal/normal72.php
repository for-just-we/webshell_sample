<?php
if (get_magic_quotes_gpc())
    $_POST = stripslashes_deep($_POST);

// Initialize variables 
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$webshcmd = isset($_POST['cmd']) ? $_POST['cmd']  : '';
$rows = isset($_POST['rows']) ? $_POST['rows'] : 24;
$columns = isset($_POST['columns']) ? $_POST['columns'] : 80;

/* 
Default username:password is root:toor , replace '435b41068e8665513a20070c033b08b9c66e4332' 
in the line below with the sha1 hash from the command 'echo -n yourpasswordhere | sha1sum -' 
*/
$ini['users'] = array('root' => 'sha1:435b41068e8665513a20070c033b08b9c66e4332');

// Default settings
$default_settings = array('home-directory'   => '.');

// Merge settings
$ini['settings'] = array_merge($default_settings, $ini['users']);

session_start();

?>