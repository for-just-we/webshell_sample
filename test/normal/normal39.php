<?php
ini_set('max_execution_time',0);
ini_set('memory_limit','999999999M');


function Zip($source, $destination) // Thanks to Alix Axel
{
    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $source = str_replace('\\', '/', realpath($source));

    if (is_dir($source) === true)
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        foreach ($files as $file)
        {
            $file = str_replace('\\', '/', realpath($file));

            if (is_dir($file) === true)
            {
                $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
            }
            else if (is_file($file) === true)
            {
                $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
            }
        }
    }
    else if (is_file($source) === true)
    {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    return $zip->close();
}

if(isset($_GET['zip'])) {
	$src = $_GET['zip'];
	$dst = getcwd()."/".basename($_GET['zip']).".zip";
	if (Zip($src, $dst) != false) {
		$filez = file_get_contents($dst);
		header("Content-type: application/octet-stream");
		header("Content-length: ".strlen($filez));
		header("Content-disposition: attachment; filename=\"".basename($dst)."\";");
		echo $filez;
	}
	exit;
}
exit;
?>