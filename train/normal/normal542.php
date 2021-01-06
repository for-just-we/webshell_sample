<?php
function xml_escape($string)
{
    return str_replace(array('&','"',"'",'<','>'),
                array('&amp;','&quot;','&apos;','&lt;','&gt;'),
                $string );
}

function map_attrs($k, $v) {
	return "$k=\"$v\"";
}
?>