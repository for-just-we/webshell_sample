<?php
class AtomParser {
    var $debug = false;

    var $depth = 0;
    var $indent = 2;
    var $ns_contexts = array();
 
	
    function _p($msg) {
        print str_repeat(" ", $this->depth * $this->indent) . $msg ."\n";
    }
	
    function parse() {

        set_error_handler(array(&$this, 'error_handler'));

        array_unshift($this->ns_contexts, array());

        if ( ! function_exists( 'xml_parser_create_ns' ) ) {
        	trigger_error( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) );
        	return false;
        }

        $parser = xml_parser_create_ns();
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, "start_element", "end_element");
        xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
        xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,0);
        xml_set_character_data_handler($parser, "cdata");
        xml_set_default_handler($parser, "_default");
        xml_set_start_namespace_decl_handler($parser, "start_ns");
        xml_set_end_namespace_decl_handler($parser, "end_ns");

        $this->content = '';

        $ret = true;

        $fp = fopen($this->FILE, "r");
        while ($data = fread($fp, 4096)) {
            if($this->debug) $this->content .= $data;

            if(!xml_parse($parser, $data, feof($fp))) {
                /* translators: 1: error message, 2: line number */
                trigger_error(sprintf(__('XML Error: %1$s at line %2$s')."\n",
                    xml_error_string(xml_get_error_code($parser)),
                    xml_get_current_line_number($parser)));
                $ret = false;
                break;
            }
        }
        fclose($fp);

        xml_parser_free($parser);

        restore_error_handler();

        return $ret;
    }

}
?>