<?php
class AtomParser {
    function xml_escape($string)
    {
             return str_replace(array('&','"',"'",'<','>'),
                array('&amp;','&quot;','&apos;','&lt;','&gt;'),
                $string );
    }
}
?>