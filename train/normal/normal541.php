<?php
class AtomParser {
    var $content_ns_contexts = array();

    function is_declared_content_ns($new_mapping) {
        foreach($this->content_ns_contexts as $context) {
            foreach($context as $mapping) {
                if($new_mapping == $mapping) {
                    return true;
                }
            }
        }
        return false;
    }
}
?>