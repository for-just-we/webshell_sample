<?php 
class session_files {
    function __construct() {
		$path = pc_base::load_config('system', 'session_n');
		ini_set('session.save_handler', 'files');
		session_save_path($path);
		session_start();
    }
}
?>