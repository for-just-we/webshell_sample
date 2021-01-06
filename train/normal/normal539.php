<?php
class AtomParser {

    var $NS = 'http://www.w3.org/2005/Atom';
    var $ns_contexts = array();
    var $content_ns_contexts = array();

   
    function ns_to_prefix($qname, $attr=false) {
        # split 'http://www.w3.org/1999/xhtml:div' into ('http','//www.w3.org/1999/xhtml','div')
        $components = explode(":", $qname);

        # grab the last one (e.g 'div')
        $name = array_pop($components);

        if(!empty($components)) {
            # re-join back the namespace component
            $ns = join(":",$components);
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if($mapping[1] == $ns && strlen($mapping[0]) > 0) {
                        return array($mapping, "$mapping[0]:$name");
                    }
                }
            }
        }

        if($attr) {
            return array(null, $name);
        } else {
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if(strlen($mapping[0]) == 0) {
                        return array($mapping, $name);
                    }
                }
            }
        }
    }

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

    function xml_escape($string)
    {
             return str_replace(array('&','"',"'",'<','>'),
                array('&amp;','&quot;','&apos;','&lt;','&gt;'),
                $string );
    }
}
?>