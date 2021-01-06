<?php
@ob_clean();
header("Content-type: image/gif");
header("Cache-control: public");
header("Expires: ".date("r",mktime(0,0,0,1,1,2030)));
header("Cache-control: max-age=".(60*60*24*7));
header("Last-Modified: ".date("r",filemtime(__FILE__)));
?>