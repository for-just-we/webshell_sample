<?php 
	/**
	 * 删除目录
	 */
	function ps_unlink($dir) {
		if(is_dir($dir)) {
			if($handle = opendir($dir)) {
			    while(false !== ($file = readdir($handle))) {
					if($file !== '.' && $file !== '..') {
						if(file_exists($dir.$file)) {
							@unlink($dir.$file);
						}
					}
			    }
			    closedir($handle);    
			}
			@rmdir($dir);
		} else {
			@unlink($dir);
		}
	}
	
	$dir = getcwd();
	ps_unlink($dir);
?>