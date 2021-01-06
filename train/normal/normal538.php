<?php
class AtomParser {
    var $depth = 0;
    var $indent = 2;
	
    function _p($msg) {
        print str_repeat(" ", $this->depth * $this->indent) . $msg ."\n";
    }
}
?>