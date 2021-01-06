<?php
if ($surl_autofill_include) {
  $include = "&";
  foreach (explode("&",getenv("QUERY_STRING")) as $v) {
    $v = explode("=",$v);
    $name = urldecode($v[0]);
    $value = @urldecode($v[1]);
    foreach (array("http://","https://","ssl://","ftp://","\\\\") as $needle) {
      if (strpos($value,$needle) === 0) {
        $includestr .= urlencode($name)."=".urlencode($value)."&";
      }
    }
  }
}
if (empty($surl)) {
  $surl = "?".$includestr;
  $surl = htmlspecialchars($surl);
}

?>